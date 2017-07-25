<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170724154956 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE campaignchain_location_salesforce_user (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, pictureUrl VARCHAR(255) NOT NULL, profileUrl VARCHAR(255) NOT NULL, phoneNumber VARCHAR(255) NOT NULL, phoneNumberVerified TINYINT(1) NOT NULL, userId VARCHAR(255) NOT NULL, firstName VARCHAR(255) DEFAULT NULL, lastName VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, organizationId VARCHAR(255) NOT NULL, nickname VARCHAR(255) NOT NULL, emailVerified TINYINT(1) NOT NULL, zoneinfo VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_107C72A64B64DCC (userId), UNIQUE INDEX UNIQ_107C72A7D8C8404 (organizationId), UNIQUE INDEX UNIQ_107C72A64D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE campaignchain_location_salesforce_user ADD CONSTRAINT FK_107C72A64D218E FOREIGN KEY (location_id) REFERENCES campaignchain_location (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE campaignchain_location_salesforce_user');
    }
}
