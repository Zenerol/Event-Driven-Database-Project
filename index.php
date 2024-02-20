<?php
 include('./config/database.php');

 $sql = "SELECT * FROM region";
 $result = $conn->query($sql);

 if ($result->num_rows > 0){
    // output data of each row
    while ($row = $result->fetch_assoc()){
        echo $row['regDesc'] . "<br/>";
    }
 } else {
   // echo "0 results";
 }
 $conn->close();
?>