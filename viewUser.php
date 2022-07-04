<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<?php  
include ('./db.php');
include('./user.php');

class ViewUser extends User {

public function showUser(){
   $datas = $this->getUser();
  foreach ($datas as $data){
    
    echo"<div>";
    echo "<table>";
    
    echo "<tr>";
    echo"<td>" .$data['ID'] . "</td> " ;
    echo"<td>". $data['name']."</td>";
    echo "</tr>";
    echo "</table>";
    echo"</div>";

  }
}
}
?>
    <?php
    $users = new ViewUser() ;
    $users->showUser();
    ?>
</body>
</html>
