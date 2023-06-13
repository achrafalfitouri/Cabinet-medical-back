<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230613010228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categoriem DROP FOREIGN KEY FK_C0FC7B0BFB88E14F');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP INDEX IDX_C0FC7B0BFB88E14F ON categoriem');
        $this->addSql('ALTER TABLE categoriem CHANGE utilisateur_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE categoriem ADD CONSTRAINT FK_C0FC7B0BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C0FC7B0BA76ED395 ON categoriem (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tel VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE categoriem DROP FOREIGN KEY FK_C0FC7B0BA76ED395');
        $this->addSql('DROP INDEX IDX_C0FC7B0BA76ED395 ON categoriem');
        $this->addSql('ALTER TABLE categoriem CHANGE user_id utilisateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE categoriem ADD CONSTRAINT FK_C0FC7B0BFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_C0FC7B0BFB88E14F ON categoriem (utilisateur_id)');
    }
}
