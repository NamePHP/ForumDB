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

    public function save(mainEntity $main):void
    {
        /*$this->connection->
            prepare('insert into dbforum (name, email, password, title) VALUE (:name, :email, :password, :title )')->
            execute([
                'name' => $main->getName(),
                'email'=> $main->getEmail(),
                'password' => $main->getPassword(),
                'title' =>$main->getTitle()
        ]);*/
    }

    public function findAll(){
        $info = [];
        $sth = $this->connection->query('SELECT * FROM info ORDER BY `id` DESC ');

        while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
            if($row['title'] != null){
                extract($row);
            }
        }
    }
}