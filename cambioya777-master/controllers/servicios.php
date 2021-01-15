<?php

class servicios extends Controller{

    function __construct(){
        parent::__construct();

    }
    function render(){
        $this->view->render('servicios/index');
    }

}

?>