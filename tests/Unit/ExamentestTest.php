<?php

namespace App\Tests\Entity;

use App\Entity\Examentest;
use PHPUnit\Framework\TestCase;

class ExamentestTest extends TestCase
{
    public function testExamentestEntity()
    {
        $examentest = new Examentest();

        $examentest->setNomTest('Test A');
        $examentest->setMaladie('Headache');
        $examentest->setNomPatient('John Doe');
        $examentest->setDateTest(new \DateTime());
        $examentest->setCreatedAt(new \DateTimeImmutable());
        // Assuming the User and Patient entities are properly set and tested.

        $this->assertSame('Test A', $examentest->getNomTest());
        $this->assertSame('Headache', $examentest->getMaladie());
        $this->assertSame('John Doe', $examentest->getNomPatient());
        $this->assertInstanceOf(\DateTimeInterface::class, $examentest->getDateTest());
        $this->assertInstanceOf(\DateTimeImmutable::class, $examentest->getCreatedAt());
        // Additional assertions for User and Patient entities if necessary.
    }
}
