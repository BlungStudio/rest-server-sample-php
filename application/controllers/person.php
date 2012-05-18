<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 5/16/12
 * Time: 6:05 PM
 * To change this template use File | Settings | File Templates.
 */
require APPPATH.'/libraries/REST_Controller.php';

class Person extends REST_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('person_model');
    }

   function save_post(){
        $person=json_decode(file_get_contents('php://input'),true);
        $this->person_model->insert($person);
       $respon['data']=$person;
       $this->response($respon, 200);
   }
}