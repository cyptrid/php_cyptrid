
<?php 

// memanggil function berisi koneksi ke database

require 'functions.php';

$orang =  query("SELECT person.nama, person.alamat, hobi.hobi
FROM person
INNER JOIN hobi ON hobi.person_id=person.id");


function cari($keyword){

    $query = "SELECT person.nama, person.alamat, hobi.hobi
    FROM person
    INNER JOIN hobi ON hobi.person_id=person.id WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%' OR hobi LIKE '%$keyword%'";

    return query($query);

}

if( isset($_POST["cari"]) ){

    $orang = cari($_POST["keyword"]);

}
?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Daftar Mahasiswa</title>

</head>


<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

            <tr>

                <th>nama</th>

                <th>Alamat</th>

                <th>Hobi</th>

             

            </tr>

        <?php $i = 1; ?>

    <?php foreach ( $orang as $row ): ?>

            <tr>

            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["hobi"]; ?></td>


            </tr>

        <?php $i++ ?>

    <?php endforeach; ?>    

    </table>
    <br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian">

    <button type="submit" name="cari">Cari</button>

</body>

</html>