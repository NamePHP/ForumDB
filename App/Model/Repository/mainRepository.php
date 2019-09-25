<?php


namespace Model\Repository;

use Framework\RepositoryInterface;
use PDO;


class mainRepository implements RepositoryInterface
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


    public function findAll():array
    {
        $main = [];
        $sth = $this->connection->query('SELECT i.id , u.name, i.title FROM info i
                                           LEFT JOIN users u on i.users_id = u.id ORDER BY `id` DESC ');

        while ($data = $sth->fetchAll(PDO::FETCH_ASSOC)){
            $main = $data;
        }

        return $main;
    }

    public function addTitle($users_id, $title){
        $sth = $this->connection->prepare('insert into info (users_id, title) values (:users_id, :title)');
        $sth->bindValue(':users_id',$users_id,PDO::PARAM_STR);
        $sth->bindValue(':title',$title,PDO::PARAM_STR);
        $sth->execute();

        return $res = $sth->fetch(PDO::FETCH_ASSOC);
    }
}