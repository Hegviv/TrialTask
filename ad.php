<?php
class Ad extends Db {

    protected function getAd(){
       $sql = "SELECT * FROM advertisements";
       echo "<table border='1'>
 <h1>Advertisement</h1>
<tr>

<th>Id</th>

<th>userid</th>
<th>title</th>


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