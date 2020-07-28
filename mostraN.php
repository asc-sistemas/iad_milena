<?php

include("conecta.php");

   $mes = date("m");
   $dia = date("d");
   
  /* $conexao = mysql_connect("localhost", "root", "") or die ("Erro na conexao ao banco de dados.");   
   $db = mysql_select_db("banco") or die ("Erro ao selecionar a base de dados.");
   $sql2 = "SELECT * FROM cadastroclientes;";
*/
   #SQL lista aniversariantes do mes
   $sql = "SELECT nome, DAY(dataN)  FROM crentes WHERE MONTH(dataN) ='$mes'";
   $resultado = mysqli_query($link, $sql);
   
   while ($row = mysqli_fetch_array($resultado))           
      {
           echo "<b>Aniversariantes do mês </b> : $row[0]";
           echo "            ";
           echo "<b>Dia </b> : $row[1]<br>";
      }
   echo "<br>";
?>
<p><a href="menu.html">Voltar ao Menu</a></p>