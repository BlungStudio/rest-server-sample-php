<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 5/16/12
 * Time: 6:07 PM
 * To change this template use File | Settings | File Templates.
 */
class Person_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function insert($data) {
        $insert = $this->db->insert('person', $data);
        return $insert;
    }
}