<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserEntity()
    {
        $user = new User();

        $user->setEmail('test@example.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('password123');
        $user->setNom('John Doe');
        $user->setAdresse('123 Street');
        $user->setTel('123456789');
        $user->setCreatedAt(new \DateTimeImmutable());
        $user->setSpecialite(['Admin']);

        $this->assertSame('test@example.com', $user->getEmail());
        $this->assertSame(['ROLE_USER'], $user->getRoles());
        $this->assertSame('password123', $user->getPassword());
        $this->assertSame('John Doe', $user->getNom());
        $this->assertSame('123 Street', $user->getAdresse());
        $this->assertSame('123456789', $user->getTel());
        $this->assertInstanceOf(\DateTimeImmutable::class, $user->getCreatedAt());
        $this->assertSame(['Admin'], $user->getSpecialite());
    }
} 
