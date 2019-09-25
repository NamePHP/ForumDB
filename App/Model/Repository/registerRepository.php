<?php


namespace Model\Repository;


use Framework\RepositoryInterface;
use PDO;

class registerRepository implements RepositoryInterface
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


    public function save($name, $password){
        $sth = $this->connection->prepare('insert into users (name, password) values (:name, :password)');
        $sth->bindValue(':name',$name,PDO::PARAM_STR);
        $sth->bindValue(':password',$password,PDO::PARAM_STR);
        $sth->execute();
        return $res = $sth->fetch(PDO::FETCH_ASSOC);

    }

    public function findByName(string $name){
        $sth = $this
            ->connection
            ->prepare('select * from users where name = :name')
        ;
        $sth->execute(['name' => $name]);
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        if(!$data){
            return true;
        }

        return false;

    }

    public function findById(string $name){
        $sth = $this
            ->connection
            ->prepare('select * from users where name = :name')
        ;
        $sth->execute(['name' => $name]);
        return $data = $sth->fetch(PDO::FETCH_ASSOC);


    }

}