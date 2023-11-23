<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estils/reserva.css">
    <title>Imprimir</title>
</head>
<body>
    <?php require "../Controlador/controlador.php"?>
    <table>
    <h1>Wonderful travel</h1>
    <h2>Su billete e itinerario</h2>
    <h2>Your ticket and itinerary</h2>
    <p><b>Necesitas facturar / Need to check in</b> </p>
    <p>Datos del pasajero / Passenger data</p>
    <hr>
    <p>Nombre del pasajero</p>
    <hr>
    <p><?php echo $nom?></p>
    <p>Documento de identidad / Identity document</p>
    <hr>
    <p><?php echo $dni?></p>
    </table>
</body>
</html>