<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnosDAO extends CI_Model {

    function save_alumnos($data){
        $this->db->insert('alumnos',$data);
        return $this->db->insert_id();

    }

    function update_alumnos($data, $id){
        $this->db->where('id',$id);
        $this->db->update('alumnos',$data);
    }
    function get_alumnos(){
        return $this->db->get('alumnos')->result();
    }

}
