<?php

$local   ="localhost";          
$root    ="root";              
$pass    ="";                 
$dbname  ="conference2023";   

$connection =mysqli_connect($local,$root,$pass,$dbname);   
 

if($connection){
    $error=array();      
    session_start();
    session_regenerate_id();   
}else{
    die("unable to connect");
}

 ?>