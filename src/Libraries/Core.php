<?php

namespace App\Libraries;

use App\Libraries\Response;
use App\Libraries\Helper;

class Core
{
    protected $currentController = 'Api';
    protected $currentMethod = '_404';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        // get the first value of the url and check if the class exists in the controller
        if (file_exists(__DIR__ . '/../Controller/' . ucwords($url[0]) . '.php')) {

            // if it exists, set it as the current controller 
            $this->currentController = ucfirst($url[0]);
            unset($url[0]);
        } else {
            // controller does not exist
            Response::set([
                'statusCode' => 404,
                'message' => 'Endpoint not found'
            ]);
            die();
        }

        require_once __DIR__ . '/../Controller/' . ucwords($this->currentController) . '.php';
        $controllerClass = 'App\\Controller\\' . $this->currentController;
        $this->currentController = new $controllerClass;

        if (isset($url[1])) {
            $methodName = strtolower(Helper::getMethod()) . $this->toCamelCase($url[1]);

            if (method_exists($this->currentController, $methodName)) {
                $this->currentMethod = $methodName;
                unset($url[1]);
            } else {
                Response::set([
                    'statusCode' => 404,
                    'message' => 'Endpoint not found'
                ]);
                die();
            }
        } else {
            // endpoint does not exist
            Response::set([
                'statusCode' => 404,
                'message' => 'Endpoint not found'
            ]);
            die();
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }


    public function getUrl()
    {
            // FOR CRON JOBS
            if (!$_SERVER['REQUEST_METHOD']) {
                $postData = json_decode(file_get_contents('php://input'), true);
                if (!empty($postData['controller']) && !empty($postData['method'])) {
                    return [$postData['controller'], $postData['method']];
                }
            }

        
        if (!empty($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        } else {
            http_response_code(200);
            Response::set([
                "code" => 200,
                "status" => true,
                "message" => "Active",
            ]);
            die();
        }
    }

    private function toCamelCase($string)
    {
        $parts = explode('-', $string);
        return strtolower(array_shift($parts)) . array_reduce($parts, fn($carry, $p) => $carry . ucfirst(strtolower($p)), '');
    }
}