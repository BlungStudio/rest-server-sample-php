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

    function update($id,$data){
        $this->db->where('id',$id);
        $update=$this->db->update('person',$data);
        return $update;
    }

    function delete($id){
        $this->db->where('id',$id);
        $delete=$this->db->delete('person');
        return $delete;
    }

    function get_all(){
        $query = $this->db->get('person');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

}