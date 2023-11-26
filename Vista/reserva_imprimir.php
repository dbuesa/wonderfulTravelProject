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
    <h2>Su billete e itinerario</h2>
    <p><b>Datos del pasajero</b></p>
    <div class="left">
    <label><b>Nombre del pasajero</b></label>
    <p><?php echo $dadesResrva['nom']?></p>
    <hr>
    <p><b>Sexe</b></p>
    <p><?php echo $dadesResrva['sexe']; ?></p>
    <hr>
    </div>
    <label><b>Correu electronic</b></label>
    <p><?php echo $dadesResrva['adreca_electronica']; ?></p>
    <hr>
    <p><b>Documento de identidad</b></p>
    <p><?php echo $dadesResrva['dni']; ?></p>
    <hr>
    <p><b>Datos del pasajero</b></p>
    <div class="left">
    <label><b>Origen</b></label>
    <p><?php echo "Europa/ Espanya"?></p>
    <hr>
    <p><b>Preu</b></p>
    <p><?php echo $dadesResrva['preu']; ?></p>
    <hr>
    </div>
    <label><b>Destí</b></label>
    <p><?php echo $dadesResrva['continent'] . '/ ' . $dadesResrva['ciutat']?></p>
    <hr>
    <p><b>Data inici</b></p>
    <p><?php echo $dadesResrva['data']; ?></p>
    <hr>
    <p>Moltes Gracies per contractar el vostre vol amb nosaltres</p>
    <p>Torna a contractar els vostres vols amb nosaltres a <a href="../index.php">www.wonderfultravel.cat</a></p>
    </table>
</body>
</html>