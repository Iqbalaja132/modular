<?php

// Memanggil file c_koneksi yang ada pada folder controllers
include_once '../../controllers/c_koneksi.php';

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
    if ($query -> num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while($data = mysqli_fetch_object($query)){
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
    
  }
}


// ASC untuk mengurutkan dari abjad A - Z
// DESC untuk mengurutkan dari abjad Z - A

class latihan2 {
  function latihan2() {
    // Membuat instansiasi objek dari class atau file koneksi
    $conn = new koneksi();
  
    // Perintah untuk menampilkan semua data dari tabel user dalam urutan A-Z berdasarkan kolom yang diinginkan (misalnya kolom `nama_user`)
    $sql = "SELECT * FROM user ORDER BY nama_user ASC"; // Ubah 'nama_user' sesuai dengan nama kolom yang ingin diurutkan
  
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
}

class latihan3 {
    function latihan3() {
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
}



