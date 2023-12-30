<?php

    session_start();
    $user='root';
    $pass='';
    $db='community';
    $database=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");

    echo "great,it's working";

?>