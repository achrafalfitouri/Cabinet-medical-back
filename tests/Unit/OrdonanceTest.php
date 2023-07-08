<?php
namespace App\Tests\Entity;

use App\Entity\Ordonance;
use App\Entity\Patient;
use App\Entity\User;
use App\Entity\Medicament;
use PHPUnit\Framework\TestCase;

class OrdonanceTest extends TestCase
{
    public function testOrdonanceEntity()
    {
        $ordonance = new Ordonance();

        $ordonance->setNomPatient('John Doe');
        $ordonance->setMaladie('Headache');
        $ordonance->setDescription('Take medication as prescribed');
        $ordonance->setCreatedAt(new \DateTimeImmutable());
        // Assuming the Patient and User entities are properly set and tested.
        // Assuming the Medicament entity is properly set and tested.
        $patient = new Patient();
        $ordonance->setPatient($patient);
        $user = new User();
        $ordonance->setUser($user);
        $medicament1 = new Medicament();
        $medicament2 = new Medicament();
        $ordonance->addMedicament($medicament1);
        $ordonance->addMedicament($medicament2);
        $ordonance->setNomMedicament(['Medicament 1', 'Medicament 2']);

        $this->assertSame('John Doe', $ordonance->getNomPatient());
        $this->assertSame('Headache', $ordonance->getMaladie());
        $this->assertSame('Take medication as prescribed', $ordonance->getDescription());
        $this->assertInstanceOf(\DateTimeImmutable::class, $ordonance->getCreatedAt());
        $this->assertSame($patient, $ordonance->getPatient());
        $this->assertSame($user, $ordonance->getUser());
        $this->assertCount(2, $ordonance->getMedicament());
        $this->assertSame(['Medicament 1', 'Medicament 2'], $ordonance->getNomMedicament());
    }
}
