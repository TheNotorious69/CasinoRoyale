<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DAO extends CI_Model {

    function save_character($data){
        $this->db->insert('characters',$data);
        return $this->db->insert_id();

    }

    function update_character($data, $id){
        $this->db->where('id',$id);
        $this->db->update('characters',$data);
    }
    function get_characters(){
        return $this->db->get('characters')->result();
    }

}
