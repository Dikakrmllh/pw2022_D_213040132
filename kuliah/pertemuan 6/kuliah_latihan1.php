<?php
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string

$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "npm" =>"043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Erik",
        "npm" =>"043030021",
        "email" => "erik@unpas.ac.id",
        "jurusan" => "Teknik Mesin"
    ],
    [
        "nama" => "Sandra",
        "npm" =>"063040033",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Anggoro",
        "email" => "erik@unpas.ac.id",
        "npm" =>"043040024",
        "jurusan" => "Teknik Informatika"
    ]
];

// var_dump($mahasiswa[3]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs["nama"]; ?></li>
    <li>NPM : <?php echo $mhs["email"]; ?></li>
    <li>Email : <?php echo $mhs["npm"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
</ul>
<?php } ?>


<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style> 
    .kotak {
        width: 30px;
        height: 30px;
        background-color: #BADA55;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 1s;
    }
    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }
</style>
</head>
<body>
    
<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach($angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
<div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>



</body>
</html>