<?php

include("../includes/pdo.php");

if(isset($_GET['idAlumne'])) {
  
    $idAlumne = $_GET['idAlumne'];
    $sql = "DELETE FROM alumne WHERE idAlumne =  $idAlumne";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $_SESSION['missatge'] = 'Alumne eliminat correctament';
    $_SESSION['missatgecolor'] = 'success';

    header('Location: ../gestioalumnes.php');
    
}

?>