<?php
function afegirUsuari($nom, $adreca, $sexe, $adreca_electronica, $dni, $codi_postal){
  require "../Database/connexio.php";
    try {      
        $stmt = $conn->prepare("INSERT INTO usuaris (nom, adreca, sexe, adreca_electronica, dni, codi_postal) VALUES (?, ?, ?, ? , ? , ?)");
    
        $stmt->bindParam(1, $nom);
        $stmt->bindParam(2, $adreca);
        $stmt->bindParam(3, $sexe);
        $stmt->bindParam(4, $adreca_electronica);
        $stmt->bindParam(5, $dni);
        $stmt->bindParam(6, $codi_postal);
        $stmt->execute();
        
      } catch(PDOException $e) {
        $msg[]=  "Error: " . $e->getMessage();
    }
        
    $conn = null;

}

function obtenirIdUsuari($nom){
  require "../Database/connexio.php";
  try{
    $stmt = $conn->prepare("SELECT usuari_id FROM usuaris WHERE nom = ?");
    $stmt->bindParam(1, $nom);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['usuari_id'];
  } catch(PDOException $e) {
    echo  "Error: " . $e->getMessage();
}
}

function obtenirIdContinent($continent){
  require "../Database/connexio.php";
  try{
    $stmt = $conn->prepare("SELECT continent_id FROM contintents WHERE nom = ?");
    $stmt->bindParam(1, $continent);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['continent_id'];
  } catch(PDOException $e) {
    echo  "Error: " . $e->getMessage();
  }
}

function obtenirIdCiutat($ciutat){
  require "../Database/connexio.php";
  try{
    $stmt = $conn->prepare("SELECT ciutat_id FROM ciutats WHERE nom = ?");
    $stmt->bindParam(1, $ciutat);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['ciutat_id'];
  } catch(PDOException $e) {
    echo  "Error: " . $e->getMessage();
  }
}


function afegirReserva($nom, $continent, $ciutat, $data, $numPersones, $preu){
  require "../Database/connexio.php";
  $usuari_id = obtenirIdUsuari($nom);
  $continent_id = obtenirIdContinent($continent);
  $ciutat_id = obtenirIdCiutat($ciutat);
  try{
    $stmt = $conn->prepare("INSERT INTO reserves (usuari_id, continent_id, ciutat_id, data, persones, preu) VALUES (?, ?, ?, ? , ? , ?)");
    $stmt->bindParam(1, $usuari_id);
    $stmt->bindParam(2, $continent_id);
    $stmt->bindParam(3, $ciutat_id);
    $stmt->bindParam(4, $data);
    $stmt->bindParam(5, $numPersones);
    $stmt->bindParam(6, $preu);
    $stmt->execute();
  } catch(PDOException $e) {
    echo  "Error: " . $e->getMessage();
  }

}

?>