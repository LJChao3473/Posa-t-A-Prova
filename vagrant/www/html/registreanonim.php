<!-- SE HARÁ UN REGISTRO IGUAL QUE EL DE LOS ALUMNOS NORMALES PERO SIN CONTRASEÑA -->
<!-- DE LOS ANONIMOS SE GUARDARAN LAS NOTAS SOLO PARA EL MOMENTO DE MOSTRARLAS Y LUEGO SE BORRARAN LAS NOTAS Y USUARIOS ANONIMOS -->
<!-- LOS USUARIOS ANONIMOS EXISTIRAN EN LA BASE DE DATOS MIENTRAS SE HACE LA ACTIVIDAD, AL ACABAR LA ACTIVIDAD Y MOSTRARLES SUS NOTAS SE BORRAN 
TODOS LOS USUARIOS SIN CONTRASEÑA DE LA BASE DE DATOS -->

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
        <h4 class="text-center">Introdueix el teu nom d'usuari</h4>
        <br>
        <form id="login" action="./operacions/afegir_anonim.php" method="POST">
            <div class="form-group centerinputs">
                <input id="inUsuari" type="text" class="form-control" placeholder="Usuari" name="nom" autofocus/>
            </div>
            <br><br>
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
                <button id="btlogin" class="btn btn-outline-primary btn-sm" name="btRegistreAnonim">Iniciar sessió</button>
            </div>
            <br><br>
            <div class="centered">
                <div class="form-group">
                    <a href="index.php" class="ForgetPwd">Cancel·lar</a>
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