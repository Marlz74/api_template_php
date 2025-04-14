<?php

namespace App\Middleware;

use App\Libraries\BaseMiddleware;
use App\Libraries\Helpers;
use Faker\Extension\Helper;

class AccessMiddleware extends BaseMiddleware
{
    private array $permission;

    public function __construct(array $permission)
    {
        $this->permission = $permission;
    }
    public function handle()
    {

        if (!array_intersect($this->permission,$_SESSION[APP]->admin->permissions)) {
            flashMessage(['status'=>"error",'message'=>"You don't have permission for this operation!"]);
            redirect('/dashboard');
        }
    }
}
