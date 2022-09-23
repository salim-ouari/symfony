<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\Articles;
use App\Entity\User;
use DateTimeImmutable;

class ArtilcesFixtures extends Fixture
{


    // public function  __construct(private UserPasswordHasherInterface $passwordHasher)
    // {
    // }
    public function load(ObjectManager $manager): void

    {
        // $manager->persist($product);
        // $faker = Faker\Factory::create('fr_FR');

        // for ($art = 1; $art <= 10; $art++) {
        //     $article = new Articles();
        //     $user = new User();

        //     $article->setTitre($faker->title());
        //     $article->setArticle($faker->text());
        //     $article->setDate(DateTimeImmutable::createFromMutable($faker->dateTime));
        //     $article->setUser($user);
        //     $manager->persist($article);
        // }

        // $manager->flush();
    }
}
