<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240429102617 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY espacepartenaire_ibfk_1');
        $this->addSql('ALTER TABLE espacepartenaire CHANGE id_type id_type INT DEFAULT NULL');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT FK_2EB254087FE4B2B FOREIGN KEY (id_type) REFERENCES type (id_type)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE espacepartenaire DROP FOREIGN KEY FK_2EB254087FE4B2B');
        $this->addSql('ALTER TABLE espacepartenaire CHANGE id_type id_type INT NOT NULL');
        $this->addSql('ALTER TABLE espacepartenaire ADD CONSTRAINT espacepartenaire_ibfk_1 FOREIGN KEY (id_type) REFERENCES type (id_type) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
