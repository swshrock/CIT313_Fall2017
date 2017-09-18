<?

class users {

  protected $user_level;
  protected $user_type;
  protected $last_name;
  protected $first_name;
  protected $email_address;
  protected $user_id;


  public function __construct($usertype, $userlevel) {

          $this->user_id = "swshrock";
          $this->first_name = "Sam";
          $this->last_name = "Shrock";
          $this->email_address = "swshrock@sbcglobal.net";
          
          $this->user_type = $usertype;
          $this->user_type = $userlevel;


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




/*
protected $user_id;

    public function my_name($name) {
      $this->user_id = $name;
      return $this->user_id;
    }

      protected $user_id;

      public function my_name($name) {
        $this->user_id = $name;
        return $this->user_id;
      }

        public function my_name($name) {
          $this->user_id = $name;
          return $this->user_id;
        }

          public function my_name($name) {
            $this->user_id = $name;
            return $this->user_id;
}
*/

}


?>
