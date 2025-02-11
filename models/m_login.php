<?php

session_start();
include_once '../controllers/c_koneksi.php';

class login {

function registrasi($id, $username, $email, $password, $nama, $alamat, $jk, $tempatlahir, $tanggallahir, $role){
    $conn = new koneksi();
    $sql = "INSERT INTO user VALUES ('$id', '$username','$email','$password','$nama','$alamat','$jk','$tempatlahir', '$tanggallahir', '$role')";
    $query = mysqli_query($conn->koneksi,$sql);

    if ($query) {
      echo "<script>alert('data berhasil ditambahkan'), window.location='../index.php'</script>";
    } else {
      echo "<script>alert('data gagal ditambahkan'), window.location='../registrasi.php'</script>";
    }
    
  } 


  function login($email = null, $password = null) {

    $conn = new koneksi();

    $sql = "SELECT * FROM user WHERE email = '$email'";

    $query = mysqli_query($conn->koneksi,$sql);

    $data = mysqli_fetch_assoc($query);

    //mengecek ada atau tidak datanya
    if ($data) {
      //mengecek kesesuaian pass yang di inputkan oleh user dengan pass yang ada di dalam table user
      if (password_verify($password, $data['password'])) {
        
        if ($data['role'] == 'admin') {

          // membuat variabel session yang nantinya di gunakan pada halaman admin

          $_SESSION["data"] = $data;
          
          // untuk pindah halaman
          header("location:../views/home_admin.php");
          exit;

        }elseif ($data['role'] == 'user') {

          // membuat variabel session yang nantinya di gunakan pada halaman admin

          $_SESSION["data"] = $data;
          
          // untuk pindah halaman
          header("location:../views/home_user.php");
          exit;

        }else {
          echo "<script>alert('Email Atau Password Salah'), window.location='../index.php'</script>";
        }
      }else {
        echo "<script>alert('Email Atau Password Salah'), window.location='../index.php'</script>";
      }
    }
  }

}

  ?>