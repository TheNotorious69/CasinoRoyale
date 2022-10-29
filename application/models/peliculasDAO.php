<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peliculasDAO extends CI_Model {

    function save_peliculas($data){
        $this->db->insert('peliculas',$data);
        return $this->db->insert_id();

    }

    function update_peliculas($data, $id){
        $this->db->where('id',$id);
        $this->db->update('peliculas',$data);
    }
    function get_peliculas(){
        return $this->db->get('peliculas')->result();
    }

}
