<?php

spl_autoload_register();

class controller {
    public $userID;
    public $firstname;
    public $lastname;
    public $email;
    public $role;

function __construct() {
      $this->userId = new UserID();
      $this->firstname = new FirstName();
      $this->lastname = new LastName();
      $this->email = new Email();
      $this->role = new Role();
      $this->home();

}

function home() {

      $data = $this->model->getName();

      $this->load->view('view.php',$data);


}

}

?>
