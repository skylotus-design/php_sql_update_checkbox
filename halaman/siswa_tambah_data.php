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

<!-- SILAKAN KEMBANGKAN -->

<h4>TAMBAH DATA SISWA KELAS 12</h4>

    <form action="siswa_tambah_data_proses.php" method="post">

    <h6>Nama Siswa:</h6>
    <input type="text" name="nama"><br>

    <h6>Jenis Kelamin:</h6>
    <input type="radio" name="gender" value="Laki-laki"> Laki-laki <br>
    <input type="radio" name="gender" value="Perempuan"> Perempuan <br>


    <h6>Kelas:</h6>
    <select name="kelas">
        <option value="12A">12A</option>
        <option value="12B">12B</option>
        <option value="12C">12C</option>
        <option value="12D">12D</option>
    </select><br>

    <h6>Ekstrakurikuler:</h6>
        <input type="checkbox" name="eskul[]" value="Voli"> Voli <br>
        <input type="checkbox" name="eskul[]" value="Pramuka"> Pramuka <br>
        <input type="checkbox" name="eskul[]" value="Karate"> Karate <br>
        <input type="checkbox" name="eskul[]" value="Paduan Suara"> Paduan Suara <br>
        <input type="checkbox" name="eskul[]" value="Gerak Jalan"> Gerak Jalan <br>
        <input type="checkbox" name="eskul[]" value="Basket"> Basket <br>


    <div class="mt-4">
        <input type="submit" value="KIRIM" name="ok">
    </div>

    </form>

</div>
</body>
</html>