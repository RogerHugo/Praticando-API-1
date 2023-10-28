<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload = "BuscarDados()">
    <div>
        Buscar:
        <select id = "Buscar">
            <option selected>All</option>
            <option>Id</option>
            <option>Nome</option>
            <option>Data de nascimento</option>
            <option>Altura</option>
            <option>Nacionalidade</option>
            <option>Sexo</option>
        </select>
        <button id = "buscar" onclick="BuscarDados()">Atualizar</button>
    </div>
    <div>
        De:
        <select id = "De">

        </select>
        <button id = "buscar" onclick="ApresentarDados()">Buscar</button>
    </div>
    <div id = "ApresentaDados"></div>
    <script src = "script.js" ></script>
</body>
</html>