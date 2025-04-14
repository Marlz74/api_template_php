<?php

namespace App\Middleware;

use App\Libraries\BaseMiddleware;
use App\Libraries\Helpers;
use Faker\Extension\Helper;

class LoggedRedirect extends BaseMiddleware
{
    private string $page;

    public function __construct(string $page = "/dashboard")
    {
        $this->page = $page;
    }
    public function handle()
    {
        if (isset($_SESSION[APP]->admin)) {
            redirect($this->page);
        }
    }
}
