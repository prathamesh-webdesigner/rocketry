<?php 
    // Database Configuration 
    $dbHost = "localhost";
    $dbUsername ="root";
    $dbPassword = "";
    $dbName = "rocket_live";

    // Create Database Connection 
    $db= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // Check Connection 
    if($db-> connect_error){
        die("Connection Failed: " . $db-> connect_error);
    }

?>
