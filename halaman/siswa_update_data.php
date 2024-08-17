<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../header/koneksi.php');?>
    <?php include('../header/style.php');?>
</head>
<body>
<div class="container mt-5">


<?php
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM siswa_sma WHERE id_siswa = '$id'";
    $query = $conn->query($sql);

    $res = $query->fetch_array();
    $id = $res['id_siswa'];
    $nama = $res['nama_siswa'];
    $gender = $res['jenis_kelamin'];
    $kelas = $res['kelas'];
?>

<form action="siswa_update_data_proses.php" method="post">

<h6>Nama Siswa:</h6>
<input type="text" name="nama" value="<?=$nama?>"><br>

<h6>Jenis Kelamin:</h6>
<input type="radio" name="gender" value="Laki-laki" <?=$gender =='Laki-laki' ? 'checked':'';?>> Laki-laki <br>
<input type="radio" name="gender" value="Perempuan" <?=$gender =='Perempuan' ? 'checked':'';?>> Perempuan <br>


<h6>Kelas:</h6>
<select name="kelas">
    <option value="12A" <?=$kelas =='12A' ? 'selected':'';?>>12A</option>
    <option value="12B" <?=$kelas =='12B' ? 'selected':'';?>>12B</option>
    <option value="12C" <?=$kelas =='12C' ? 'selected':'';?>>12C</option>
    <option value="12D" <?=$kelas =='12D' ? 'selected':'';?>>12D</option>
</select><br>

<?php
    $sql = "SELECT * FROM eskul_sma WHERE id_eskul_siswa = '$id'";
    $query = $conn->query($sql);
    while($res = $query->fetch_array()){
        $row[] = $res['nama_eskul'];
    }
?>


<h6>Ekstrakurikuler:</h6>
    <input type="checkbox" name="eskul[]" value="Voli" <?=in_array("Voli", $row) ? "checked":""?>> Voli <br>
    <input type="checkbox" name="eskul[]" value="Pramuka" <?=in_array("Pramuka", $row) ? "checked":""?>> Pramuka <br>
    <input type="checkbox" name="eskul[]" value="Karate" <?=in_array("Karate", $row) ? "checked":""?>> Karate <br>
    <input type="checkbox" name="eskul[]" value="Paduan Suara" <?=in_array("Paduan Suara", $row) ? "checked":""?>> Paduan Suara <br>
    <input type="checkbox" name="eskul[]" value="Gerak Jalan" <?=in_array("Gerak Jalan", $row) ? "checked":""?>> Gerak Jalan <br>
    <input type="checkbox" name="eskul[]" value="Basket" <?=in_array("Basket", $row) ? "checked":""?>> Basket <br>


    <input type="hidden" name="id" value="<?=$id?>">

<div class="mt-4">
    <input type="submit" value="KIRIM" name="ok">
</div>

</form>

</div>
</body>
</html>