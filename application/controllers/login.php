<?php

class Login extends CI_Controller {

  public function __construct() {
    //Konstruktor
    parent::__construct();
    //Ładowanie potrzebnych rzeczy
    $this->load->library('session');
    $this->load->helper(array('form', 'url', 'html'));
    $this->load->library('form_validation');
    $this->load->model('Login_Model');

  }

  public function index() {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      echo "Odebrano dane POST"; //linijka testowa
      echo $this->input->post("password");

    //pobierz wartości POST
    $username = $this->input->post("p_username");
    $password = $this->input->post("p_password");
    echo("<br>" . $username . "<br>" . $password); //linijka testowa

    //walidowanie formularza
    //reguły walidacji
    $this->form_validation->set_rules("p_username", "Użytkownik", "trim|required");
    $this->form_validation->set_rules("p_password", "Hasło", "trim|required");

    //walidacja

    if ($this->form_validation->run() == FALSE) {
      //walidacja nieudana
      $this->load->view('login_view');

    } else {
      //walidacja udana
    }

  } else {
    $this->load->view('loginform');

  }






  }





}









 ?>
