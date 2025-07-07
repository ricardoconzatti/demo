<?php
$host = "db-homer";
$port = "5432";
$dbname = "homerdemo";
$user = "homeruser";
$password = "homerJayS@123";

$connectionString = "host=$host port=$port dbname=$dbname user=$user password=$password";

$dbcon = pg_connect($connectionString);

if (!$dbcon) {
    echo "Erro ao conectar ao banco de dados PostgreSQL.\n";
    exit;
}

//echo "Conexão bem-sucedida!";
?>
