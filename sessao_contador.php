<?php 
	session_start();
	
	if(!isset($_SESSION['contador']))
		$_SESSION['contador'] = 1;
	else
		$_SESSION['contador']++;
	$msg = "voce ja visitou este site ". $_SESSION['contador']." vezes nesta seçao.";
	if($_SESSION['contador']== 20)
		session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contador de visitas</title>
</head>
<body>
	<h1>
		<?php echo $msg; ?>
	</h1>
</body>
</html>