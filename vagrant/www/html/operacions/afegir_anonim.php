<?php

include("../includes/pdo.php");

if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['avatar'] = $_POST['avatar'];
    $_SESSION['tipususuari'] = 'anonim';
    unset($_POST['nom']); unset($_POST['avatar']);
    header('Location: ../principalalumne.php');
}       

else {
    $_SESSION['missatge'] = 'Introdueix un nom si us plau';
    $_SESSION['missatgecolor'] = 'danger';
    header('Location: ../registreanonim.php');
}

?>