<?php include('../header/koneksi.php');?>
<?php
    $id = $_REQUEST['id'];

    $statement = $conn->prepare("DELETE FROM siswa_sma WHERE id_siswa = ?");
    $statement->bind_param("i", $id);
    $statement->execute();

    if($statement){
        header("location:../index.php");
    }
?>