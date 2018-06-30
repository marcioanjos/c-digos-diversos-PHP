<?php
	/*verificando se o arquivo esta vazio caso nao esteja o arquivo vazio 
	pegara o nome do arquivo sera salvo o nome, o tamanho o tipo e onde estta guarddo temprariamente
	$_FILES guarda a atribuiçoes do arquivo nao seu conteudo*/
	$nome =isset($_FILES['arquivo']) ? $_FILES['arquivo']['name'] : '';
	$tamanho =isset($_FILES['arquivo']) ? $_FILES['arquivo']['size'] : '';
	$tipo =isset($_FILES['arquivo']) ? $_FILES['arquivo']['type'] : '';
	$tmp =isset($_FILES['arquivo']) ? $_FILES['arquivo']['tmp_name'] : '';

	if ($tamanho > 0) {
		#esta verificando se o tamanho e maior que zero e salvando 
		#o arquivo na pasta arquivo que esta sendo especificando o caminho
		move_uploaded_file($tmp, "arquivos/" . $nome);
	}
?>
<html> 
<head>
	<title>uploud de arquivos</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="arquivo">
		<input type="submit" value="enviar">	
	</form>
	<ul>
		<li>nome do arquivo : <?php echo $nome ?></li>
		<li>tamanho do arquivo : <?php echo $tamanho ?></li>
		<li>tipo do arquivo : <?php echo $tipo ?></li>
		<li>tmp do arquivo : <?php echo $tmp ?></li>
	</ul>
</body>
</html>
