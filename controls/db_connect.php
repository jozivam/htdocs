<?php
//echo 'Conexão';
$HOST = "127.0.0.1";
$USER = "root";
$PASS = "root123";
$DB_NAME = "b_system";

$conn = mysqli_connect($HOST, $USER, $PASS, $DB_NAME);

if (mysqli_connect_error()):
	echo "Falha na Conexão: ".mysqli_connect_error();
endif;

