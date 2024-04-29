<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240429110512 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamation (id_reclamation INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, type VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, status VARCHAR(255) DEFAULT \'en attente\' NOT NULL, date_env DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, PRIMARY KEY(id_reclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id_reponse INT AUTO_INCREMENT NOT NULL, id_reclamation INT NOT NULL, contenu VARCHAR(255) NOT NULL, date_rep DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, INDEX id_reclamation (id_reclamation), PRIMARY KEY(id_reponse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY espacepartenaire_ibfk_2');
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY espacepartenaire_ibfk_1');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT FK_2EB25408C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie)');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT FK_2EB254087FE4B2B FOREIGN KEY (id_type) REFERENCES type (id_type)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY FK_2EB25408C9486A13');
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY FK_2EB254087FE4B2B');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT espacepartenaire_ibfk_2 FOREIGN KEY (id_type) REFERENCES type (id_type) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT espacepartenaire_ibfk_1 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
