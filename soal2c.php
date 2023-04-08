<?php
 session_start();
 $_SESSION['umur'] = $_POST['umur'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 2c</title>
</head>
<body>
  
  <form action="soal2d.php" method="post"><li>
      <h1>Hobi Anda :  <input type="text" name="hobi" id="hobi"> </h1>
      
  </li><input type="submit" value="Submit" /></form>

</body>
</html>