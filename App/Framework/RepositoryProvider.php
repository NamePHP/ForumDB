<?php


namespace Framework;

use PDO;
use RuntimeException;

class RepositoryProvider
{
    /**
     * @var array
     */
    private $repositoryMap;
    /**
     * @var array|RepositoryInterface[]
     *
     * то же самое что и repositoryMap но вместо названия классов - экземпляры классов
     */
    private $cachedRepository = [];
    /**
     * @var PDO
     */
    private $connection;
    /**
     * RepositoryProvider constructor.
     * @param array $repositoryMap
     * @param PDO $connection
     */
    public function __construct(array $repositoryMap, PDO $connection)
    {
        // TODO: check if all values if $repositoryMap implement RepositoryInterface
        $this->repositoryMap = $repositoryMap;
        $this->connection = $connection;
    }
    /**
     * @param string $entityClass
     * @return RepositoryInterface
     */
    public function getRepository(string $entityClass): RepositoryInterface
    {
        // смотри есть ли ключ в массиве. Если нету - исключение
        if (empty($this->repositoryMap[$entityClass])) {
            throw new RuntimeException('Repository is not set');
        }
        // если экземпляр репозитория уже создавался - то берем из массива-кеша
        if (!empty($this->cachedRepository[$entityClass])) {
            return $this->cachedRepository[$entityClass];
        }

        $repositoryClass = $this->repositoryMap[$entityClass];
        // если есть - создаем экземпляр репозитория
        return $this->cachedRepository[$entityClass] = new $repositoryClass($this->connection);
    }
}