<!DOCTYPE html>
<!-- cadastro.html -->
<html>

<head>
    <title>Cadastro de curso</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Cadastrar novo curso</h1>
    <form action="insercao_curso.php" method="GET">
        <label for="ds_curso">
            Curso:
        </label>
        <input type="text" name="curso" id="curso">
        <br>

        <label for="carga">
            Carga horária:
        </label>
        <input type="number" name="carga" id="carga">
        <br>

        <label for="inicio">
            Data de início:
        </label>
        <input type="date" name="inicio" id="inicio">
        <br>


        <input type="submit" value="Ok">
    </form>
</body>

</html>