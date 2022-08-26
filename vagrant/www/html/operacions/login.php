<?php

include("../includes/pdo.php");

if (isset($_POST['nom']) && isset($_POST['contrasenya'])) {

    if (!empty($_POST['nom']) && !empty($_POST['contrasenya'])) {
        
        try {
            
            // Inici de sessió alumne
            $sql = "SELECT * FROM alumne WHERE nom = :nom AND contrasenya = :contrasenya";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam("nom", $_POST['nom'], PDO::PARAM_STR);
            $stmt->bindParam("contrasenya", openssl_encrypt($_POST['contrasenya'], "AES-128-ECB", 'password'), PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $_SESSION['nom'] = $result[0]['nom'];
                $_SESSION['avatar'] = $result[0]['avatar'];
                $_SESSION['tipususuari'] = 'alumne';
                header('Location: ../principalalumne.php');
            }

            // Inici de sessió moderador (professor o administrador)
            else {
                $sql = "SELECT * FROM moderador WHERE nom = :nom AND contrasenya = :contrasenya";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam("nom", $_POST['nom'], PDO::PARAM_STR);
                $stmt->bindParam("contrasenya", openssl_encrypt($_POST['contrasenya'], "AES-128-ECB", 'password'), PDO::PARAM_STR);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $_SESSION['nom'] = $result[0]['nom'];
                    $_SESSION['avatar'] = $result[0]['avatar'];
                    $_SESSION['tipususuari'] = ($result[0]['nom'] == 'admin' ? 'admin' : 'professor');
                    header('Location: ../principalmoderador.php');
                }
                // No existeix ni com a alumne ni com a professor
                else {
                    $_SESSION['missatge'] = 'Usuari no existent';
                    $_SESSION['missatgecolor'] = 'danger';
                    header('Location: ../index.php');
                }
            }

        }
        
        catch (PDOException $e) {
            exit($e->getMessage());
        }

    }

    else {
        $_SESSION['missatge'] = 'Introdueix un usuari i contrasenya si us plau';
        $_SESSION['missatgecolor'] = 'danger';
        header('Location: ../index.php');
    }
    
}

?>

