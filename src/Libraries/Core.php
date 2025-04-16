<?php

namespace App\Libraries;

use App\Libraries\Helpers;

class Core
{
    protected $currentController = 'Api';
    protected $currentMethod = '_404';
    protected $params = [];

    protected $version = 'v1';

    public function __construct()
    {
        
        $url = $this->getUrl();


        $this->version = isset($url[0]) && preg_match('/^v[0-9]+$/', $url[0]) ? strtolower($url[0]) : $this->version;

        if ($this->version !== 'v1') {
            unset($url[0]); // remove version from URL
        }
        
        // Handle controller
        $controllerName = ucfirst(strtolower((isset($url[1]) && !empty($url[1])) ? $url[1] : $this->currentController));
        $controllerClass = 'App\\Controller\\' . $this->version . '\\' . $controllerName;

        $controllerPath = __DIR__ . '/../Controller/' . $this->version . '/' . $controllerName . '.php';


        if (!file_exists($controllerPath)) {
            $this->respondNotFound("Controller '$controllerName' not found.");
        }

        // echo $controllerName;
        require_once $controllerPath;

        
        
        if (!class_exists($controllerClass)) {
            $this->respondNotFound("Controller class '$controllerClass' not found.");
        }

        $this->currentController = new $controllerClass;
        unset($url[1]);

        // Handle method

        

        $methodName = !isset($url[1]) ? 'getindex' : (strtolower(Helpers::getMethod()) . toCamelCase($url[2]));


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
            jsonResponse([
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
        jsonResponse([
            'statusCode' => 404,
            'message' => $message,
            'status' => false
        ]);
        exit;
    }
}
