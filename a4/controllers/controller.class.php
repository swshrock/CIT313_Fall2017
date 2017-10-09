<?php
class controller {

    public $load;
    public $model;

    public function __construct() {

      $this->load = new Load();
      $this->model = new Model();
      $this->home();

}

function home() {

      $data = $this->model->getName();

      $this->load->view('view.php',$data);


}

public function __set() {



}

public function __get() {



}

public function __destruct() {



}



}
