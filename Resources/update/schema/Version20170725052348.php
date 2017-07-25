<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170725052348 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campaignchain_location_salesforce_user CHANGE pictureUrl pictureUrl VARCHAR(255) DEFAULT NULL, CHANGE phoneNumber phoneNumber VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE nickname nickname VARCHAR(255) DEFAULT NULL, CHANGE emailVerified emailVerified TINYINT(1) DEFAULT NULL, CHANGE zoneinfo zoneinfo VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campaignchain_location_salesforce_user CHANGE pictureUrl pictureUrl VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE phoneNumber phoneNumber VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE email email VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE nickname nickname VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE emailVerified emailVerified TINYINT(1) NOT NULL, CHANGE zoneinfo zoneinfo VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
