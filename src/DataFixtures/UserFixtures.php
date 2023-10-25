<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user -> setEmail('primer@mail.ru');
        $user -> setPassword('$2y$13$ONF51Te76KraMDS5rxkgWeDGR8evcJvYRBAnFo4B1QsInOwjm.ylO');
        $manager ->persist($user);
        $manager->flush();

    }
}
