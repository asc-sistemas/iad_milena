<?php
include("conecta.php");

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$dataN = $_POST['data'];

$sql = "INSERT INTO cofre(id, nome, datas, valor)VALUES('','$nome', '$dataN', '$valor')";

if (mysqli_query($link, $sql)) {
      echo "Cadastro com sucesso";
	 ?> <p><a href="menu.html">Voltar ao Menu</a></p><?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}


?>