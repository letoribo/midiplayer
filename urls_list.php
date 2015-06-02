<?php
/* Connection string */
$db = new PDO('mysql:host=localhost;dbname=linx', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $sql = "SELECT * FROM urls";
    $query = $db->prepare( $sql );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_UNIQUE );
    //get the number of the results found
    $num = $query->rowCount();
    echo $num; 
    echo json_encode($results);

  