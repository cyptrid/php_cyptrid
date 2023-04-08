<?php
 session_start();
//  $_SESSION['answer1'] = $_POST['answer1'];
 $_SESSION['hobi'] = $_POST['hobi'];
 $name= $_SESSION['name'];
 $umur= $_SESSION['umur'];
 $hobi= $_SESSION['hobi'];
 echo "Nama : $name <br>";
 echo "Umur : $umur <br>";
 echo "Hobi : $hobi ";
 ?>
