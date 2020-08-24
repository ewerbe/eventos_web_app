<?php
	include 'conexaoBD.php';

    function agendarEvento($titulo, $descricao, $dataEvento, $hora, $email, $telefone, $presencial, $link, 
        $cep, $rua, $bairro, $cidade){
		    conectar();
		    query("INSERT INTO evento(titulo, descricao, dataEvento, hora, email, telefone, presencial, link,
                cep, rua, bairro, cidade) VALUES ('$titulo','$descricao', '$dataEvento', '$hora', '$email', '$telefone', 
                '$presencial', '$link', '$cep', '$rua', '$bairro', '$cidade')");
		    fechar();
	}



	function eventos(){
		conectar();
		$resultado = query("SELECT * FROM evento");
		fechar();
		return $resultado;
	}
	
		function mostrarEventoEditar($id_evento){
		conectar();
		$resultado = query("SELECT * FROM evento WHERE id_evento=$id_evento");
		fechar();
		return $resultado;
	}

		function editarEvento($codProduto, $descricao, $lote, $preco){
		conectar();
		query("UPDATE produto SET descricao='$descricao', lote='$lote', preco=$preco WHERE codproduto=$codProduto");
		fechar();
	}

		function excluirEvento($id_evento){
			conectar();
			query("DELETE FROM evento WHERE id_evento=$id_evento");
			fechar();
		}


	function mostrarProdutoSelecionado($codProduto){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE codproduto=$codProduto");
		fechar();
		return $resultado;
	}
?>