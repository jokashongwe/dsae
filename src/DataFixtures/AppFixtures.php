<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $user_password_hasher;
    public function __construct(UserPasswordHasherInterface $user_password_hasher)
    {
        $this->user_password_hasher = $user_password_hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername("dsaemana");
        $user->setEmail("no-reply@dsae.uniuele.cd");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setCreateDt(new \DateTime());
        $password = $this->user_password_hasher->hashPassword($user, "Secr0t@123#");
        $user->setPassword($password);
        $manager->persist($user);

        $manager->flush();
    }
}
