<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviarMail($email){
    require '../PHPMailer-master/src/Exception.php';             
    require '../PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/src/SMTP.php';
    
    $mail = new PHPMailer(true);
    $message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                justify-content: center;
                align-items: center;
                height: 100%; 
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff; 
                border: 1px solid #000000;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
                padding-top:10px;
                margin-top: 15px;
            }

            table {
                border: 1px solid black;
            }

            .left {
                width: 50%;
                float: left;
            }

            .left hr {
                margin-right: 3%;
            }
        </style>
        <title>Imprimir</title>
    </head>
    <body>';
        
    
    if (isset($_SESSION['dadesReserva'])) {
        $dadesResrva = $_SESSION['dadesReserva'];
    }

    $message .= '
        <table>
            <h1>Wonderful travel</h1>
            <p>Gràcies per contractar el seu vol amb nosaltres. A continuació, li mostrem les dades de la seva reserva:</p>
            <hr>
            <p><b>Dades del passatger</b></p>
            <div class="left">
                <label><b>Nom del passatger</b></label>
                <p>' . $dadesResrva['nom'] . '</p>
                <hr>
                <p><b>Sexe</b></p>
                <p>' . $dadesResrva['sexe'] . '</p>
                <hr>
            </div>
            <label><b>Correu electrònic</b></label>
            <p>' . $dadesResrva['adreca_electronica'] . '</p>
            <hr>
            <p><b>Document d\'identitat(NIF)</b></p>
            <p>' . $dadesResrva['dni'] . '</p>
            <hr>
            <p><b>Dades del viatge</b></p>
            <div class="left">
                <label><b>Origen</b></label>
                <p>' . "Europa/ Espanya" . '</p>
                <hr>
                <p><b>Preu</b></p>
                <p>' . $dadesResrva['preu'] . '</p>
                <hr>
            </div>
            <label><b>Destí</b></label>
            <p>' . $dadesResrva['continent'] . ' / ' . $dadesResrva['ciutat'] . '</p>
            <hr>
            <p><b>Data inici</b></p>
            <p>' . $dadesResrva['data'] . '</p>
            <hr>
            <p>Moltes gràcies per contractar el vostre vol amb nosaltres</p>
            <p>Torna a contractar els nostres destís a <a href="../index.php">www.wonderfultravel.cat</a></p>
        </table>
    </body>
    </html>';

  try {
      //Server settings
      $mail->SMTPDebug = 0;                                       //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'd.buesa@sapalomera.cat';               //SMTP username
      $mail->Password   = '03121998';                             //SMTP password
      $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('d.buesa@sapalomera.cat', 'David Buesa');
      $mail->addAddress($email);                                   //Add a recipient
  
      //Content 
      $mail->isHTML(true);                                         //Set email format to HTML
      $mail->Subject = 'Reserva Wonderful Travel';
      $mail->Body    = $message;
  
      $mail->send();
  } catch (Exception $e) {
    echo "Missatge no enviat. Error : {$mail->ErrorInfo}";
    }
  }
?>