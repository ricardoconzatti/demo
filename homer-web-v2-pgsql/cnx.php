<?php
	$host = "192.168.10.63";
	$port = "5432";
	$dbname = "homer_db";
	$user = "homer";
	$password = "homerJayS123";

	$connectionString = "host=$host port=$port dbname=$dbname user=$user password=$password";

	$dbcon = pg_connect($connectionString);

	if (!$dbcon) {
	    echo "Erro ao conectar ao banco de dados PostgreSQL.\n";
	    exit;
	}
?>
