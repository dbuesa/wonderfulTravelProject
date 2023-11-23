<?php

require "../Model/model.php";
require "../Utils/utils.php";
require "../Model/enviarMail.php";

$nom = netejarData($_POST['nom']);
$adreca = netejarData($_POST['direccio']);
$sexe = netejarData($_POST['sexe']);
$adreca_electronica = netejarData($_POST['correu']);
$dni = netejarData($_POST['dni']);
$codi_postal = netejarData($_POST['cp']);
$continent = netejarData($_POST['desti']);
$ciutat = netejarData($_POST['ciutat']);
$data = netejarData($_POST['data']);
$numPersones = netejarData($_POST['numPersones']);
$preu = netejarData($_POST['preu']);


session_start();
$_SESSION['dadesReserva'] = [
    'nom' => $nom,
    'adreca' => $adreca,
    'sexe' => $sexe,
    'adreca_electronica' => $adreca_electronica,
    'dni' => $dni,
    'codi_postal' => $codi_postal,
    'continent' => $continent,
    'ciutat' => $ciutat,
    'data' => $data,
    'numPersones' => $numPersones,
    'preu' => $preu
];


if(comprovarMailExisteix($adreca_electronica) || comprovarDniExisteix($dni)){
    afegirReserva($nom, $continent, $ciutat, $data, $numPersones, $preu, $dni);
    enviarMail($adreca_electronica);
} else {
    afegirUsuari($nom, $adreca, $sexe, $adreca_electronica, $dni, $codi_postal);
    afegirReserva($nom, $continent, $ciutat, $data, $numPersones, $preu, $dni);
    enviarMail($adreca_electronica);
}

include "../Vista/reserva_exit.php";
?>      