<?php


namespace Model\Repository;
use PDO;

class LoginRepository
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


    public function findLogin(){
        $sth = $this->connection->prepare('SELECT * FROM users where name = :name and password = :password ');
        $sth->execute(['name' => 'name', 'password' => 'password']);


    }
}