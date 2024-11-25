<?php

include_once '../models/m_user.php';

$user = new user();

if ($_GET['aksi'] == 'tambah' ) {
  $id = $_POST['id_user'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nama = $_POST['nama_user'];
  $alamat = $_POST['alamat_user'];
  $jk = $_POST['jenis_kelamin'];
  $tempatlahir = $_POST['tempatlahir_user'];
  $tanggallahir = $_POST['tanggallahir_user'];

  // argumen, parameternya di m_user
  $user -> tambah_user ($id, $username,$email,$password,$nama,$alamat,$jk,$tempatlahir, $tanggallahir);
}










