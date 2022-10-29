<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Api extends RestController {

  
    function __construct(){
        parent:: __construct();
        $this->load->model('productosDAO');
    }

    public function productos_post(){
        $data = array(
            "nombre"=> $this->post('nombre'),
            "descripcion"=> $this->post('descripcion'),
            "codigo_barras"=> $this->post('codigo_barras'),
            "precio_compra"=> $this->post('precio_compra'),
            "precio_venta"=> $this->post('precio_venta'),
            "existencia_en_tienda"=> $this->post('existencia_en_venta'),
            "foto"=> $this->post('foto'),
        
        );
        $get_key = $this->productosDAO->save_productos($data);
        $data_update = array(
            "url" => base_url('productos/api/productos/'.$get_key)
        );
        $this->productosDAO->update_productos($data_update,$get_key);

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
    public function productos_get(){
        $results = $this->productosDAO->get_productos();

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
