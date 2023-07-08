<?php

namespace App\Tests\Entity;

use App\Entity\Examenresultat;
use PHPUnit\Framework\TestCase;

class ExamenresultatTest extends TestCase
{
    public function testExamenresultatEntity()
    {
        $examenresultat = new Examenresultat();

        $examenresultat->setNomPatient('John Doe');
        $examenresultat->setNomTest('Test A');
        $examenresultat->setMaladie('Headache');
        $examenresultat->setDescription('The test results are normal');
        $examenresultat->setCreatedAt(new \DateTimeImmutable());
        // Assuming the User, Examentest, and Patient entities are properly set and tested.

        $this->assertSame('John Doe', $examenresultat->getNomPatient());
        $this->assertSame('Test A', $examenresultat->getNomTest());
        $this->assertSame('Headache', $examenresultat->getMaladie());
        $this->assertSame('The test results are normal', $examenresultat->getDescription());
        $this->assertInstanceOf(\DateTimeImmutable::class, $examenresultat->getCreatedAt());
        // Additional assertions for User, Examentest, and Patient entities if necessary.
    }
}
