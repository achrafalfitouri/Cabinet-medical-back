<?php

namespace App\Tests\Entity;

use App\Entity\Patient;
use PHPUnit\Framework\TestCase;

class PatientTest extends TestCase
{
    public function testPatientEntity()
    {
        $patient = new Patient();

        $patient->setNom('John Doe');
        $patient->setAdresse('123 Street');
        $patient->setSexe('Male');
        $patient->setAge('30');
        $patient->setCreatedAt(new \DateTimeImmutable());
        // Assuming the User entity is properly set and tested.
        $patient->setEmail('john@example.com');
        $patient->setTel('123456789');
        $patient->setCin('123456');

        $this->assertSame('John Doe', $patient->getNom());
        $this->assertSame('123 Street', $patient->getAdresse());
        $this->assertSame('Male', $patient->getSexe());
        $this->assertSame('30', $patient->getAge());
        $this->assertInstanceOf(\DateTimeImmutable::class, $patient->getCreatedAt());
        // Additional assertions for User entity if necessary.
        $this->assertSame('john@example.com', $patient->getEmail());
        $this->assertSame('123456789', $patient->getTel());
        $this->assertSame('123456', $patient->getCin());
    }
}
