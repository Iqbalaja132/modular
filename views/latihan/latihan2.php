<?php
include_once '../../controllers/c_latihan.php';
require_once '../template/header.php';
require_once '../template/navbar.php';
?>

<!-- awal dari isi body -->

<h1>Latihan Menampilkan Data Dari Tabel User Dan Urutkan Data Berdasarkan Nama User Dari Yang Terkecil Sampai Ke Terbesar</h1>

<table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($latihan2->latihan2() as $data) :
                    $tanggal_sekarang = new DateTime();
                    $tanggal_lahir = new DateTime($data->tanggallahir_user);
                    $umur = $tanggal_sekarang->diff($tanggal_lahir);
                        // Menurangi tanggal sekarang dengan tanggal lahir
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data->nama_user ?></td>
                        <td><?= $umur->y ?></td>
                        <td><?= $data->tempatlahir_user . ", " . date("d, F, Y", strtotime($data->tanggallahir_user)) ?></td>
                        <td><?= $data->alamat_user ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<!-- akhir dari isi body -->
 
<?php
require_once '../template/footer.php';
?>