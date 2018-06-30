<?php 
	session_start();#iniciando a sesao
	if (isset($_POST['id']) && ($_POST['id']) != '' ) {#verificador se o id esta sentado e se e um valor valido para altera o cadastro
		 $id = $_POST ['id'];
		 $_SESSION['cadastropessoal'][$id]['nome']			= $_POST['nome'];#adiciona a cada variavel o valor correspodente na sesão que 
		 $_SESSION['cadastropessoal'][$id]['idade']			= $_POST['idade'];
		 $_SESSION['cadastropessoal'][$id]['telefone']		= $_POST['telefone'];#para a altera o valores sera adicionado um echo  em value
	     $_SESSION['cadastropessoal'][$id]['enderenco']		= $_POST['enderenco'];#formulario
   	     $_SESSION['cadastropessoal'][$id]['cidade']		= $_POST['cidade'];
		 $_SESSION['cadastropessoal'][$id]['estado']		= $_POST['estado'];
		
	}
	elseif (count($_POST)) {#verificando se o post esta vazio
		$_SESSION['cadastropessoal'][]=$_POST;

	}
	header('location: listar.php');#redirecionado a pagina pro lista apos fazer o processamento dos dados

?>