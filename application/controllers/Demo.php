<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use RestServer\RestController;
require APPPATH . '/libraries/RestController.php';
require APPPATH . '/libraries/Format.php';


class Demo extends RestController {

  
    function __construct(){
        parent:: __construct();
    }
    function characters_get(){
      echo "get";

    }
    function characters_post(){
      echo "post";

    }
    function characters_put(){
      echo "put";

    }
    function characters_delete(){
      echo "delete";

    }
  }
