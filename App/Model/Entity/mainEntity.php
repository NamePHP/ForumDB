<?php


namespace Model\Entity;


class mainEntity
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $users_id;
    /**
     * @var
     */
    private $title;

    /**
     * mainEntity constructor.
     * @param $users_id
     * @param $title
     */
    public function __construct($users_id, $title)
    {
        $this->users_id= $users_id;
        $this->title = $title;
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
     * @return mixed
     */
    public function getIdName()
    {
        return $this->users_id;
    }

    /**
     * @param mixed $users_id
     */
    public function setIdName($users_id): void
    {
        $this->users_id = $users_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function isValid(): bool
    {
        return !empty(trim($this->title));
    }

}