<?php

$servername = "localhost";
$username = "root";
$password = "admin";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "falha na conexao: ".mysqli_connect_error();
endif;  
?>