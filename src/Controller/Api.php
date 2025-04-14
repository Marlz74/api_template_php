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
    protected $model;

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
        
    }


    /**
     * Summary of getindex
     * @return void
     */
    public function getindex(){
        Helpers::jsonResponse([
            'statusCode' => 200,
            'message' => 'API is active and working',
            'status' => true
        ]);
        exit;
    }

    public function getTYo($id=null){
        Helpers::jsonResponse([
            'statusCode' => 200,
            'message' => 'API is active and working',
            'status' => true,
            "data"=>[
                "id"=>$id,
                "name"=>"test"
            ]
        ]);
        exit;
    }
}