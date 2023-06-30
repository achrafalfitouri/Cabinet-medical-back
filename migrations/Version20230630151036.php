<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230630151036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examenresultat ADD patient_id INT NOT NULL');
        $this->addSql('ALTER TABLE examenresultat ADD CONSTRAINT FK_3013DBBB6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('CREATE INDEX IDX_3013DBBB6B899279 ON examenresultat (patient_id)');
        $this->addSql('ALTER TABLE examentest ADD patient_id INT NOT NULL');
        $this->addSql('ALTER TABLE examentest ADD CONSTRAINT FK_EE1FBD5A6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('CREATE INDEX IDX_EE1FBD5A6B899279 ON examentest (patient_id)');
        $this->addSql('ALTER TABLE ordonance CHANGE nom_medicament nom_medicament LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\'');
        $this->addSql('ALTER TABLE patient ADD cin VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE examenresultat DROP FOREIGN KEY FK_3013DBBB6B899279');
        $this->addSql('DROP INDEX IDX_3013DBBB6B899279 ON examenresultat');
        $this->addSql('ALTER TABLE examenresultat DROP patient_id');
        $this->addSql('ALTER TABLE examentest DROP FOREIGN KEY FK_EE1FBD5A6B899279');
        $this->addSql('DROP INDEX IDX_EE1FBD5A6B899279 ON examentest');
        $this->addSql('ALTER TABLE examentest DROP patient_id');
        $this->addSql('ALTER TABLE ordonance CHANGE nom_medicament nom_medicament VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE patient DROP cin');
    }
}
