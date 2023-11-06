<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/estils.css">
    <script defer src="Controlador/controlador.js"></script>
    <title>Wonderful Travel</title>
</head>
<body onload="init()">
    <div id="data" class="datahora"></div><br><br>
    <h2>Wonderful Travel</h2>
    <form action="Controlador/controlador.php" method="POST">
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

        <label for="desti">Destí:</label>
        <select name="desti" id="desti">
            <option value=""></option>
            <option value="europa">Europa</option>
            <option value="africa">Àfrica</option>
            <option value="america">Amèrica</option>
            <option value="oceania">Oceania</option>
            <option value="asia">Àsia</option>
        </select><br><br>

        <label for="preu">Preu:</label>
        <input type="text" id="preu" name="preu" readonly><br><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="cp">Codi postal:</label>
        <input type="text" id="cp" name="cp" required><br><br>

        <label for="dni">DNI</label>
        <input type="text" id="dni" name="dni" required><br><br>

        <label for="direccio">Direcció:</label>
        <input type="text" id="direccio" name="direccio" required><br><br>

        <label for="correu">Correu electrònic:</label>
        <input type="email" id="correu" name="correu" required><br><br>

        <label for="sexe">Sexe:</label>
        <select id="sexe" name="sexe">
            <option value=""></option>
            <option value="masculi">Masculí</option>
            <option value="femeni">Femení</option>
            <option value="nobinari">No binari</option>
        </select><br><br>

        <label for="numPersones">Persones:</label>
        <input type="number" id="numPersones" name="numPersones" min="1" max="512" required><br><br>

        <input type="submit" value="Afegir" onclick="benito()">
    </form>
</body>
</html>
