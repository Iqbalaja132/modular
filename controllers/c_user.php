<?php

include_once '../models/m_user.php';

$user = new user();

// Fungsi try-catch adalah struktur pengendalian kesalahan (error handling) dalam pemrograman yang memungkinkan penanganan kesalahan yang terjadi selama eksekusi kode.
try {
  //mengecek apakah $_get ada atau tidak 
  if (!empty($_GET['aksi'])) {

    // mengecek apakah aksi tidak sama dengan hapus 
    if (!($_GET['aksi'] == 'hapus')) {

      //menangkap semua input dari user dengan method post
      $id = $_POST['id_user'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $nama = $_POST['nama_user'];
      $alamat = $_POST['alamat_user'];
      $jk = $_POST['jenis_kelamin'];
      $tempatlahir = $_POST['tempatlahir_user'];
      $tanggallahir = $_POST['tanggallahir_user'];

      // mengecek apakah aksi yang bernilai tambah 
      if ($_GET['aksi'] == 'tambah') {
        // memanggil fungsi tambah_user yang ada dalam model user 
        $user->tambah_user($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir);

        // mengecek apakah aksi yang bernilai update
      } elseif ($_GET['aksi'] == 'update') {
        // memanggil fungsi update_user yang ada dalam model user 
        $user->ubah_user($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir);
        // var_dump($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir);
      }
    } else {
      // mengambil data id dari tomboh hapus yang di pilih 
      $id = $_POST['id_user'];

      // memanggil fungsi hapus 
      $user->hapus_user($id);
    }
  } else {
    //kalau tidak ada maka akan menampilkan semua data user
    $user = $user->tampil_data();
  }
} catch (Exception $e) {
  //jika terjadi error pesan ini yang akan ditampilkan ke browser
  echo $e->getMessage();
}
