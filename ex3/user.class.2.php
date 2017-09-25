<?

class type2 extends users {





  public function __construct($usertype, $userlevel) {

        parent::__construct();
        $this->user_type = $usertype;
        $this->user_level = $userlevel;


  }

  public function __set($name, $value) {
          $this->name = $value;
          return;


  }

  public function __get($name) {
          return $this->$name;


  }

  public function __destruct() {



  }

  static public function addNumbers ($a,$b){
    return ($a + $b) * $a;
  }

}
