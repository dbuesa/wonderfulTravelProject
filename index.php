<!DOCTYPE html>
<html lang="ca">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Estils/estils.css">
  <script type="module" src="Controlador/index.js"></script>
  <script defer src="Controlador/rellotge.js"></script>
  <script defer src="Controlador/validarDades.js"></script>
  <title>Wonderful Travel</title>
</head>

<body>
  <div class="clock">
    <svg class="circle" viewBox="0 0 120 120" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle cx="60" cy="60" r="60" />
      <line x1="60" y1="0" x2="60" y2="60" class="hours" />
      <line x1="60" y1="0" x2="60" y2="60" class="minutes" />
      <line x1="60" y1="0" x2="60" y2="60" class="seconds" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />
      <line x1="60" y1="5" x2="60" y2="10" class="line" />

    </svg>
  </div>
  <div id="data" class="datahora"></div><br><br>
  <h2 style="text-align: center;">Wonderful Travel</h2>

  <form action="Controlador/controlador.php" method="POST">
    <div class="form-inline">
      <div class="data-field">
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required min=<?php $avui=date("Y-m-d"); echo $avui;?> >
        <p style="font-size: x-small; color: red;">L'estada romandrà 7 DIES</p>
      </div>

      <div class="data-field">
        <label for="desti">Destí:</label>
        <select name="desti" id="desti">
          <option value="continent" disabled selected>Selecciona un continent</option>
          <option value="europa">Europa</option>
          <option value="africa">Àfrica</option>
          <option value="america">Amèrica</option>
          <option value="oceania">Oceania</option>
          <option value="asia">Àsia</option>
        </select>
      </div>

      <div class="data-field">
        <label for="ciutat">Ciutat:</label>
        <select name="ciutat" id="ciutat">
          <option value="ciutat" disabled selected>Selecciona una ciutat</option>
        </select>
      </div>
    </div>
    <br>
    <div id="imatge-container">
      <img src="Imatges/viaje.webp" id="imatge" width="400px" height="250px">
    </div><br>
    </div>
    <div class="left">
      <label for="numPersones">Persones:</label>
      <input style="width:18em" type="number" id="numPersones" name="numPersones" min="1" max="512" value = "1" required><br>

      <label for="preu">Preu:</label>
      <input style="width:18em" type="text" id="preu" name="preu" readonly><br>


      <label for="nom">Nom:</label>
      <input style="width:18em" type="text" id="nom" name="nom" placeholder="Pere Pi" required><br>

      <label for="cp">Codi postal:</label>
      <input style="width:18em" type="text" id="cp" name="cp" placeholder="08490" required><br>
    </div>
    <label for="dni">DNI</label>
    <input style="width:18em" type="text" id="dni" name="dni" placeholder="12345678A" required><br>

    <label for="direccio">Direcció:</label>
    <input style="width:18em" type="text" id="direccio" name="direccio" placeholder="Carrer Vilar Petit núm. 23" required><br>

    <label for="correu">Correu electrònic:</label>
    <input style="width:18em" type="email" id="correu" name="correu" placeholder="p.pi@sapalomera.cat" required><br>

    <label for="sexe">Sexe:</label>
    <select style="width:18em" id="sexe" name="sexe">
    <option value = "Helicoptero" disabled selected>Helicóptero apache</option>
      <option value="Masculí">Masculí</option>
      <option value="Femení">Femení</option>
      <option value="No binari">No binari</option>
    </select><br><br>

    <label for="descompte"><p style="font-size: x-small; color: red;">15% DE DESCOMPTE (només és aplicable a partir de tres persones)</p></label>
    <input type="button" name="descompte" id="descompte" value="Aplicar descompte"><br>

    <div id="error-container"></div>
    <div class="form-inline">
      <input type="reset" value="Netejar formulari">
      <input type="submit" value="Afegir reserva">
    </div>

  </form>
</body>

</html>