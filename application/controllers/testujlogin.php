<?php

class Testujlogin extends CI_Controller {


  function __construct() {
    //konstruktor
    parent::__construct();
    //Ładowanie Modelu
    $this->load->model('Login_Model', '', TRUE);

  }

  public function index(){
  //funkcja domyślna

  }

  public function check($usr, $pwd) {
    echo("Sprawdzanie stanu dla uzytkownika: " . $usr . "<br>O Haśle: " . $pwd);
    echo "<br>";
    $result = $this->Login_Model->get_user($usr, $pwd);
    if ($result > 0) {
      echo "Uzytkownik Istnieje!";
    } else {
      echo "Uzytkownik nie Istnieje :(";
    }

  }





}



 ?>
