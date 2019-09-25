<?php

namespace Framework;


class Session
{
    const SESS = 'session_flash';
    const NAME = 'name';
    const ID = 'id';

    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }
    /**
     * @param string $key
     * @param null $default
     * @return mixed|null
     */
    public function get(string $key, $default = null)
    {
        if (!$this->has($key)) {
            return $default;
        }

        return $_SESSION[$key];
    }
    /**
     * @param string $key
     * @param $value
     */
    public function set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }
    /**
     * @param string $key
     */
    public function remove(string $key): void
    {
        if ($this->has($key)) {
            unset($_SESSION[$key]);
        }
    }
    /**
     * @param string $message
     */
    public function setFlash(string $message): void
    {
        $_SESSION[self::SESS] = $message;
    }
    /**
     * @return string|null
     */
    public function getFlash(): ?string
    {
        $message = $this->get(self::SESS);
        $this->remove(self::SESS);

        return $message;
    }

    /**
     * @param string $message
     */
    public function setName(string $message): void
    {
        $_SESSION[self::NAME] = $message;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        $massage = $this->get(self::NAME);

        return $massage;
    }
    /**
    * @param string $message
    */
    public function setId(string $message): void
    {
        $_SESSION[self::ID] = $message;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        $massage = $this->get(self::ID);

        return $massage;
    }

}