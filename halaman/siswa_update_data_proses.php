<?php include('../header/koneksi.php');?>

<?php

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];


        $smt = $conn->prepare("UPDATE siswa_sma SET nama_siswa = ?, jenis_kelamin = ?, kelas = ? WHERE id_siswa = ?");
        $smt->bind_param("sssi", $nama, $gender, $kelas, $id);
        $smt->execute();

        
        if($smt){
            $smt_eskul = $conn->prepare("DELETE FROM eskul_sma WHERE id_eskul_siswa = ?");
            $smt_eskul->bind_param("i", $id);
            $smt_eskul->execute();

            if($smt_eskul){
                
                $ekskul = $_POST['eskul'];
                
                foreach($ekskul as $eskul){
                    $smt_eskul = $conn->prepare("INSERT INTO eskul_sma(nama_eskul, id_eskul_siswa) VALUES(?,?)");
                    $smt_eskul->bind_param("si", $eskul, $id);
                    $smt_eskul->execute();
                }
                header("Location:../index.php");
            }
        }
?>