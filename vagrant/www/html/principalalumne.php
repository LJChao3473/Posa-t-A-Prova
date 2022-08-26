<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="index.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Login Activitat</h3>
            </div>
            <div class="col-4">
            </div>
        </div>    
    </header>

    <div class="container">
        <br><br><br>
        <h4 class="text-center">Introdueix el teu codi de sessió</h4><br>
        <img id="imatgeusuari1" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png"><br>
        <h4 id="nomalumne" class="fw-bold text-center"><?= $_SESSION['nom'] ?></h4><br><br>
        <form class="text-center">
            <div class="form-group codi">
                <input id="inCodi" type="text" class="form-control" placeholder="Codi de sessió"/>
            </div>
            <div id="btAcceptarCodi" class="form-group">
                <a href="#" class="ForgetPwd">Acceptar</a>
            </div>
        </form>
    </div>
    
<?php include("includes/footer.php"); ?>