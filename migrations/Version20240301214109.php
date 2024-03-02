<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301214109 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_article CHANGE date_modify date_modify DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE blog_comment CHANGE date_modify date_modify DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE civilisation CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE programe CHANGE image_name image_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog_article CHANGE date_modify date_modify DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE blog_comment CHANGE date_modify date_modify DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE civilisation CHANGE image_name image_name VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE programe CHANGE image_name image_name VARCHAR(255) DEFAULT \'NULL\'');
    }
}
