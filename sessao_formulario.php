<?php 
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario - sessao</title>
</head>
<body>
	<form method="POST">
		<table borderr='0'>
			<tr>
				<td>Nome:</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Idade:</td>
				<td><input type="number" name="idade"></td>
			</tr>
			<tr>
				<td>Telefone:</td>
				<td><input type="text" name="telefone"></td>
			</tr>
			<tr>
				<td><input type="submit" value="enviar"></td>
			</tr>
		</table>
		<hr>
	</form>
	
	<?php 
		if(count($_POST))
			$_SESSION['cadastro'][]= $_POST;
		
		if(isset($_SESSION['cadastro']) && count($_SESSION['cadastro'])) {
			echo '<table border = "0">';

			foreach ($_SESSION['cadastro'] as $pessoa) {
				echo'<tr>';

				foreach ($pessoa as $atributo => $valor) {
					echo "<td> $atributo </td>";
					echo "<td> $valor </td>";
					
				}

				echo'</tr>';
			}

			echo '</table>';
		}
		else
			echo "NÃO EXISTE DADOS AMAZENADO NA SESÃO.";
	?>

</body>
</html>