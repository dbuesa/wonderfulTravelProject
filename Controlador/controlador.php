<?php

$errors = array();

if (isset($_POST['submit'])) {
    require '../Utils/utils.php';

    $data = netejarData($_POST['data']);
    $desti = netejarData($_POST['email']);
    $nom = netejarData($_POST['mensaje']);
    $cp = netejarData($_POST['cp']);
    $dni = netejarData($_POST['dni']);
    $direccio = netejarData($_POST['direccio']);
    $correu = netejarData($_POST['correu']);
    $sexe = netejarData($_POST['sexe']);
    $numPersones = netejarData($_POST['numPersones']);
}



?>