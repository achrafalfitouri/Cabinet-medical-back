<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230702134709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examenresultat DROP FOREIGN KEY FK_3013DBBB6B899279');
        $this->addSql('ALTER TABLE examenresultat ADD CONSTRAINT FK_3013DBBB6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examenresultat DROP FOREIGN KEY FK_3013DBBB6B899279');
        $this->addSql('ALTER TABLE examenresultat ADD CONSTRAINT FK_3013DBBB6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
    }
}
