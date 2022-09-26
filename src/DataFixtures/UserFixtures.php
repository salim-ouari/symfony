<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    // private $counter = 1;

    public function  __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }


    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail('admin@demo.io');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin'));
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR');

        for ($usr = 1; $usr <= 10; $usr++) {
            $article = new Articles();
            $user = new User();
            $user->setEmail($faker->email);
            $user->setPassword($this->passwordHasher->hashPassword($user, 'test'));
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
            $article->setTitre($faker->title());
            $article->setArticle($faker->text());
            $article->setDate(\DateTimeImmutable::createFromMutable($faker->dateTime));
            $article->setUser($user);
            $manager->persist($article);
            // $this->addReference('user_' . $this->counter, $user);
            // $this->counter++;

            $manager->flush();
        }
    }
}
