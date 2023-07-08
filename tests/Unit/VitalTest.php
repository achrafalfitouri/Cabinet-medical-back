<?php


namespace App\Tests\Entity;

use App\Entity\Vital;
use PHPUnit\Framework\TestCase;

class VitalTest extends TestCase
{
    public function testVitalEntity()
    {
        $vital = new Vital();

        $vital->setAssurance('Health Insurance');
        $vital->setAntecedentsMedicaux('None');
        $vital->setAllergies('Pollen');
        $vital->setMedicamentActuel('Paracetamol');
        $vital->setNemuroAssurance('123456789');
        $vital->setGroupeSanguin('A+');
        $vital->setPoids('70 kg');
        $vital->setTaille('170 cm');
        $vital->setTensionArtetielle('120/80');
        $vital->setFrequenceCardiaque('70 bpm');
        $vital->setAntecedentsFamiliaux('Diabetes');

        // Assuming the User and Patient entities are properly set and tested.

        $this->assertSame('Health Insurance', $vital->getAssurance());
        $this->assertSame('None', $vital->getAntecedentsMedicaux());
        $this->assertSame('Pollen', $vital->getAllergies());
        $this->assertSame('Paracetamol', $vital->getMedicamentActuel());
        $this->assertSame('123456789', $vital->getNemuroAssurance());
        $this->assertSame('A+', $vital->getGroupeSanguin());
        $this->assertSame('70 kg', $vital->getPoids());
        $this->assertSame('170 cm', $vital->getTaille());
        $this->assertSame('120/80', $vital->getTensionArtetielle());
        $this->assertSame('70 bpm', $vital->getFrequenceCardiaque());
        $this->assertSame('Diabetes', $vital->getAntecedentsFamiliaux());

        // Additional assertions for User and Patient entities if necessary.
    }
}
