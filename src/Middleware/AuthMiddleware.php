<?php

namespace App\Middleware;

use App\Libraries\BaseMiddleware;
use App\Libraries\Helpers;

class AuthMiddleware extends BaseMiddleware
{
    public function handle()
    {
        Helpers::isLoggedIn();
    }
}
