<?

abstract class users {

  protected $user_level;
  protected $user_type;
  protected $last_name;
  protected $first_name;
  protected $email_address;
  protected $user_id;


  abstract public function __construct($usertype, $userlevel) {

          $this->user_id = "swshrock";
          $this->first_name = "Sam";
          $this->last_name = "Shrock";
          $this->email_address = "swshrock@sbcglobal.net";

          $this->user_type = $usertype;
          $this->user_type = $userlevel;


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
