<?php

$con = mysqli_connect('sql313.epizy.com', 'epiz_32042606', 'FUmGVGP1WD4', 'epiz_32042606_db_ciena');

if (mysqli_connect_errno()) {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_error();
} else {
    mysqli_select_db($con, "epiz_32042606_db_ciena");
}

?>