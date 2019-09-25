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
     * @var RepositoryProvider
     */
    protected $repositoryProvider;
    /**
     * Controller constructor.
     * @param Session $session
     * @param Router $router
     * @param PDO $connection
     * @param RepositoryProvider $repositoryProvider
     */
    public function __construct(Session $session, Router $router, PDO $connection, RepositoryProvider $repositoryProvider)
    {
        $this->session = $session;
        $this->router = $router;
        $this->connection = $connection;
        $this->repositoryProvider = $repositoryProvider;

    }

    /**
     * @param string $view
     * @param array $args
     * @return string
     */
    protected function render(string $view, array $args = []): string
    {
        extract($args);
        return require View . "$view";
    }

}