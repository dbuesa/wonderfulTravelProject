<?php

function afegirUsuari($nom, $telefon, $adreca, $sexe, $adreca_electronica, $dni, $codi_postal){
    require "../Database/connexio.php";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        $stmt = $conn->prepare("INSERT INTO usuaris (nom, telefon, adreca, sexe, adreca_electronica, dni, codi_postal) VALUES (?, ?, ?, ? , ? , ? ,?)");
    
        $stmt->bindParam(1, $dni);
        $stmt->bindParam(2, $nom);
        $stmt->bindParam(3, $adreca);
        $stmt->bindParam(4, $sexe);
        $stmt->bindParam(5, $adreca_electronica);
        $stmt->bindParam(6, $dni);
        $stmt->bindParam(7, $codi_postal);
    
        $stmt->execute();
        
      } catch(PDOException $e) {
        $msg[]=  "Error: " . $e->getMessage();
    }
        
    $conn = null;

}



?>