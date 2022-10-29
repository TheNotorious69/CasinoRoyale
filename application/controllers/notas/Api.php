<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {

  
    function __construct(){
        parent:: __construct();
        $this->load->model('notasDAO');
    }

    public function notas_post(){
        $data = array(
            "titulo"=> $this->post('titulo'),
            "descripcion"=> $this->post('descripcion'),
        
        );
        $get_key = $this->notasDAO->save_notas($data);
        $data_update = array(
            "url" => base_url('notas/api/notas/'.$get_key)
        );
        $this->notasDAO->update_notas($data_update,$get_key);

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
    public function notas_get(){
        $results = $this->notasDAO->get_notas();

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
