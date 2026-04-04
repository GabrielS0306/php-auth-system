<?php

    namespace App\Core;

    class Router {

        private $routes = [];

        public function get($uri, $action) {
            $this->routes['GET'][$this->formatUri($uri)] = $action;
        }

        public function post($uri, $action) {
            $this->routes['POST'][$this->formatUri($uri)] = $action;
        }

        public function dispatch() {

    $httpMethod = $_SERVER['REQUEST_METHOD'];

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $projectBase = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

    $projectBase = preg_replace('#/Public$#', '', $projectBase);

    if ($projectBase !== '' && $projectBase !== '/') {
        $uri = preg_replace('#^' . preg_quote($projectBase, '#') . '#', '', $uri);
    }

    $uri = $this->formatUri($uri);

    if (!isset($this->routes[$httpMethod][$uri])) {
        http_response_code(404);
        echo "404 - Página não encontrada";
        return;
    }

    $action = $this->routes[$httpMethod][$uri];

    if (is_array($action)) {
        [$controller, $method] = $action;

        $controllerInstance = new $controller();
        return $controllerInstance->$method();
    }

    if (is_callable($action)) {
        return $action();
    }
}

        private function formatUri($uri) {
            return trim($uri, '/');
        }
    }

?>
