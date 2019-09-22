<?php


namespace Model\Entity;


class registerModel
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
     * @param $email
     * @param $password
     */
    public function __construct(?string $name, ?string $password)
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