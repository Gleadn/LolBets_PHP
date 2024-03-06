<?php

namespace App\Controller;

use App\Entity\Bets;
use App\Entity\Matchs;
use App\Repository\BetsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\Cache\TagAwareCacheInterface;
use App\Validator\Tester;
use Symfony\Component\Security\Core\Security;

class BetsController extends AbstractController
{
    /**
     * Fonction qui renvoye la totalité des paris.
     * 
     * @param BetsRepository $repository
     * @param SerializerInterface $serializer
     * @param TagAwareCacheInterface $cache
     * 
     * @return JsonResponse
     */
    #[Route('api/bets', name: 'bets.getAll', methods:['GET'])]
    public function getAllBets(BetsRepository $repository, SerializerInterface $serializer, TagAwareCacheInterface $cache)
    {
        $idCacheGetAllBets = "getAllBetsCache";
        $jsonBets = $cache->get($idCacheGetAllBets, function(ItemInterface $item) use ($repository, $serializer) {
            $item->tag("betsCache");
            $bets = $repository->findBy(['Status' => ['pending', 'complete']]);
            return $serializer->serialize($bets, 'json', ['groups' => 'getAll']);
        });        
        return new JsonResponse($jsonBets, JsonResponse::HTTP_OK , [], true);
    }

    /**
     * Fonction qui renvoye le paris lié à l'id passé en url.
     * 
     * @param Bets $bet L'identifiant (ID) du paris.
     * @param SerializerInterface $serializer
     * 
     * @return JsonResponse
     */
    #[Route('api/bets/{bet}', name: 'bets.get', methods:['GET'])]
    public function getBet(Bets $bet, SerializerInterface $serializer)
    {
        $jsonBet = $serializer->serialize($bet, 'json', ['groups' => 'getAll']);
        return new JsonResponse($jsonBet, JsonResponse::HTTP_OK , [], true);
    }

    /**
     * Fonction qui créer un paris.
     * 
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @param TagAwareCacheInterface $cache
     * @param Tester $tester
     * 
     * @return JsonResponse
     * 
     * @example {"Match": 1, "Team1Winning": true, "Team1GameWin": 2, "Team21Winning": false, "Team2GameWin": 0}
     */
    #[Route('api/bets', name: 'bets.post', methods:['POST'])]
    public function createBet(Request $request, EntityManagerInterface $manager, TagAwareCacheInterface $cache, Tester $tester, Security $security) {
        $data = json_decode($request->getContent(), true);
        $match = $manager->getRepository(Matchs::class)->find($data['Matchs']);
        if (!$tester->dataValidation($data, $match)) {
            return new JsonResponse(null, JsonResponse::HTTP_BAD_REQUEST);
        }
        
        $bet = new Bets();
        $date = new \DateTime();

        $user = $security->getUser();


        $bet->setMatchs($match)
            ->setTeam1Winning($data['Team1Winning'])
            ->setTeam1GameWin($data['Team1GameWin'])
            ->setTeam2Winning($data['Team2Winning'])
            ->setTeam2GameWin($data['Team2GameWin'])
            ->setCreatedAt($date)
            ->setUpdatedAt($date)
            ->setStatus('pending')
            ->setUser($user);

        $cache->invalidateTags(["betsCache"]);
        $manager->persist($bet);
        $manager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_CREATED);
    }

    /**
     * Fonction qui met à jour un paris.
     * 
     * @param Bets $bet
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $manager
     * @param TagAwareCacheInterface $cache
     * 
     * @return JsonResponse
     * 
     * @example {"Match": 1, "Team1Winning": true, "Team1GameWin": 2, "Team21Winning": false, "Team2GameWin": 0}
     */
    #[Route('api/bets/{bet}', name: 'bets.put', methods:['PUT'])]
    public function updateBet(Bets $bet, Request $request, SerializerInterface $serializer, EntityManagerInterface $manager, TagAwareCacheInterface $cache) {
        $betToUpdate = $serializer->deserialize($request->getContent(),
            Bets::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $bet]
        );
        $date = new \DateTime();
        $betToUpdate->setUpdatedAt($date);

        $cache->invalidateTags(["betsCache"]);
        $manager->persist($betToUpdate);
        $manager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }

    /**
     * Fonction qui supprime un paris.
     * 
     * @param Bets $bet
     * @param BetsRepository $repository
     * @param EntityManagerInterface $manager
     * @param TagAwareCacheInterface $cache
     * 
     * @return JsonResponse
     */
    #[Route('api/bets/{bet}', name: 'bets.softDelete', methods:['DELETE'])]
    public function softDeleteBets(Bets $bet, BetsRepository $repository, EntityManagerInterface $manager, TagAwareCacheInterface $cache) {
        $betToDelete = $repository->find($bet);
        $betToDelete->setStatus('off');

        $cache->invalidateTags(["betsCache"]);
        $manager->persist($betToDelete);
        $manager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
