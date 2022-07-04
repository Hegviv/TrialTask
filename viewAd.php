<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Document</title>
</head>
<body>

<?php  
include ('./db.php');
include('./ad.php');

class ViewAd extends Ad {

public function showAd(){
   $datas = $this->getAd();
  foreach ($datas as $data){
    
    echo"<div>";
    echo "<table>";
    
    echo "<tr>";
    echo"<td>" .$data['ID'] . "</td> " ;
    echo"<td>". $data['userid']."</td>";
    echo"<td>" .$data['title'] . "</td> " ;
    echo "</tr>";
    echo "</table>";
    echo"</div>";

  }
}
}
?>
    <?php
    $users = new ViewAd() ;
    $users->showAd();
    ?>
</body>
</html>
