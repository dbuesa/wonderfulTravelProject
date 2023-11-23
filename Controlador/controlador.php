<?php
session_start();

require "../Model/model.php";
require "../Utils/utils.php";
require "../Model/enviarMail.php";


if(!empty($nom) && !empty($adreca) && !empty($sexe) && !empty($adreca_electronica) && !empty($dni) && !empty($codi_postal) && !empty($continent) && !empty($ciutat) && !empty($data) && !empty($numPersones) && !empty($preu)){
    $nom = $_POST['nom'];
    $adreca = $_POST['direccio'];
    $sexe = $_POST['sexe'];
    $adreca_electronica = $_POST['correu'];
    $dni = $_POST['dni'];
    $codi_postal = $_POST['cp'];
    $continent = $_POST['desti'];
    $ciutat = $_POST['ciutat'];
    $data = $_POST['data'];
    $numPersones = $_POST['numPersones'];
    $preu = $_POST['preu'];
    $_COOKIE['nom'] = $nom;
    $_COOKIE['adreca'] = $adreca;
    $_COOKIE['sexe'] = $sexe;
    $_COOKIE['adreca_electronica'] = $adreca_electronica;
    $_COOKIE['dni'] = $dni;
    $_COOKIE['codi_postal'] = $codi_postal;
    $_COOKIE['continent'] = $continent;
    $_COOKIE['ciutat'] = $ciutat;
    $_COOKIE['data'] = $data;
    $_COOKIE['numPersones'] = $numPersones;
    $_COOKIE['preu'] = $preu;
}



afegirUsuari($nom, $adreca, $sexe, $adreca_electronica, $dni, $codi_postal);
afegirReserva($nom, $continent, $ciutat, $data, $numPersones, $preu, $dni);
enviarMail($adreca_electronica);

include_once "../Vista/reserva_exit.php";
?>      