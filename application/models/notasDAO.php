<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notasDAO extends CI_Model {

    function save_notas($data){
        $this->db->insert('notas',$data);
        return $this->db->insert_id();

    }

    function update_notas($data, $id){
        $this->db->where('id',$id);
        $this->db->update('notas',$data);
    }
    function get_notas(){
        return $this->db->get('notas')->result();
    }

}
