<?php


namespace Model\Repository;

use Model\Entity\mainEntity;
use PDO;


class mainRepository
{
    /**
     * @var PDO
     */
    private $connection;

    /**
     * mainModelDb constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }


    public function findAll(){

        $sth = $this->connection->query('SELECT i.id , u.name, i.title FROM info i
        LEFT JOIN users u on i.users_id = u.id ORDER BY `id` DESC ');

        while ($row = $sth->fetch(PDO::FETCH_ASSOC)){

                extract($row);

        }
    }
}