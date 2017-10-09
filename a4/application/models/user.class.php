<?

class user extends models {





  public function __construct{

        parent::__construct();

        $this->useriId = "swshrock";
        $this->firstname = "Sam";
        $this->lastname = "Shrock";
        $this->email = "swshrock@sbcglobal.net";
        $this->role = "Admin";


        }
  }

  function home() {

        $data = $this->model->getName();

        $this->load->view('view.php',$data);


  }


  abstract public function __set($name, $value) {
            $this->name = $value;
            return;


    }

    abstract public function __get($name) {
            return $this->$name;


    }

  public function __destruct() {



  }

}

?>
