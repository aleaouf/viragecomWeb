<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240427230949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY espacepartenaire_ibfk_1');
        $this->addSql('DROP INDEX id_type ON espacepartenaire');
        $this->addSql('ALTER TABLE espacepartenaire ADD type VARCHAR(255) NOT NULL, DROP id_type');
        $this->addSql('ALTER TABLE type CHANGE nomType typenom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacepartenaire ADD id_type INT NOT NULL, DROP type');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT espacepartenaire_ibfk_1 FOREIGN KEY (id_type) REFERENCES type (id_type) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX id_type ON espacepartenaire (id_type)');
        $this->addSql('ALTER TABLE type CHANGE typenom nomType VARCHAR(255) NOT NULL');
    }
}
