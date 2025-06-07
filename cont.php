<?php
$srvr="localhost";
$user="root";
$pass="";
$db="csd";
$con=mysqli_connect($srvr,$user,$pass,$db);
if(mysqli_connect_errno()){
    echo "noooo".mysql_connect_errno();
}
