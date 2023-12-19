<!DOCTYPE html>
<html>
	<head>
		<title>homer demo</title>
	</head>
	<?php
		include 'cnx.php';
		$sql = "DELETE FROM thumbs WHERE code = $_GET[code] LIMIT 1";
		mysqli_query($dbcon, $sql);
		mysqli_close($dbcon);
	?>
	<body>
		<meta http-equiv='refresh' content='0; url=index.php'>
	</body>
</html>