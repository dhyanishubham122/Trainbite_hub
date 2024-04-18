<?php
    $hs="localhost";
    $us="root";
    $ps="";
    $mysqlconnect =mysqli_connect("$hs","$us","$ps");
    if($mysqlconnect===false){
        die("my sqlsql is not connected");
    }
    else{
        echo("mysql is connected");
    }
?>