<?

abstract class models {

  protected $userID;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $role;


//will be revisited again

  abstract public function __construct() {


  }

  abstract public function __set($name, $value) {
            $this->name = $value;
            return;


    }

    abstract public function __get($name) {
            return $this->$name;


    }


  abstract public function __destruct() {



  }


}


?>
