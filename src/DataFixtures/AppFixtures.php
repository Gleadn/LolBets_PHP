<?php

namespace App\DataFixtures;

use App\Entity\Matchs;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    /**
    *  @var Generator
    */

    private Generator $faker;

    /**
    * @var UserPasswordHasherInterface
    */
    private $userPasswordHasher;

    public $leagues = ['LEC', 'LFL', 'LCS', 'LCK', 'LPL'];
    public $LECTeams = ['G2', 'Fnatic', 'Rogue', 'BDS', 'GiantX', 'SK', 'Vitality', 'Karmine Corp', 'Team Heretics', 'MAD Lions KOI'];
    public $LFLTeams = ['Vitality.Bee', 'Solary', 'TDS', 'GameWard', 'GO', 'Karmine Corp Blue', 'BDS A', 'Gentles M8', 'Aegis', 'BK Rog'];
    public $LCSTeams = ['NRG', 'Cloud9', '100 Thieves', 'Team Liquid', 'Dignitas', 'FlyQuest', 'Shopify Rebellion', 'Immortals'];
    public $LCKTeams = ['T1', 'Gen.G', 'D+', 'Hanwha Life Esports', 'KT Rolster', 'KwangdongFreecs', 'Nongshim RedForce', 'FearX', 'DRX', 'OK BRION'];
    public $LPLTeams = ['RNG', 'EDG', 'FunPlus Phoenix', 'LNG Esports', 'Top Esports', 'JDG', 'Bilibili Gaming', 'Invictus Gaming', 'OMG',
                        'Ninjas In Pyjamas', 'Team WE', 'Weibo', 'Anyomes Legend', 'LGD Gaming', 'Rare Atom', 'ThunderTalk Gaming', 'Ultra Prime'];

    public function __construct(UserPasswordHasherInterface $userUserPasswordHasher) {
        $this->faker = Factory::create("fr_FR");
        $this->userPasswordHasher = $userUserPasswordHasher;
    }

    public function load(ObjectManager $manager) : void
    {
        // Script pour générer des données
        
        for ($i = 0; $i < 50; $i++) {
            $match = new Matchs();
            $league = $this->faker->randomElement($this->leagues);
            $gameType = $this->faker->randomElement(['Regular Split', 'Play-Off']);
            $bo = $this->setBoFromGameType($gameType, $league);
            $teams = $this->getTeamsFromLeague($league);
            $team1 = $this->faker->randomElement($teams);
            do {
                $team2 = $this->faker->randomElement($teams);
            } while ($team2 === $team1);

            $match->setLeagueName($league)
                  ->setGameType($gameType)
                  ->setStatus('Not Started')
                  ->setBo($bo)
                  ->setTeam1Name($team1)
                  ->setTeam2Name($team2);

            $manager->persist($match);
        }

        $adminUser = new User();
        $adminUser
            ->setUsername("admin")
            ->setPassword($this->userPasswordHasher->hashPassword($adminUser, "password"))
            ->setRoles(["ROLE_ADMIN"]);
        $manager->persist($adminUser);

        $manager->flush();
    }

    public function getTeamsFromLeague($league) {
        switch ($league) {
            case 'LEC':
                return $this->LECTeams;
            case 'LFL':
                return $this->LFLTeams;
            case 'LCS':
                return $this->LCSTeams;
            case 'LCK':
                return $this->LCKTeams;
            case 'LPL':
                return $this->LPLTeams;
        }
    }

    public function setBoFromGameType($gameType, $league) {
        if ($league === 'LPL' || $league === 'LCK') {
            if ($gameType === 'Regular Split') {
                return 3;
            } else {
                return 5;
            }
        } else if ($league === 'LEC') {
            if ($gameType === 'Regular Split') {
                return 1;
            } else {
                $bo = $this->faker->randomElement([3, 5]);
                return $bo;
            }
        } else {
            if ($gameType === 'Regular Split') {
                return 1;
            } else {
                return 5;
            }
        }

    }
}

/* Code pour récupérer des valeurs depuis une API extérieure
$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://league-of-legends-esports.p.rapidapi.com/leagues', [
    'headers' => [
        'X-RapidAPI-Host' => 'league-of-legends-esports.p.rapidapi.com',
        'X-RapidAPI-Key' => '03163cb808msh7dc5ccb95bef849p19b486jsn94e2b536f0c0',
    ],
]);


$responseData = json_decode($response->getBody(), true);
$leaguesData = $responseData['data']['leagues'];
foreach ($leaguesData as $league) {
    $tempLeague = new TempLeagues();
    $tempLeague
        ->setIdSearch($league['id'])
        ->setName($league['name'])
        ->setSlug($league['slug'])
        ->setRegion($league['region']);
    $manager->persist($tempLeague);
}

$response = $client->request('GET', 'https://league-of-legends-esports.p.rapidapi.com/schedule?leagueId=98767991302996019', [
    'headers' => [
        'X-RapidAPI-Host' => 'league-of-legends-esports.p.rapidapi.com',
        'X-RapidAPI-Key' => '03163cb808msh7dc5ccb95bef849p19b486jsn94e2b536f0c0',
    ],
]);

$responseData = json_decode($response->getBody(), true);
$matchData = $responseData['data']['schedule']['events'];
foreach ($matchData as $match) {
    $tempMatch = new TempMatch();
    $tempMatch
        ->setStartTime($match['startTime'])
        ->setState($match['state'])
        ->setBlockName($match['blockName'])
        ->setLeagueName($match['league']['name'])
        ->setLeagueSlug($match['league']['slug'])
        ->setMatchId($match['match']['id'])
        ->setTeam1Name($match['match']['teams'][0]['name'])
        ->setTeam1Code($match['match']['teams'][0]['code'])
        ->setTeam1Result($match['match']['teams'][0]['result']['outcome'])
        ->setTeam1GameWin($match['match']['teams'][0]['result']['gameWins'])
        ->setTeam2Name($match['match']['teams'][1]['name'])
        ->setTeam2Code($match['match']['teams'][1]['code'])
        ->setTeam2Result($match['match']['teams'][1]['result']['outcome'])
        ->setTeam2GameWin($match['match']['teams'][1]['result']['gameWins'])
        ->setStrategyType($match['match']['strategy']['count']);
    $manager->persist($tempMatch);
}

$manager->flush();
*/

