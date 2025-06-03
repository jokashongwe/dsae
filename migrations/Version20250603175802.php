<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250603175802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE study_programmes (id INT AUTO_INCREMENT NOT NULL, dean_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, details LONGTEXT NOT NULL, short_desc VARCHAR(100) DEFAULT NULL, primary_image VARCHAR(255) DEFAULT NULL, grade VARCHAR(255) DEFAULT NULL, INDEX IDX_B1AD985F5C07EB8E (dean_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE study_programmes ADD CONSTRAINT FK_B1AD985F5C07EB8E FOREIGN KEY (dean_id) REFERENCES professor (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE study_programmes DROP FOREIGN KEY FK_B1AD985F5C07EB8E
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE study_programmes
        SQL);
    }
}
