<?php
	include '../model/crudEventos.php';

	$opcao = $_POST["opcao"];

	if($opcao == "Agendar Evento"){
		$titulo=$_POST["titulo"];
        $descricao=$_POST["descricao"];
        $dataEvento=$_POST["dataEvento"];
        $hora=$_POST["hora"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $presencial=$_POST["presencial"];
        $link=$_POST["link"];
        $cep=$_POST["cep"];
        $rua=$_POST["rua"];
        $bairro=$_POST["bairro"];
        $cidade=$_POST["cidade"];

        agendarEvento($titulo, $descricao, $dataEvento, $hora, $email, $telefone, $presencial, $link, 
        $cep, $rua, $bairro, $cidade);
		header("Location: ../view/index.php");
	}
?>