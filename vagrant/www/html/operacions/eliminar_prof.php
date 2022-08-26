<?php

include("../includes/pdo.php");

if(isset($_GET['idModerador'])) {
  
    $idModerador = $_GET['idModerador'];
    $sql = "DELETE FROM moderador WHERE idModerador =  $idModerador";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $_SESSION['missatge'] = 'Professor eliminat correctament';
    $_SESSION['missatgecolor'] = 'success';

    header('Location: ../gestioprofessors.php');
    
}

?>