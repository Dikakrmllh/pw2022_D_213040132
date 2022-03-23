<?php
$mahasiswa = [
    ["nama" => "Sandhika Galih",
    "npm" => "043040023",
    "jurusan" => "Teknik Informatika",
    "email" => "sandhikagalih@unpas.ac.id",
    "gambar" => "1.jpeg"
],
    ["nama" => "Doddy Ferdiansyah",
    "npm" => "033040001",
    "jurusan" => "Teknik Industri",
    "email" => "doddy@yahoo.com",
    "gambar" => "2.jpeg"
],
    ["nama" => "Erik",
    "npm" => "023040123",
    "jurusan" => "Teknik Planologi",
    "email" => "erik@gmail.com",
    "gambar" => "3.jpeg"
    ]
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>

    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row" class="align-middle"><?= $i++; ?></th>
      <td class="align-middle"><img src="img/<?php echo $mhs["gambar"]; ?>" height="50" class="rounded-circle">
    </td>
      <td class="align-middle"><?= $mhs["nama"]; ?></td>
      <td class="align-middle"><?= $mhs["npm"]; ?></td>
      <td class="align-middle"><?= $mhs["email"]; ?></td>
      <td class="align-middle"><?= $mhs["jurusan"]; ?></td>
      <td class="align-middle">
        <a herf="" class="btn badge bg-warning">edit</a>
        <a herf="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
// $mahasiswa = [
// ["Dika Karomalloh", "213040132", 
// "karomalloh23@gmail.com", "teknik informatika"],
// ["Aldi M", "213040150", 
// "aldimr15@gmail.com", "teknik informatika"],
// ];

    //array associative
    //definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Dika karomalloh", 
    "nrp" => "213040132",
    "email" => "karomalloh23@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "1.jpeg"
],
[
    "nama" => "Aldi M", 
    "nrp" => "213040150",
    "email" => "aldimr15@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "2.jpeg"
],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>nrp : <?= $mhs["nrp"]; ?></li>
            <li>jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>