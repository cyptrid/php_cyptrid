<?php
 session_start();
 $_SESSION['name'] = $_POST['name'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 2B</title>
</head>
<body>
  
  <form action="soal2c.php" method="post"><li>
      <h1>Umur Anda :  <input type="text" name="umur" id="umur"> </h1>
      
  </li><input type="submit" value="Submit" /></form>

</body>
</html>