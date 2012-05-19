<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 5/16/12
 * Time: 6:05 PM
 * To change this template use File | Settings | File Templates.
 */
require APPPATH.'/libraries/REST_Controller.php';

class Person_c extends REST_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('person_model');
    }

   function person_post(){
        $person=json_decode(file_get_contents('php://input'),true);
        $this->person_model->insert($person);
       $respon['data']=$person;
       $this->response($respon, 200);
   }

    function person_update_post(){
        $person=json_decode(file_get_contents('php://input'),true);
        $this->person_model->update($person['id'],$person);
        $respon['data']=$person;
        $this->response($respon,200);
    }

    function person_delete_post(){
        $person=json_decode(file_get_contents('php://input'),true);
        $this->person_model->delete($person['id']);
        $respon['data']=array('status'=>'sukses');
        $this->response($respon,200);

    }

    function person_get()
    {
        $users = $this->person_model->get_all();

        if($users)
        {
            $this->response($users, 200);
        }

        else
        {
            $this->response(NULL, 404);
        }
    }

}