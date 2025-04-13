<?php

namespace App\Libraries;

use App\Models\AppModel;
use Exception;

class Controller
{
    protected $model;
    private array $middlewares = [];

    public function addMiddleware(array $middlewares, array $paramsList = [])
    {
        foreach ($middlewares as $index => $middleware) {
            if (is_subclass_of($middleware, BaseMiddleware::class)) {
                $params = $paramsList[$index] ?? []; // Get params for the specific middleware
                $middleware_ = new $middleware(...(array) $params);
                // dd($params);
                $middleware_->handle();
            }
        }
    }


    public function model($model)
    {
        require_once __DIR__ . '/../Models/' . $model . '.php';
        $model = "\\App\\Models\\" . $model;
        $this->model = new $model();
    }
    public function modelForeign($model)
    {
        require_once __DIR__ . '/../Models/' . $model . '.php';
        $model = "\\App\\Models\\" . $model;
        return new $model();
    }
}
