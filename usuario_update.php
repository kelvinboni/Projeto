<?php

include('conexao.php');

$name=$_POST['nome'];
$email=$_POST['Email'];
$phone=$_POST['Telefone'];
$document=$_POST['Documento(CPF)'];
$birth_date=$_POST['Data_de_aniverssario'];
$address=$_POST['Endereco'];
$number=$_POST['Numero'];
$complement=$_POST['Complemento'];
$district=$_POST['Bairro'];
$city=$_POST['Cidade'];
$state=$_POST['Estado'];

//$echo '---';
$sql =        "UPDATE Users SET ";
$sql = $sql . "Email='$email', ";
$sql = $sql . "nome='$name', ";
$sql = $sql . "Telefone'$phone' ";
$sql = $sql . "Documento(CPF)'$document' ";
$sql = $sql . "Data_de_aniverssario'$birth_date' ";
$sql = $sql . "WHERE id=$id;";

$sql =        "UPDATE Users_addressouser_id SET ";
$sql = $sql . "Endereco='$address', ";
$sql = $sql . "Numero='$number', ";
$sql = $sql . "Complemento'$complement' ";
$sql = $sql . "Bairro'$district' ";
$sql = $sql . "Cidade'$city' ";
$sql = $sql . "Estado'$state' ";
$sql = $sql . "WHERE id=$id;";


//echo
//$sql = $sql . "WHERE id=$id;";
//echo $sql;
//die();

$inserir = mysqli_query($conexao,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro de Usuarios</title>  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<div class="container" style="widht: 500px;margin-top: 20px">
		<h4>Usuario atualizado</h4>
	</div>
	<center>
		<a href="usuario_list.php" role="button" class="btn btn-sm btn-primary">Listagem de usuarios</a>
		
	</center>
</body>
</html>
