<?php

namespace App\Tests\Entity;

use App\Entity\Categoriem;
use PHPUnit\Framework\TestCase;

class CategoriemTest extends TestCase
{
    public function testCategoriemEntity()
    {
        $categoriem = new Categoriem();

        $categoriem->setNom('Category A');
        $categoriem->setCreatedAt(new \DateTimeImmutable());
        // Assuming the User entity is properly set and tested.

        $this->assertSame('Category A', $categoriem->getNom());
        $this->assertInstanceOf(\DateTimeImmutable::class, $categoriem->getCreatedAt());
        // Additional assertions for User entity if necessary.
    }
}
