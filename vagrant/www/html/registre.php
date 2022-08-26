<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="index.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Registre</h3>
            </div>
            <div class="col-4">
            </div>
        </div>    
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
        <h4 class="text-center">Introdueix un usuari i contrasenya</h4>
        <br>
        <form id="login" action="./operacions/afegir_alumne.php" method="POST">
            <div class="form-group centerinputs">
                <input id="inUsuari" type="text" class="form-control" placeholder="Usuari" name="nom" autofocus/>
            </div>
            <div class="form-group centerinputs">
                <input id="inContrasenya" type="password" class="form-control" placeholder="Contrasenya" name="contrasenya"/>
            </div><br><br>
            <div class="form-group centerinputs">
                <p>Escull un avatar</p>
            </div>
            <div class="form-group centerinputs">
                <a id="btAvatarNaranja" class="btn btn-white p-0 m-2 shadow" style="border-radius: 50%;"><img src="./img/avatar-naranja.png" style="width: 75px;"></a>
                <a id="btAvatarAzul" class="btn btn-white p-0 m-2 shadow" style="border-radius: 50%;"><img src="./img/avatar-azul.png" style="width: 75px;" ></a>
                <a id="btAvatarAmarillo" class="btn btn-white p-0 m-2 shadow" style="border-radius: 50%;"><img src="./img/avatar-amarillo.png" style="width: 75px;"></a>
                <a id="btAvatarVerde" class="btn btn-white p-0 m-2 shadow" style="border-radius: 50%;"><img src="./img/avatar-verde.png" style="width: 75px;"></a>
                <input id="colorAvatar" type="text" name="avatar" value="naranja" class="d-none">
            </div><br><br>
            <div class="form-group text-center">
                <button id="btlogin" class="btn btn-outline-primary btn-sm" name="btRegistreAlumne">Registrar-se</button>
            </div>
            <br><br>
            <div class="centered">
                <div class="form-group">
                    <a href="index.php" class="ForgetPwd">Ja tens un usuari? Identifica't</a>
                </div>
            </div>
        </form>
    </div>
    
<?php include("includes/footer.php"); ?>

<script type="text/javascript">  
        document.getElementById("btAvatarNaranja").addEventListener("click", function() {
            document.getElementById("colorAvatar").value = "naranja";
        });
        document.getElementById("btAvatarAzul").addEventListener("click", function() {
            document.getElementById("colorAvatar").value = "azul";
        });
        document.getElementById("btAvatarAmarillo").addEventListener("click", function() {
            document.getElementById("colorAvatar").value = "amarillo";
        });
        document.getElementById("btAvatarVerde").addEventListener("click", function() {
            document.getElementById("colorAvatar").value = "verde";
        });
</script>