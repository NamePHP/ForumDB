<?php


namespace Framework;


class Router
{
    /**
     * @param string url
    */
    public function redirect(string $url): void
    {
        $url = sprintf("Location %s", $url);
        header($url);

        die();
    }

}