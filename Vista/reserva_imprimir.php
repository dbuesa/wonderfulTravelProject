<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/reserva.css">
    <title>Imprimir</title>
</head>
<body>
    <?php session_start(); 
        if (isset($_SESSION['dadesReserva'])) {
            $dadesResrva = $_SESSION['dadesReserva'];
        }
    ?>
    <table>
    <h1>Wonderful travel</h1>
    <h2>El seu bitllet i itinerari</h2>
    <p><b>Dades del passatger</b></p>
    <div class="left">
    <label><b>Nom del passatger</b></label>
    <p><?php echo $dadesResrva['nom']?></p>
    <hr>
    <p><b>Sexe</b></p>
    <p><?php echo $dadesResrva['sexe']; ?></p>
    <hr>
    </div>
    <label><b>Correu electrònic</b></label>
    <p><?php echo $dadesResrva['adreca_electronica']; ?></p>
    <hr>
    <p><b>Document d'identitat(NIF)</b></p>
    <p><?php echo $dadesResrva['dni']; ?></p>
    <hr>
    <p><b>Dades del viatge</b></p>
    <div class="left">
    <label><b>Origen</b></label>
    <p><?php echo "Europa / Espanya"?></p>
    <hr>
    <p><b>Preu</b></p>
    <p><?php echo $dadesResrva['preu']; ?></p>
    <hr>
    </div>
    <label><b>Destí</b></label>
    <p><?php echo $dadesResrva['continent'] . ' / ' . $dadesResrva['ciutat']?></p>
    <hr>
    <p><b>Data inici</b></p>
    <p><?php echo $dadesResrva['data']; ?></p>
    <hr>
    <p>Moltes gràcies per contractar el vostre vol amb nosaltres</p>
    <p>Torna a contractar els nostres destís a <a href="../index.php">www.wonderfultravel.cat</a></p>
    </table>
</body>
</html>