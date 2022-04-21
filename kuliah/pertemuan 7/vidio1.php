<?php
    // variable scope / lingkup variabel
//     $x = 10;

//     function tampilx(){
//    global $x;
//     echo $x;
// }

//     tampilx();
    

// SUPERGLOBALS
// variable global milik php
// merupakan array assosiative
// echo $_SERVER["SERVER_NAME"];

// $_GET

// var_dump($_GET);
$mahasiswa = [
    [
    "nama" => "Dika karomalloh", 
    "nrp" => "213040132",
    "email" => "karomalloh23@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "1.png"
],
[
    "nama" => "Gilang R", 
    "nrp" => "213040100",
    "email" => "gilang33@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "2.jpeg"
],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
           <a href="vidio2.php?nama=<?= $mhs["nama"]; ?>
           &nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>
           &jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"]; ?>">
           <?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>

</body>
</html>
© 2022 GitHub, Inc.