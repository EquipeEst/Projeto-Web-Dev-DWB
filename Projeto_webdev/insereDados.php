<?php

	require_once 'conexao.php';
	if(isset($_POST['btCadastro'])){



	$nome = $_POST['nome'];
	$email =$_POST['email'];
	$whatsapp = $_POST['whatsapp'];
	$mensagem =$_POST['mensagem'];



	$sql = "INSERT INTO contato (nome, mensagem, email, whatsapp) VALUES ('$nome','$mensagem','$email','$whatsapp')";



	if(mysqli_query($con, $sql)){
		echo "Cadastrado com sucesso!!!";
	}
	else{
		echo "Erro não foi possivel cadastrar";
	}

	mysqli_close($con);
	}


?>