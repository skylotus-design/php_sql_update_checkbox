<?php include('../header/koneksi.php');?>

<?php

    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];

    $st = $conn->prepare("INSERT INTO siswa_sma(nama_siswa, jenis_kelamin, kelas) VALUES(?, ?, ?)");
    $st->bind_param('sss', $nama, $gender, $kelas);

    $st->execute();

    if($st){

        $ekskul = $_POST['eskul'];
        $id = $conn->insert_id;

        foreach($ekskul as $eskul){
            $st = $conn->prepare("INSERT INTO eskul_sma(nama_eskul, id_eskul_siswa) VALUES(?, ?)");
            $st->bind_param('si', $eskul, $id);
            $st->execute();
        }

        header("Location:../index.php");
    }
?>