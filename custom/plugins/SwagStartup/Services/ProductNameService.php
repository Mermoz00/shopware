<?php

namespace SwagStartup\Services;

use Doctrine\DBAL\Connection;

class ProductNAmeService
{
    private $connection;
    public function __construct(connection $connection)
    {
        $this->connection = $connection;
    }
    public function getProductNames()
    {
        $query = $this->connection->createQueryBuilder();
        $query->select(['name'])
            ->from('s_articles')
            ->setMaxResults(20);
        return $query->execute()->fetchAll(\PDO::FETCH_COLUMN);
    }
}
