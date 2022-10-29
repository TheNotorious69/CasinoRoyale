<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {

  
    function __construct(){
        parent:: __construct();
        $this->load->model('DAO');
    }

    public function characters_post(){
        $data = array(
            "name"=> $this->post('name'),
            "status"=> $this->post('status'),
            "species"=> $this->post('species'),
            "gender"=> $this->post('gender'),
            "image"=> $this->post('image'),
            
        );
        $get_key = $this->DAO->save_character($data);
        $data_update = array(
            "url" => base_url('characters/api/characters/'.$get_key)
        );
        $this->DAO->update_character($data_update,$get_key);

        $data['id'] = $get_key;
        $data['url'] = $data_update['url'];

        $response = array(
            "status" => 201,
            "status_text" => "success",
            "message" => "created!",
            "results" => $data,
            "errors" => array()

        );
        $this->response($response,201);
    }
    public function characters_get(){
        $results = $this->DAO->get_characters();

        $response = array(
            "status" => 200,
            "status_text" => "success",
            "message" => "loading",
            "results" => $results,
            "errors" => array()

        );
        $this->response($response,201);

    }

}
