<?php

include("../includes/pdo.php");

if (isset($_POST['nom']) && isset($_POST['contrasenya'])) {

    if (!empty($_POST['nom']) && !empty($_POST['contrasenya'])) {
                
        try{
            $sql = "INSERT INTO moderador (nom, contrasenya, avatar) VALUES (:nom, :contrasenya, :avatar)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->execute(
                array(
                ':nom' => $_POST['nom'],
                ':contrasenya' => openssl_encrypt($_POST['contrasenya'], "AES-128-ECB", 'password'),
                ':avatar' => $_POST['avatar']
                )
            );
        
            $_SESSION['missatge'] = 'Usuari creat correctament';
            $_SESSION['missatgecolor'] = 'success';
        
            header('Location: ../gestioprofessors.php');
        }

        catch (PDOException $e) {
            exit($e->getMessage());
        }
        
    }

    else {
        $_SESSION['missatge'] = 'Introdueix un usuari i contrasenya si us plau';
        $_SESSION['missatgecolor'] = 'danger';
        header('Location: ../registre.php');
    }
    
}

?>