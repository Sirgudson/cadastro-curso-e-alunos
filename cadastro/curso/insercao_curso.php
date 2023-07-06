<!DOCTYPE html>
<!-- insercao_curso.php -->
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do curso informado em cadastro_curso.php

  $curso = $_GET["curso"];
  $carga = $_GET["carga"];
  $inicio = $_GET["inicio"];
  
  include_once "../inc/conectabd.inc.php";
  $query = "INSERT INTO tb_curso 
            (ds_curso, nr_carga_horaria, dt_inicio) 
	    VALUES
            ('$curso', $carga, '$inicio');";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver Cursos cadastrados</a>
 
 </body>
</html>

