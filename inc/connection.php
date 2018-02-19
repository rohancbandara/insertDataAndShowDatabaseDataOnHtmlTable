<?php


        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "assingment";
        $port = "3306";
        $con = mysqli_connect($host, $user, $password, $database, $port);
        if (!$con) {
            die('could notconnect' . mysqli_error($con));
        }
        //echo 'connection sucessfully';
     

