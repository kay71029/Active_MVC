<?php

class Controller {
    public function model($model) 
    {
        require_once "../Active_MVC/models/$model.php";
        return new $model ();
    }
    
    public function view($view, $data = Array()) 
    {
        require_once "../Active_MVC/views/$view.php";
    }
}

?>