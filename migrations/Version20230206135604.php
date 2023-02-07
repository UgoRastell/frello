<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230206135604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task_list ADD board_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE task_list ADD CONSTRAINT FK_377B6C63E7EC5785 FOREIGN KEY (board_id) REFERENCES board (id)');
        $this->addSql('CREATE INDEX IDX_377B6C63E7EC5785 ON task_list (board_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task_list DROP FOREIGN KEY FK_377B6C63E7EC5785');
        $this->addSql('DROP INDEX IDX_377B6C63E7EC5785 ON task_list');
        $this->addSql('ALTER TABLE task_list DROP board_id');
    }
}
