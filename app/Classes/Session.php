<?php

class Session {
  public function __construct() {
    ob_start();
    session_start();
    if(!isset($_SESSION['username'])) header('location: ../index.php');
  }
}