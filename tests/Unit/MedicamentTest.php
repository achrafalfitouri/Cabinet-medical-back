<?php
namespace App\Tests\Entity;

use App\Entity\Medicament;
use PHPUnit\Framework\TestCase;

class MedicamentTest extends TestCase
{
    public function testMedicamentEntity()
    {
        $medicament = new Medicament();

        $medicament->setNom('Medicine A');
        $medicament->setCodeBare('123456789');
        $medicament->setNomCategorie('Category A');
        $medicament->setDescription('This is a medicine.');
        $medicament->setCreatedAt(new \DateTimeImmutable());
        // Assuming the User and Categoriem entities are properly set and tested.

        $this->assertSame('Medicine A', $medicament->getNom());
        $this->assertSame('123456789', $medicament->getCodeBare());
        $this->assertSame('Category A', $medicament->getNomCategorie());
        $this->assertSame('This is a medicine.', $medicament->getDescription());
        $this->assertInstanceOf(\DateTimeImmutable::class, $medicament->getCreatedAt());
        // Additional assertions for User and Categoriem entities if necessary.
    }
}
