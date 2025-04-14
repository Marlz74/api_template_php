<?php

namespace App\Middleware;

use App\Libraries\BaseMiddleware;
use App\Libraries\Helpers;

class ApiMiddleware extends BaseMiddleware
{
    public function handle()
    {
        // Check if it is a cross-origin preflight request
        header('Access-Control-Allow-Origin: ' . DOMAIN);
        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: Content-Type, Authorization');

        if (isset($_SERVER['HTTP_ORIGIN'])) {

            $origin = $_SERVER['HTTP_ORIGIN'];
            $allowedOrigins = array(DOMAIN); // Add more allowed origins if needed

            if (!in_array($origin, $allowedOrigins)) {
                Helpers::jsonResponse([
                    'statusCode' => 403,
                    'status' => false,
                    'message' => 'Forbidden',
                    'data' => [
                        'origin' => 'constructor',
                        'from' => $origin
                    ]
                ]);
            }
        }
    }
}
