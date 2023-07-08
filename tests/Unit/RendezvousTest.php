<?php

namespace App\Tests\Entity;

use App\Entity\Rendezvous;
use PHPUnit\Framework\TestCase;

class RendezvousTest extends TestCase
{
    public function testRendezvousEntity()
    {
        $rendezvous = new Rendezvous();

        $rendezvous->setNomPatient('John Doe');
        $rendezvous->setEmailPatient('john@example.com');
        $rendezvous->setMedecin('Dr. Smith');
        $rendezvous->setMaladie('Headache');
        $rendezvous->setDateRv(new \DateTime());
        $rendezvous->setCreatedAt(new \DateTimeImmutable());
        // Assuming the User and Patient entities are properly set and tested.

        $this->assertSame('John Doe', $rendezvous->getNomPatient());
        $this->assertSame('john@example.com', $rendezvous->getEmailPatient());
        $this->assertSame('Dr. Smith', $rendezvous->getMedecin());
        $this->assertSame('Headache', $rendezvous->getMaladie());
        $this->assertInstanceOf(\DateTime::class, $rendezvous->getDateRv());
        $this->assertInstanceOf(\DateTimeImmutable::class, $rendezvous->getCreatedAt());
        // Additional assertions for User and Patient entities if necessary.
    }
}
