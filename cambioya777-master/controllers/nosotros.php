<?php

class nosotros extends Controller{

    function __construct(){
        parent::__construct();

    }
    function render(){
        $this->view->render('nosotros/index');
    }

}

?>