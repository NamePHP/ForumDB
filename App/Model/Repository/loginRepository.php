<?php


namespace Model\Repository;
use Framework\RepositoryInterface;
use Model\Entity\loginEntity;
use PDO;

class loginRepository implements RepositoryInterface
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


    public function findLogin($name, $password){

        $sth = $this->connection->prepare('SELECT * FROM users where name = :name and password = :password ');
        $sth->bindValue(':name',$name,PDO::PARAM_STR);
        $sth->bindValue(':password',$password,PDO::PARAM_STR);

        $sth->execute();
        return $res = $sth->fetch(PDO::FETCH_ASSOC);

    }


}