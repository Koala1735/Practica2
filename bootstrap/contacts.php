<link rel = "stylesheet" href = "css/style_3.css">
<?php
  include ('tpl/header.php');
  include ('tpl/nav.php');
  include ("dbconnect.php");
  $result = $mysqli->query("SELECT * FROM remarks");
  $table = "<table>";
  $k = 1;
  while ($myrow = $result->fetch_assoc()){
    $table .= "<tr>";
    $table .= "<td>".$myrow['tema']."</td>";
    $table .= "<td>".$myrow['text']."</td>";
    $table .= "</tr>";
    $k++;
  }
  $table .= "</table>";
  echo $table;
  include ('tpl/footer.php');
  ?>