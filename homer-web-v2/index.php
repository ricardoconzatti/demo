<!DOCTYPE html>
<html>
	<head>
		<title>homer demo</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<?php
		//error_reporting(E_ALL);
		//ini_set('display_errors', 1);
		include 'cnx.php';
		$getSql = "SELECT code, status, date FROM thumbs ORDER BY code ASC";
		$data = mysqli_query($dbcon, $getSql);
		$data2 = mysqli_query($dbcon, $getSql);
		mysqli_close($dbcon);
	?>
	<body>
		<div>
			<a href="add.php?status=thumbs_up"><img class="thumb" src="img/thumbs_up.png" /></a>
			<a href="add.php?status=thumbs_down"><img class="thumb" src="img/thumbs_down.png" /></a>
		</div>
		<?php
		if ($data->num_rows == 0) {
			//echo "there's nothing here...";
		}
		else {
			$thumbsUp = 0;
			$thumbsDown = 0;
			while ($sql2 = mysqli_fetch_array($data2)) {
				if ($sql2['status'] == "thumbs_up") {
					$thumbsUp = $thumbsUp + 1;
				}
				else {
					$thumbsDown = $thumbsDown + 1;
				}
			}
		?>
		<div class="minimal-table">
			<div class="table-header-main">
				Homer Jay Simpson
				<p class="table-header-sub">Thumbs up: <?php echo $thumbsUp; ?> | Thumbs down: <?php echo $thumbsDown; ?></p>
			</div>
			<div class="table-row-title">
				<div class="table-cell-title">ID</div>
				<div class="table-cell-title">DATE / TIME</div>
				<div class="table-cell-title">STATUS</div>
				<div class="table-cell-title">ACTION</div>
			</div>	
			<?php 
			while ($sql = mysqli_fetch_array($data)) { 
				if ($sql['status'] == "thumbs_up") {
					$image = "homer_happy.jpg";
				}
				else {
					$image = "homer_sad.jpg";
				} ?>
				<div class="table-row">
					<div class="table-cell"><?php echo $sql['code']; ?></div>
					<div class="table-cell"><?php echo $sql['date']; ?></div>
					<div class="table-cell"><img class="homer-image" src="img/<?php echo $image; ?>" /></div>
					<div class="table-cell"><a href="remove.php?code=<?php echo $sql['code']; ?>"><img src="img/remove.png" /></a></div>
				</div>
			<?php
			}
		} ?>
		</div>
		<div class="footer">
			<a href="https://conzatech.com" target="_blank">Ricardo Conzatti | conzatech.com | v2.0</a>
		</div>
	</body>
</html>
