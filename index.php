<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Tengah Semester Tegar</title>
    <style>body{background-image:url("img/bg.jpg");
    background-repeat: no-repeat;
    position: fixed;
    widht: 100%;
    hight: 100%;
    background-size: 100%;}
    @media screen and (max-width: 600px) {
h4{font-size:85%;}
}
    </style>
</head>

<body>
    <style>
.blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
</style>
<span class="blink"><h1 style="text-align:center;"><font color="navy">DAFTAR MAHASISWA</h1></font></span>

    <h1 style="text-align:center;"><a href="tambah.php">Tambah Data</a>
    <br><br>

    <table border="5" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Photo</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>

                <td> <?= $i; ?> </td>

                <td>
                    <a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus Data');  ">Hapus</a>
                </td>
                <td><img src="img/<?php echo $row["foto"] ?>" width="50"></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["npm"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td><?php echo $row["email"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table></h1>

</body>

</html>