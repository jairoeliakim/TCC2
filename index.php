<?php
session_start(); //Inicia a sessão
//área de memória dentro do servidor
//carrinho de compras, seus dados de conexão
//qualquer variável que vc queira criar
	include_once("page/topo.php");
	include_once("page/inicio.html");
	include_once("controle/ListarPessoa_class.php");
	$index = new ListarPessoa();
	//atribuição de responsabilidade
	//o controle sabe como exibir a lista de contatos
//include_once("visao/base.php");
?>