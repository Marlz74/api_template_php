<?php
namespace App\Controller;

use App\Libraries\Controller;
use App\Libraries\Helper;
use App\Libraries\Response;

class Callback extends Controller
{
    public $model;
    private $userid;
    public function __construct()
    {
        $this->model = $this->model('ApiModel');
    }

    public function index(){}

    public function postpagaPaymentRequest(){
        if (Helper::getMethod() == 'POST') {
            
            $rawData = json_decode(file_get_contents("php://input"), true);
            print_r($this->model->processPagaResponse($rawData));
            die();
        }
        
        
    }  
    
}