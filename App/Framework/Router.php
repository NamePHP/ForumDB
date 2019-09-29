<?php


namespace Framework;




class Router
{
    /**
     * @var array
     */
    private $routes;

    private $currentRoute;
    /**
     * Router constructor.
     * @param array $routes
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }
    /**
     * @param string url
    */
    public function redirect(string $url): void
    {
        $url = sprintf("Location: %s", $url);
        header($url);
        die();
    }

    public function match(Request $request)
    {
        $uri = $request->getUri(); // book/213
        // var_dump($uri);
        $routes = $this->routes;
        // var_dump($routes);
        foreach ($routes as $route) {
            $pattern = $route['pattern'];
            // var_dump($pattern);
            if (!empty($route['parameters'])) {
                // var_dump($route['parameters']);
                foreach ($route['parameters'] as $name => $regex) {
                    $pattern = str_replace(
                        '{' . $name . '}',
                        '(' . $regex . ')',
                        $pattern
                    );
                }
            }
            $pattern = '@^' . $pattern . '$@';
            // var_dump($pattern);
            if (preg_match($pattern, $uri, $matches)) {
                // var_dump($matches);
                // remove match by whole regexp
                array_shift($matches);
                // var_dump($matches);
                if (!empty($route['parameters'])) {
                    $result = array_combine(
                        array_keys($route['parameters']),
                        $matches
                    );
                    // var_dump($result);
                    $request->mergeGetWithArray($result);
                }
                $this->currentRoute = $route;
                return;
            }
        }
        throw new \Exception('Page not found', 404);
    }
    /**
     * @return mixed
     */
    public function getCurrentController()
    {
        return $this->getCurrentRouteAttribute('controller');
    }
    /**
     * @return mixed
     */
    public function getCurrentAction()
    {
        return $this->getCurrentRouteAttribute('action');
    }
    /**
     * @param $key
     * @return mixed
     */
    private function getCurrentRouteAttribute($key)
    {
        if (!$this->currentRoute) {
            return null;
        }
        return $this->currentRoute[$key];
    }
    /**
     * TODO
     *
     * @param $name
     * @param array $parameters
     * @return string
     */
    public function generateUrl($name, array $parameters = [])
    {
        // foreach $this->routes -> if key = $name -> str_repace parameters
        return '/super-url/5';
    }

}