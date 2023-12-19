<!DOCTYPE html>
<html>
	<head>
		<title>homer demo</title>
	</head>
	<?php
		include 'cnx.php';
		$sql = "INSERT INTO thumbs (code, status, date) VALUES (0, '$_GET[status]', NOW())";
		mysqli_query($dbcon, $sql);
		mysqli_close($dbcon);
	?>
	<body>
		<meta http-equiv='refresh' content='0; url=index.php'>
	</body>
</html>