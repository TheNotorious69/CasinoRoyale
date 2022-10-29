<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {

  
    function __construct(){
        parent:: __construct();
        $this->load->model('alumnosDAO');
    }

    public function alumnos_post(){
        $data = array(
            "matricula"=> $this->post('matricula'),
            "nombre_completo"=> $this->post('nombre_completo'),
            "universidad"=> $this->post('universidad'),
            "carrera"=> $this->post('carrera'),
            "fecha_ingreso"=> $this->post('fecha_ingreso'),
            "foto"=> $this->post('foto'),
        
        );
        $get_key = $this->alumnosDAO->save_alumnos($data);
        $data_update = array(
            "url" => base_url('alumnos/api/alumnos/'.$get_key)
        );
        $this->alumnosDAO->update_alumnos($data_update,$get_key);

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
    public function alumnos_get(){
        $results = $this->alumnosDAO->get_alumnos();

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
