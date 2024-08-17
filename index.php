<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('header/koneksi.php');?>
    <?php include('header/style.php');?>
</head>
<body>
    <div class="container mt-5">

    <h3>TAMPIL DATA SISWA KELAS 12</h3>

    <a href="halaman/siswa_tambah_data.php">Tambah +</a>

        <?php
            $sql = "SELECT * FROM siswa_sma";
            $query = $conn->query($sql);
            $res = $query->fetch_all(MYSQLI_ASSOC);
        ?>
    
        <table class="table mt-2 table-bordered text-center">
            <tr>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Ekstrakurikuler</th>
                <th>Aksi</th>
            </tr>
            
            <?php foreach($res as $row): ?>
                <?php
                    $id = $row['id_siswa'];
                    $nama = $row['nama_siswa'];
                    $gender = $row['jenis_kelamin'];
                    $kelas = $row['kelas'];
                ?>
                <?php
                    $sql_eskul = "SELECT * FROM eskul_sma WHERE id_eskul_siswa = '$id'";
                    $query_eskul = $conn->query($sql_eskul);
                    $res_eskul = $query_eskul->fetch_all(MYSQLI_ASSOC);
                ?>
                <tr>
                    <td><?=$nama?></td>
                    <td><?=$gender?></td>
                    <td><?=$kelas?></td>
                    <td>
                        <?php foreach($res_eskul as $eskul): ?>
                            <?=$eskul['nama_eskul']?><br>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <a href="halaman/siswa_update_data.php?id=<?=$id?>">Edit</a> | 
                        <a href="halaman/siswa_hapus_data_proses.php?id=<?=$id?>">Hapus</a>

                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>
</body>
</html>