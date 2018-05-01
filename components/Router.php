<?php

class Router{

    private $routes;
    
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI() {
        if(!empty($_SERVER['REQUEST_URI'])){
            return $uri = trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {
        // Get the query string:
        $uri = $this->getURI();
        // echo 'uri: '.$uri.'<br>';

        // Check if there is a query in the 'routes.php' file:
        foreach($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)) {
                // If there is a request, we determine which controller and method will process the request:
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri); // If you find $uriPattern in $uri then returns $path
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments);
                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));
                $parameters = $segments;

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                //We create a class-controller object and call the method (action):
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if($result != NULL) {
                    break;
                }
            }
        }
    }

}

?>