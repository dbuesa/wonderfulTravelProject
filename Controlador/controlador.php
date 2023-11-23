<?php
session_start();

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


afegirUsuari($nom, $adreca, $sexe, $adreca_electronica, $dni, $codi_postal);
afegirReserva($nom, $continent, $ciutat, $data, $numPersones, $preu, $dni);
enviarMail($adreca_electronica);

include "Vista/reserva_exit.php";
?>      