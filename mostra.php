<?php
/*
* Desenvolvido por Adão de Sousa Carvalho
* em 04/02/2020
*/

include("conecta.php"); // caminho do seu arquivo de conexão ao banco de dados
$consulta = "SELECT * FROM crentes";
$con = mysqli_query($link, $consulta) or die(mysqli_error);
$cont = 0; $quantC = 0; $quntM = 0; $quantB = 0;
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Mostra Crentes</title>
	<link href="conf_menu.css" rel="stylesheet"/>
</head>
<body>

<div id="geral">
	
	<table class="mostra"  >
	
		<tr>
			<td width="10px">Código</td>
			<td width="250px">Nome</td>
			<td width="100px">Telefone</td>
			<td width="110px">Membros</td>
			<td width="80px">Batizado</td>
			<td width="200px">Endereço</td>
		</tr>
    
<?php 

	while($dado = $con->fetch_array()) { 

		$cont +=1;

?>
		
		<tr>
			<td><?php echo $dado['id']; ?></td>
			<td><?php echo $dado['nome']; ?></td>
			<td><?php echo $dado['telefone']; ?></td>
			<td><?php echo $dado['menbro']; ?></td>
			<td><?php echo $dado['batizado']; ?></td>
			<td><?php echo $dado['endereco']; ?></td>
		</tr>
				
<?php 

//Função que faz a quantinha de membros, congregados e batizados
	$b = "sim";
	$m = $dado['menbro'];
	$bt = $dado['batizado'];
	
if ( strcasecmp($m,$b)==0 ) {

$quntM +=1;

	}else{
$quantC +=1;

	}
	
if(strcasecmp($bt,$b)==0 ){
	$quantB +=1;
	
	}
	
	}
	$tbatizado = $cont - $quantB; 

 print " <tr><td colspan='2'>Resultado Geral </td> <td> Membros: $quntM </td><td> Congregados: $quantC </td><td> Batizados: $quantB </td><td> Total Geral $cont </tr>"; ?>
<tr class="link" align="center"><td colspan="6"><a href="menu.html">Voltar Ao Menu</a></td></tr>

    </table>
		
 </div>
</body>
</html>
