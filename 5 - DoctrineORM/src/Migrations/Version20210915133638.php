<?php

declare(strict_types=1);

namespace Alura\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210915133638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Aluno (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE Curso (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nome VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE curso_aluno (curso_id INTEGER NOT NULL, aluno_id INTEGER NOT NULL, PRIMARY KEY(curso_id, aluno_id))');
        $this->addSql('CREATE INDEX IDX_6F96721A87CB4A1F ON curso_aluno (curso_id)');
        $this->addSql('CREATE INDEX IDX_6F96721AB2DDF7F4 ON curso_aluno (aluno_id)');
        $this->addSql('CREATE TABLE Telefone (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, numero VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE Aluno');
        $this->addSql('DROP TABLE Curso');
        $this->addSql('DROP TABLE curso_aluno');
        $this->addSql('DROP TABLE Telefone');
    }
}
