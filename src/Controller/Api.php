<?php
namespace App\Controller;

use App\Libraries\Controller;
use App\Libraries\Helpers;
use DateTimeZone;
/**
 * Class Api
 * @package App\Controller
 */
class Api extends Controller
{
    /**
     * @var \App\Model\ApiModel
     */
    private $model;

    // /**
    //  * @var \App\Model\AdminModel
    //  */
    // private $adminModel;

    /**
     * @var int|null
     */
    private $userId;

    /**
     * Api constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->model('ApiModel');
        
        $this->checkAccess();
    }

    /**
     * Check user access and set user ID.
     * @throws \Exception
     */
    private function checkAccess(): void
    {
        // $res = $this->model->access();

        // if ($res['code'] !== 200) {
        //     Helpers::jsonResponse(403, 'Unauthorized! Access denied, You do not have permission to access this resource.');
        // }

        // $this->userId = $res['data']->userId ?? null;
    }

}