<?php

namespace App\DataFixtures;

use Guess\Domain\League\League;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $league = new League(1);
        $league->setId(1);
        $league->setName('Premier League');
        $league->setLeagueNameSlugged('premier-league');
        $league->setLeagueApiId(123);
        $league->setLogo('premier-league-logo.png');

        $manager->persist($league);
        $manager->flush();
    }
}
