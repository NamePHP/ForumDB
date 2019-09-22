<?php


namespace Model\Entity;

use Model\Repository\loginRepository;

class  loginEntity
{
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


}