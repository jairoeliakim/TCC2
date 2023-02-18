<?php
session_start();
//include_once("visao/topo.php");

//ROTEADOR

	//GET -> função que deixa variáveis explicitas na URL
	//recebe o comportamento que será executado por GET
	//array chamado $_GET e os índices são as variáveis
	//localhost/agenda/Pessoa.php?fun=alterar
	
	
	if(isset($_GET["fun"])){
		//is + set => é setado? T Está vazio? F
	
		$fun = $_GET["fun"];
		
		if($fun == "cadastrar"){
			
			include_once("controle/CadastrarPessoa_class.php");
			$pag = new CadastrarPessoa();
			
		} elseif($fun == "alterar"){
			include_once("controle/AlterarPessoa_class.php");
			$pag = new AlterarPessoa();
			
		} elseif($fun == "excluir"){
			
			include_once("controle/ExcluirPessoa_class.php");//op == sim
			$pag = new ExcluirPessoa();
			
		} elseif($fun == "listar"){
			include_once("controle/ListarPessoa_class.php");
			$pag = new ListarPessoa();
			
		}  elseif($fun == "exibir") {
			include_once("controle/ExibirPessoa_class.php");
			$pag = new ExibirPessoa();
			
		} else {
			include_once("controle/ListarPessoa_class.php");
			$pag = new ListarPessoa();			
		}
		
		
	} else {
		include_once("controle/ListarPessoa_class.php");
		$pag = new ListarPessoa();
	}
	
//include_once("visao/rodape.html");

?>