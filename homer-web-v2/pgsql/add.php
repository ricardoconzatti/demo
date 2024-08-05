<!DOCTYPE html>
<html>
	<head>
		<title>homer demo</title>
	</head>
	<?php
		include 'cnx.php';
                $status = pg_escape_string($_GET['status']);
                $sql = "INSERT INTO thumbs (status, date) VALUES ('$status', NOW())";
                $result = pg_query($dbcon, $sql);
           	if (!$result) {
            		//echo "Erro na execução da consulta: " . pg_last_error($dbcon) . "\n";
            		pg_close($dbcon);
            		exit;
        	}		
		pg_close($dbcon);
	?>
	<body>
		<meta http-equiv='refresh' content='0; url=index.php'>
	</body>
</html>
