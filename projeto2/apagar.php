<?php
session_start();#vamos usa a sesaõ por isso tem que inicia a seçao
if(isset($_GET['id']) && $_GET['id']!= ''){ #verifica se a variavel esta locada e se nao e vazia para pode apaga a linha
	$id = $_GET['id'];
	array_splice($_SESSION['cadastropessoal'], $id ,1);#o array_splice retira parte de um array se passa por paramentros o array a posiçao e a quatidade de intes
	header("location: listar.php");#PARA REDEFINIR O LOCAL DE VOLTA PARA O LISTAR.PHP

}
?>