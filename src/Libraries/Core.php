<?php

namespace App\Libraries;

use App\Libraries\Helpers;

class Core
{
    protected $currentController = 'Api';
    protected $currentMethod = '_404';
    protected $params = [];

    public function __construct()
    {
        
        $url = $this->getUrl();
        
        // Handle controller
        $controllerName = ucfirst(strtolower((isset($url[0]) && !empty($url[0])) ? $url[0] : $this->currentController));
        $controllerClass = 'App\\Controller\\' . $controllerName;

        if (!file_exists(__DIR__ . '/../Controller/' . $controllerName . '.php')) {
            $this->respondNotFound("Controller '$controllerName' not found.");
        }

        // echo $controllerName;
        require_once __DIR__ . '/../Controller/' . $controllerName . '.php';

        
        
        if (!class_exists($controllerClass)) {
            $this->respondNotFound("Controller class '$controllerClass' not found.");
        }

        $this->currentController = new $controllerClass;
        unset($url[0]);

        // Handle method

        

        $methodName = !isset($url[1]) ? 'getindex' : (strtolower(Helpers::getMethod()) . Helpers::toCamelCase($url[1]));


        if (!method_exists($this->currentController, $methodName)) {
            $this->respondNotFound("Method '$methodName' not found in controller.");
            exit();
        }

        $this->currentMethod = $methodName;
        unset($url[1]);

        // Parameters
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    private function getUrl()
    {
        if (!isset($_GET['url']) || empty($_GET['url'])) {
            http_response_code(200);
            Helpers::jsonResponse([
                'statusCode' => 200,
                'message' => 'API is active',
                'status' => true
            ]);
            exit;
        }

        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return explode('/', $url);
    }

    private function respondNotFound($message = 'Endpoint not found')
    {
        http_response_code(404);
        Helpers::jsonResponse([
            'statusCode' => 404,
            'message' => $message,
            'status' => false
        ]);
        exit;
    }
}
