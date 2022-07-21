<?php
$Output ='';
$input = '';
if (!empty($_POST)) {
	$input = $_POST['command'];
	$output = 'Nama kamu '.$input;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Input dan Output</title>
</head>
<body>
	<form action="" method="post">
		<label for="command">Nama Kamu</label><br>
		<input type="text" name="command"><br>
		<input type="submit" value="kirim">
	</form>
	<br>
	<?php echo $output ?>
</body>
</html>