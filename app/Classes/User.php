<?php

class User {
  private $db;

  public function __construct() {
    $this->db = new Database();

    ob_start();
    session_start();
    if(isset($_SESSION['username'])) header('location: app/home.php');
  }

  public function login($username, $password) {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    
    if($result = mysqli_query($this->db->connection, $query)) {
      if(mysqli_num_rows($result) > 0) {
        $row_akun = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row_akun['id'];
        $_SESSION['username'] = $row_akun['username'];
        $_SESSION['level'] = $row_akun['level'];
        header('location: app/home.php');
      } else {
        echo "<script>alert('Username / Password yang anda masukan salah');</script>";
      }
    }

    return true;
  }

  public function tambah_pengguna($username, $password, $level) {
    $query = "INSERT INTO user (username, password, level) VALUES ('$username','$password','$level')";
    $result = mysqli_query($this->db->connection, $query);
    return $result;
  }

  public function tampilkan_pengguna() {
    $query = "SELECT * FROM user ORDER BY level";
    $result =  mysqli_query($this->db->connection, $query);
    return $result;
  }
}