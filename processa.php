<?php 
include("conecta.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$batizado = $_POST['batizado'];
$membro = $_POST['membro'];
$endereco = $_POST['endereco'];
$dataN = $_POST['data'];

$sql = "INSERT INTO crentes(id, nome, endereco, telefone, menbro, batizado, dataN)VALUES('','$nome','$endereco', '$telefone', '$membro', '$batizado', '$dataN')";

if (mysqli_query($link, $sql)) {
      echo "Cadastro com sucesso";
	 ?> <p><a href="menu.html">Voltar ao Menu</a></p><?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>