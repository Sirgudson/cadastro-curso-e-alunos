<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alteração Curso</title>
    </head>
    <body>
<?php 
    // efetua alteração do curso informado em form_alteracao_curso.php
    $id_curso = $_GET["id_curso"];
    $ds_curso = $_GET["ds_curso"];
    $carga = $_GET["carga"];
    $inicio = $_GET["inicio"] . " 00:00:00";
    
    include_once "../inc/conectabd.inc.php";

    $query = "UPDATE tb_curso 
                SET ds_curso = '$ds_curso'
                , nr_carga_horaria = $carga
                , dt_inicio = '$inicio'
        WHERE id_curso = $id_curso;";
        // echo $query.'<br>';
    if ($result = mysqli_query($link, $query)) {
        echo "Alteração efetuada com sucesso";
    } else {
        echo mysqli_error($link);
    }
    
    // fecha a conexão
    mysqli_close($link);
?>  
    <br>
    <a href="consulta_curso.php">Ver cursos cadastrados</a>
    </body>
</html>