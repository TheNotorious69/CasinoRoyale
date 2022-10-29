<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productosDAO extends CI_Model {

    function save_productos($data){
        $this->db->insert('productos',$data);
        return $this->db->insert_id();

    }

    function update_productos($data, $id){
        $this->db->where('id',$id);
        $this->db->update('productos',$data);
    }
    function get_productos(){
        return $this->db->get('productos')->result();
    }

}
