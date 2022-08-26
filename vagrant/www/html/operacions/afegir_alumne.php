<?php

include("../includes/pdo.php");

if (isset($_POST['nom']) && isset($_POST['contrasenya'])) {

    if (!empty($_POST['nom']) && !empty($_POST['contrasenya'])) {
        // No es pot registrar cap usuari amb el nom admin
        if($_POST['nom'] != 'admin') {
            try{
                $sql = "INSERT INTO alumne (nom, contrasenya, avatar) VALUES (:nom, :contrasenya, :avatar)";
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
            
                if(isset($_POST['btRegistreAlumne'])){
                    unset($_POST['btRegistreAlumne']);
                    header('Location: ../index.php');
                }
                else if(isset($_POST['btRegistreModerador'])) {
                    unset($_POST['btRegistreModerador']);
                    header('Location: ../gestioalumnes.php');
                }
            }
    
            catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        else {
            $_SESSION['missatge'] = "Nom reservat per l'administrador del sistema";
            $_SESSION['missatgecolor'] = 'danger';
            header('Location: ../registre.php');
        }    
        
    }

    else {
        $_SESSION['missatge'] = 'Introdueix un usuari i contrasenya si us plau';
        $_SESSION['missatgecolor'] = 'danger';
        header('Location: ../registre.php');
    }
    
}

?>