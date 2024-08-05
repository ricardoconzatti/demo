<!DOCTYPE html>
<html>
	<head>
		<title>homer demo</title>
	</head>
	<?php
		include 'cnx.php';
		$code = pg_escape_string($_GET['code']);

                $sql = "DELETE FROM thumbs WHERE code = $code LIMIT 1";
                $result = pg_query($dbcon, "WITH deleted AS (DELETE FROM thumbs WHERE code = $code RETURNING *) SELECT * FROM deleted LIMIT 1");

                pg_close($dbcon);
	?>
	<body>
		<meta http-equiv='refresh' content='0; url=index.php'>
	</body>
</html>
