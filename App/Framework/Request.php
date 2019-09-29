<?php
namespace Framework;

class Request
{
    private $get;

    private $post;

    private $file;

    private $server;

    /**
     * Request constructor.
     * @param $get
     * @param $post
     * @param $file
     * @param $server
     */
    public function __construct(array $get, array $post, array $server, array $file)
    {
        $this->get = $get;
        $this->post = $post;
        $this->file = $file;
        $this->server = $server;
    }

    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null
     */
    public function get(string $key, ?string $default = null)
    {
        return $this->get[$key] ?? $default;
    }
    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null
     */
    public function post(string $key, ?string $default = null)
    {
        return $this->post[$key] ?? $default;
    }
    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null
     */
    public function file(string $key, ?string $default = null)
    {
        return $this->post[$key] ?? $default;
    }
    /**
     * @param string $key
     * @param string|null $default
     * @return mixed|string|null
     */
    public function server(string $key, ?string $default = null)
    {
        return $this->server[$key] ?? $default;
    }
    public function isPost(): bool
    {
        return (bool) $this->post;
    }
    public function getUri(): string
    {
        $uri = $this->server('REQUEST_URI', '');
        $uri = explode('?', $uri);
        return $uri[0];
    }
    public function mergeGetWithArray(array $arr): void
    {
        $_GET += $arr;
        $this->get += $arr;
    }


}