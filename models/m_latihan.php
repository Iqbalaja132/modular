<?php

// Memanggil file c_koneksi yang ada pada folder controllers
include_once '../controllers/c_koneksi.php';

class latihan
{
  // Membuat fungsi untuk menampilkan data dari tabel user yang ada di db/database

  function latihan()
  {
    // kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user
    // select => tampilkan, * => semua data, from => dari, user => merupakan tabel yang datanya akan ditampilkan
    $sql = "SELECT * FROM user";

    // eksekutor untuk perintah diatas ($sql)
    $query = mysqli_query($conn->koneksi, $sql);

    // Untuk mengecek apakah $query ada datanya atau tidak
    if ($query->num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while ($data = mysqli_fetch_object($query)) {
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
  }


    // Membuat fungsi untuk menampilkan data dari tabel user yang ada di db berurutan dari A - Z
    // ASC untuk mengurutkan dari abjad A - Z

  function latihan2()
  {
    // Membuat instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user dalam urutan A-Z berdasarkan kolom yang diinginkan
    $sql = "SELECT * FROM user ORDER BY nama_user ASC";

    // Eksekusi perintah SQL
    $query = mysqli_query($conn->koneksi, $sql);

    // Mengecek apakah $query ada datanya atau tidak
    if ($query->num_rows > 0) {
      // Mencacah data menjadi data array asosiatif
      while ($data = mysqli_fetch_object($query)) {
        // Membungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
  }

  function latihan3()
  {
    // Membuat instansiasi objek dari class koneksi
    $conn = new koneksi();

    // Perintah SQL untuk menampilkan data dengan umur antara 21-30
    $sql = "SELECT *, 
                   TIMESTAMPDIFF(YEAR, tanggallahir_user, CURDATE()) AS umur 
            FROM user 
            HAVING umur BETWEEN 21 AND 30
            ORDER BY nama_user ASC";

    // Eksekusi perintah SQL
    $query = mysqli_query($conn->koneksi, $sql);

    // Inisialisasi array hasil
    $hasil = [];

    // Mengecek apakah query memiliki data
    if ($query->num_rows > 0) {
      // Mencacah data menjadi array objek
      while ($data = mysqli_fetch_object($query)) {
        $hasil[] = $data;
      }
    }

    // Mengembalikan hasil, array kosong jika data tidak ada
    return $hasil;
  }

  function latihan4()
  {
    // kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user
    // select => tampilkan, * => semua data, from => dari, user => merupakan tabel yang datanya akan ditampilkan
    // Perintah untuk menampilkan data dari tabel user dengan tempat lahir di Bandung
    // LOWER berfungsi untuk mengubah semua huruf menjadi kecil semua
    $sql = "SELECT * FROM user WHERE LOWER(tempatlahir_user) = 'bandung'";

    // eksekutor untuk perintah diatas ($sql)
    $query = mysqli_query($conn->koneksi, $sql);


    // Untuk mengecek apakah $query ada datanya atau tidak
    if ($query->num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while ($data = mysqli_fetch_object($query)) {
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
  }

  function latihan5()
  {
    // kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user
    // select => tampilkan, * => semua data, from => dari, user => merupakan tabel yang datanya akan ditampilkan
    // Perintah untuk menampilkan data dari tabel user dengan alamat dijalan merdeka

    // % di depan ('%merdeka'): Mencocokkan semua string yang berakhir dengan "merdeka". Contoh: "Kampung Merdeka", "Desa Merdeka".
    // % di belakang ('merdeka%'): Mencocokkan semua string yang diawali dengan "merdeka". Contoh: "Merdeka Street", "Merdeka Square".
    // % di kedua sisi ('%merdeka%'): Mencocokkan semua string yang mengandung "merdeka" di mana pun dalam teks.
    $sql = "SELECT * FROM user WHERE LOWER(alamat_user) LIKE '%merdeka%'";

    // eksekutor untuk perintah diatas ($sql)
    $query = mysqli_query($conn->koneksi, $sql);


    // Untuk mengecek apakah $query ada datanya atau tidak
    if ($query->num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while ($data = mysqli_fetch_object($query)) {
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
  }

  function latihan6()
  {
    // kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user
    // select => tampilkan, * => semua data, from => dari, user => merupakan tabel yang datanya akan ditampilkan
    // Perintah untuk menampilkan data dari tabel user yang lahir di bulan Februari
    $sql = "SELECT * FROM user WHERE MONTH(tanggallahir_user) = 2";

    // eksekutor untuk perintah diatas ($sql)
    $query = mysqli_query($conn->koneksi, $sql);


    // Untuk mengecek apakah $query ada datanya atau tidak
    if ($query->num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while ($data = mysqli_fetch_object($query)) {
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
  }


  // Membuat fungsi untuk menampilkan data dari tabel user yang ada di db berurutan dari Z - A
  // DESC untuk mengurutkan dari abjad Z - A

  function latihan7()
  {
    // kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user
    // select => tampilkan, * => semua data, from => dari, user => merupakan tabel yang datanya akan ditampilkan
    $sql = "SELECT * FROM user ORDER BY nama_user DESC";

    // eksekutor untuk perintah diatas ($sql)
    $query = mysqli_query($conn->koneksi, $sql);


    // Untuk mengecek apakah $query ada datanya atau tidak
    if ($query->num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while ($data = mysqli_fetch_object($query)) {
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
  }

  function tampil_data_byid($id){
    $conn = new koneksi();

    $sql = "SELECT *    FROM user WHERE id_user = $id";
  
    $query = mysqli_query($conn->koneksi,$sql);
  
    if ($query-> num_rows > 0) {
      while($data = mysqli_fetch_object($query)){
        $result[] = $data;
      }
      return $result;
    } else {
      echo "Tidak Ada Data";
    }
  }

function ubah_data(){
  
}
}



