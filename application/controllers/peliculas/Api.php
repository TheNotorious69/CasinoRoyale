<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {

  
    function __construct(){
        parent:: __construct();
        $this->load->model('peliculasDAO');
    }

    public function peliculas_post(){
        $data = array(
            "nombre"=> $this->post('nombre'),
            "sinopsis"=> $this->post('sinopsis'),
            "fecha_estreno"=> $this->post('fecha_estreno'),
            "precio_produccion"=> $this->post('precio_produccion'),
            "imagen"=> $this->post('imagen'),
            "link"=> $this->post('link'),
            
        
        );
        $get_key = $this->peliculasDAO->save_peliculas($data);
        $data_update = array(
            "url" => base_url('peliculas/api/peliculas/'.$get_key)
        );
        $this->peliculasDAO->update_peliculas($data_update,$get_key);

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
    public function peliculas_get(){
        $results = $this->peliculasDAO->get_peliculas();

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
