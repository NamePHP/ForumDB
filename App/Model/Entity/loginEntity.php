<?php


namespace Model\Entity;

use Model\Repository\loginRepository;

class  loginEntity
{
    /**
     * @var
     */
    public $id;
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $password;

    /**
     * registerModel constructor.
     * @param $name
     * @param $password
     */
    public function __construct(?string $name,  ?string $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return !empty(trim($this->name)) && !empty(trim($this->password));
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


}