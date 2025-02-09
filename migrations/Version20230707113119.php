<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230707113119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categoriem (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_C0FC7B0BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE examenresultat (id INT AUTO_INCREMENT NOT NULL, examentest_id INT NOT NULL, user_id INT NOT NULL, patient_id INT NOT NULL, nom_patient VARCHAR(255) NOT NULL, nom_test VARCHAR(255) NOT NULL, maladie VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_3013DBBBDB09B3B8 (examentest_id), INDEX IDX_3013DBBBA76ED395 (user_id), INDEX IDX_3013DBBB6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE examentest (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, patient_id INT NOT NULL, nom_test VARCHAR(255) NOT NULL, maladie VARCHAR(255) NOT NULL, nom_patient VARCHAR(255) NOT NULL, date_test DATETIME NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_EE1FBD5AA76ED395 (user_id), INDEX IDX_EE1FBD5A6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicament (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, categoriem_id INT NOT NULL, nom VARCHAR(255) NOT NULL, code_bare VARCHAR(255) NOT NULL, nom_categorie VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_9A9C723AA76ED395 (user_id), INDEX IDX_9A9C723A12D4341B (categoriem_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordonance (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, user_id INT NOT NULL, nom_patient VARCHAR(255) NOT NULL, maladie VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom_medicament LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', INDEX IDX_99240B9C6B899279 (patient_id), INDEX IDX_99240B9CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordonance_medicament (ordonance_id INT NOT NULL, medicament_id INT NOT NULL, INDEX IDX_3DE866534DBFB927 (ordonance_id), INDEX IDX_3DE86653AB0D61F7 (medicament_id), PRIMARY KEY(ordonance_id, medicament_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, age VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', email VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, INDEX IDX_1ADAD7EBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE refresh_tokens (id INT AUTO_INCREMENT NOT NULL, refresh_token VARCHAR(128) NOT NULL, username VARCHAR(255) NOT NULL, valid DATETIME NOT NULL, UNIQUE INDEX UNIQ_9BACE7E1C74F2195 (refresh_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendezvous (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, patient_id INT NOT NULL, nom_patient VARCHAR(255) NOT NULL, email_patient VARCHAR(255) NOT NULL, medecin VARCHAR(255) NOT NULL, maladie VARCHAR(255) NOT NULL, date_rv DATETIME NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_C09A9BA8A76ED395 (user_id), INDEX IDX_C09A9BA86B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(100) NOT NULL, adresse VARCHAR(255) NOT NULL, specialite LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', tel VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vital (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, patient_id INT NOT NULL, assurance VARCHAR(255) NOT NULL, antecedents_medicaux VARCHAR(255) NOT NULL, allergies VARCHAR(255) NOT NULL, medicament_actuel VARCHAR(255) NOT NULL, nemuro_assurance VARCHAR(255) NOT NULL, groupe_sanguin VARCHAR(255) NOT NULL, poids VARCHAR(255) NOT NULL, taille VARCHAR(255) NOT NULL, tension_artetielle VARCHAR(255) NOT NULL, frequence_cardiaque VARCHAR(255) NOT NULL, antecedents_familiaux VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom_patient VARCHAR(255) NOT NULL, INDEX IDX_9D84EDE2A76ED395 (user_id), UNIQUE INDEX UNIQ_9D84EDE26B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categoriem ADD CONSTRAINT FK_C0FC7B0BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE examenresultat ADD CONSTRAINT FK_3013DBBBDB09B3B8 FOREIGN KEY (examentest_id) REFERENCES examentest (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE examenresultat ADD CONSTRAINT FK_3013DBBBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE examenresultat ADD CONSTRAINT FK_3013DBBB6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE examentest ADD CONSTRAINT FK_EE1FBD5AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE examentest ADD CONSTRAINT FK_EE1FBD5A6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medicament ADD CONSTRAINT FK_9A9C723AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE medicament ADD CONSTRAINT FK_9A9C723A12D4341B FOREIGN KEY (categoriem_id) REFERENCES categoriem (id)');
        $this->addSql('ALTER TABLE ordonance ADD CONSTRAINT FK_99240B9C6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonance ADD CONSTRAINT FK_99240B9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ordonance_medicament ADD CONSTRAINT FK_3DE866534DBFB927 FOREIGN KEY (ordonance_id) REFERENCES ordonance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ordonance_medicament ADD CONSTRAINT FK_3DE86653AB0D61F7 FOREIGN KEY (medicament_id) REFERENCES medicament (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA86B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vital ADD CONSTRAINT FK_9D84EDE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE vital ADD CONSTRAINT FK_9D84EDE26B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categoriem DROP FOREIGN KEY FK_C0FC7B0BA76ED395');
        $this->addSql('ALTER TABLE examenresultat DROP FOREIGN KEY FK_3013DBBBDB09B3B8');
        $this->addSql('ALTER TABLE examenresultat DROP FOREIGN KEY FK_3013DBBBA76ED395');
        $this->addSql('ALTER TABLE examenresultat DROP FOREIGN KEY FK_3013DBBB6B899279');
        $this->addSql('ALTER TABLE examentest DROP FOREIGN KEY FK_EE1FBD5AA76ED395');
        $this->addSql('ALTER TABLE examentest DROP FOREIGN KEY FK_EE1FBD5A6B899279');
        $this->addSql('ALTER TABLE medicament DROP FOREIGN KEY FK_9A9C723AA76ED395');
        $this->addSql('ALTER TABLE medicament DROP FOREIGN KEY FK_9A9C723A12D4341B');
        $this->addSql('ALTER TABLE ordonance DROP FOREIGN KEY FK_99240B9C6B899279');
        $this->addSql('ALTER TABLE ordonance DROP FOREIGN KEY FK_99240B9CA76ED395');
        $this->addSql('ALTER TABLE ordonance_medicament DROP FOREIGN KEY FK_3DE866534DBFB927');
        $this->addSql('ALTER TABLE ordonance_medicament DROP FOREIGN KEY FK_3DE86653AB0D61F7');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBA76ED395');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA8A76ED395');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA86B899279');
        $this->addSql('ALTER TABLE vital DROP FOREIGN KEY FK_9D84EDE2A76ED395');
        $this->addSql('ALTER TABLE vital DROP FOREIGN KEY FK_9D84EDE26B899279');
        $this->addSql('DROP TABLE categoriem');
        $this->addSql('DROP TABLE examenresultat');
        $this->addSql('DROP TABLE examentest');
        $this->addSql('DROP TABLE medicament');
        $this->addSql('DROP TABLE ordonance');
        $this->addSql('DROP TABLE ordonance_medicament');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE refresh_tokens');
        $this->addSql('DROP TABLE rendezvous');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vital');
    }
}
