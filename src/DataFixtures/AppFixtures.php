<?php

namespace App\DataFixtures;

use App\Factory\CoachFactory;
use App\Factory\TeamFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::new()->create();
        TeamFactory::new()->createMany(20);
        CoachFactory::new()->createMany(20);
    }
}
