<?php

class Login_Model extends CI_Model {

  function __construct() {
    parent::__construct();
    //Konstruktor Modelu

  }

  function get_user($usr, $pwd) {

    //pobiera informacje o użytkowniku

    $sql = "SELECT * FROM users where username=? and password = md5(?);";

    $query = $this->db->query($sql, array($usr, $pwd));
    return $query->num_rows();



  }

}






 ?>
