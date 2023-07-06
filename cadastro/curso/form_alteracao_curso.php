<!DOCTYPE html>

<!-- form_alteracao.html -->
<?php
 include "../inc/conectabd.inc.php";
 include "../inc/funcoes.inc.php";
 
 $id = $_GET["id"];
 $cur = recupera_curso($id); // trocar
 //var_dump($cur)
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar Curso</title>
    </head>
    <body>
        <h1>Atualizar curso</h1>
		<form action="alteracao_curso.php" method="GET">
            <input type="hidden" name="id_curso" value="<?php echo $cur["id_curso"];?>">
			<label for="id_curso">Curso:</label>
			<input type="text" name="ds_curso" id="id_curso" value="<?php echo $cur["ds_curso"];?>">
			<br>

            <label for="carga">Carga horária:</label>
            <input type="number" name="carga" id="carga" value="<?php echo $cur["nr_carga_horaria"] ?>">
        <br>
    
        <label for="inicio">Data de início:</label>
        <input type="date" name="inicio" id="inicio" value="<?php echo substr($cur["dt_inicio"], 0, 10); ?>">
        <br>

        <input type="submit" value="Ok">
		</form>
    </body>
</html>