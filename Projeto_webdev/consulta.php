<?php
	require_once 'conexao.php';



	if(isset($_POST['btConsulta'])){



	$whatsapp = $_POST['whatsapp'];

	//cria a query de consulta ao banco de dados a partir do Whatsapp
	$sql = "SELECT nome, email FROM contato WHERE whatsapp = '$whatsapp'";



	$result = mysqli_query($con, $sql);



	//percorre e imprime os dados
	while($dados = mysqli_fetch_array($result)){

	echo "<br>Usuário Consta na base de dados.";
	echo "<br>Nome: ".$dados['nome'];
	echo "<br>E-mail: ".$dados['email'];
	}
}
?>