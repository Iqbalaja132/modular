<?php

include_once '../models/m_login.php';

$login = new login();

try {
  if ($_GET['aksi'] == "registrasi") {
    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $nama = $_POST['nama_user'];
    $alamat = $_POST['alamat_user'];
    $jk = $_POST['jenis_kelamin'];
    $tempatlahir = $_POST['tempatlahir_user'];
    $tanggallahir = $_POST['tanggallahir_user'];
    $role = $_POST['role'];

    $login->registrasi($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir, $role);
  } elseif ($_GET['aksi']  == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login->login($email, $password);
  } elseif ($_GET['aksi'] == 'logout') {
    # code...
  }
} catch (Exception $e) {

  echo $e->getMessage();

}