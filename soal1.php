<?php
$total;
$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{

  echo "<td colspan='$jml'>Total : $a </td>";

  
  echo "<tr>\n"; 
  for ($b = $a; $b > 0; $b--)
  {       
    echo "<td>$b</td>";
  }
  echo "</tr>\n"; 

}
echo "</table>";

?>
