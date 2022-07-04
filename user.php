<?php

class User extends Db {

    protected function getUser(){
       $sql = "SELECT * FROM users";
       echo "<table border='1'>
 <h1>USER</h1>
<tr>

<th>Id</th>

<th>name</th>


</tr>";
       $result = $this->connect()->query($sql);
       $numR = $result->num_rows;
       if($numR > 0){
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
       }
    }

}
?>