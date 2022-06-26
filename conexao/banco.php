<?php

$con = mysqli_connect('localhost', 'root', '', 'db_cieia');

if (mysqli_connect_errno()) {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_error();
} else {
    mysqli_select_db($con, "db_cieia");
}

?>