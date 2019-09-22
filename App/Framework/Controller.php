<?php

namespace Framework;
use PDO;

abstract class Controller
{
    /**
     * @var Session
     */
    protected $session;

    /**
     * @var Router
     */
    protected $router;
    /**
     * @var PDO
     */
    protected $connection;
    /**
     * Controller constructor.
     * @param Session $session
     * @param Router $router
     * @param PDO $connection
     */
    public function __construct(Session $session, Router $router, PDO $connection)
    {
        $this->session = $session;
        $this->router  = $router;
        $this->connection = $connection;
    }


}