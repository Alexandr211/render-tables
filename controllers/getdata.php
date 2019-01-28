<?php
require '../models/Database.php'; 

if (isset($_POST["value"])) { 
    
    // create new Db connection
$conn = new Database();
    
$sql = "SELECT table1.id, table1.name, table2.profession FROM table1  INNER JOIN table2 ON table1.profession_id=table2.id ORDER BY table1.id";
    
    //get actual data from db    
$conn->select($sql);

$conn->link->close();
 
}

?>