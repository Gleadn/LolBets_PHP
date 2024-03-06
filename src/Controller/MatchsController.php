<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Repository\MatchsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\Cache\TagAwareCacheInterface;

class MatchsController extends AbstractController
{
    /**
    * Fonction qui renvoye la totalité des matchs.
    * 
    * @param MatchsRepository $repository
    * @param SerializerInterface $serializer
    * @param TagAwareCacheInterface $cache
    * 
    * @return JsonResponse
    */
    #[Route('/api/matchs', name: "matchs.getAll", methods:['GET'])]
    public function getAllMatchs(MatchsRepository $repository, SerializerInterface $serializer, TagAwareCacheInterface $cache)
    {
        $idCacheGetAllMatchs = "getAllMatchsCache";
        $jsonMatchs = $cache->get($idCacheGetAllMatchs, function(ItemInterface $item) use ($repository, $serializer) {
            $item->tag("matchCache");
            $matchs = $repository->findAll();
            return $serializer->serialize($matchs, 'json', ['groups' => 'getAll']);
        });        
        return new JsonResponse($jsonMatchs, JsonResponse::HTTP_OK , [], true);
    }

    /**
     * Fonction qui renvoye le match lié à l'id passé en url.
     * 
     * @param int $match L'identifiant (ID) du match.
     * @param SerializerInterface $serializer
     * 
     * @return JsonResponse
     */
    #[Route('/api/matchs/{match}', name: "matchs.get", methods:['GET'])]
    public function getMatch(Matchs $match, SerializerInterface $serializer)
    {
        $jsonMatch = $serializer->serialize($match, 'json', []);
        return new JsonResponse($jsonMatch, JsonResponse::HTTP_OK , [], true);
    }

    /**
     * Fonction qui simule le résultat d'un certains nombre de matchs non commencés.
     * 
     * @param MatchsRepository $repository
     * @param EntityManagerInterface $manager
     * @param TagAwareCacheInterface $cache
     * 
     * @return JsonResponse
     */
    #[Route('/api/matchs/play', name: "matchs.randomPut", methods:['PUT'])]
    public function simulateMatchs(MatchsRepository $repository, EntityManagerInterface $manager, TagAwareCacheInterface $cache)
    {
        $matchsID = $this->getRandomMatchsID($repository);
        for ($i = 0; $i < count($matchsID); $i++) {
            $match = $repository->find($matchsID[$i]);
            $numberOfGames = $this->createMatchResult($match->getBo());
            $whoWon = rand(0, 1);
            $match->setStatus("Completed")
                  ->setTeam1Result($whoWon == 0 ? "Win" : "Lose")
                  ->setTeam2Result($whoWon == 1 ? "Win" : "Lose")
                  ->setTeam1GameWin($whoWon == 0 ? $numberOfGames[0] : $numberOfGames[1])
                  ->setTeam2GameWin($whoWon == 1 ? $numberOfGames[0] : $numberOfGames[1]);
            
            $bets = $match->getBets();
            if ($bets) {
              foreach ($bets as $bet) {
                  $bet->setStatus("complete");
                  $manager->persist($bet);
                }
            }

            $cache->invalidateTags(["matchCache"]);
            $manager->persist($match);
        }

        $manager->flush();
        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);      
    }

    /**
     * Fonction qui simule le résultat du match lié à l'id passé en url.
     * 
     * @param Matchs $match
     * @param MatchsRepository $repository
     * @param EntityManagerInterface $manager
     * @param TagAwareCacheInterface $cache
     * 
     * @return JsonResponse
     */
    #[Route('/api/matchs/play/{match}', name: "matchs.put", methods:['PUT'])]
    public function simulateSingleMatch(Matchs $match, MatchsRepository $repository, EntityManagerInterface $manager, TagAwareCacheInterface $cache)
    {
        $matchToPlay = $repository->find($match);
        $numberOfGames = $this->createMatchResult($matchToPlay->getBo());
        $whoWon = rand(0, 1);
        $matchToPlay->setStatus("Completed")
                    ->setTeam1Result($whoWon == 0 ? "Win" : "Lose")
                    ->setTeam2Result($whoWon == 1 ? "Win" : "Lose")
                    ->setTeam1GameWin($whoWon == 0 ? $numberOfGames[0] : $numberOfGames[1])
                    ->setTeam2GameWin($whoWon == 1 ? $numberOfGames[0] : $numberOfGames[1]);

        $bets = $matchToPlay->getBets();
        if ($bets) {
            foreach ($bets as $bet) {
                $bet->setStatus("complete");
                $manager->persist($bet);
            }
        }

        $cache->invalidateTags(["matchCache"]);
        $manager->persist($matchToPlay);
        $manager->flush();
        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);      
    }

    public function getRandomMatchsID(MatchsRepository $repository)
    {
        $matchs = $this->excludePlayedMatchs($repository);
        $matchsID = [];
        $numberOfMatchsToPLay = floor(count($matchs) / 100 * 25);
        if ($numberOfMatchsToPLay != 0) {
            for ($i = 0; $i < $numberOfMatchsToPLay; $i++) {
                $matchsID[] = $matchs[$i];
            }
        }
        return $matchsID;
    }

    public function excludePlayedMatchs(MatchsRepository $repository)
    {
        $matchs = $repository->findAll();
        $matchsID = [];
        foreach ($matchs as $match) {
            if ($match->getStatus() == "Not Started") {
                $matchsID[] = $match->getId();
            }
        }
        return $matchsID;
    }

    public function createMatchResult(int $bo) {
        $winnerGames = [];
        array_push($winnerGames, ceil($bo / 2));
        if ($bo == 1) {
            array_push($winnerGames, 0);
        } else if ($bo == 3) {
            array_push($winnerGames, rand(0, 1));
        } else if ($bo == 5) {
            array_push($winnerGames,  rand(0, 2));
        }
        return $winnerGames;
    }
}
