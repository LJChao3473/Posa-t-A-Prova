<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
    <header class="container-fluid">
        <h3>Portal</h3>
    </header>

    <?php if(isset($_SESSION['missatge'])) { ?>
        <div class="container-fluid position-absolute p-0">
            <div class="alert alert-<?= $_SESSION['missatgecolor'] ?> alert-dismissible fade show position-relative" role="alert">
            <?= $_SESSION['missatge'] ?>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php unset($_SESSION['missatge']); unset($_SESSION['missatgecolor']); } ?>
        
    <div class="container">
        <br><br><br>
        <h4 class="text-center">Introdueix les teves credencials</h4>
        <br>
        <form id="login" action="./operacions/login.php" method="POST">
            <div class="form-group centerinputs">
                <input id="inUsuari" type="text" class="form-control" placeholder="Usuari" name="nom" autofocus/>
            </div>
            <div class="form-group centerinputs">
                <input id="inContrasenya" type="password" class="form-control" placeholder="Contrasenya" name="contrasenya"/>
            </div>
            <br>
            <div class="form-group text-center">
                <button id="btlogin" class="btn btn-outline-primary btn-sm">Iniciar sessió</button>
            </div>
            <br><br>
            <div class="centered">
                <div class="form-group text-center">
                    <a href="registre.php" class="ForgetPwd">Registra't</a><br><br><br><br>
                    <a href="registreanonim.php" class="ForgetPwd">Iniciar sessió anònimament</a><br><br>
                    <a href="#" class="ForgetPwd">Contrasenya oblidada?</a>
                </div>
            </div>
        </form>
    </div>

<?php include("includes/footer.php"); ?>