<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
<header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="principalmoderador.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Gestió Activitats</h3>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <img id="imatgeusuari2" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>
    
    <div class="container">
        <br><br><br>
        <div class="searchContainer">
            <i class="fa fa-search searchIcon" style="width: 40px; height: 40px;"></i>
            <input class="searchBox" type="search" name="search" placeholder="Cerca una activitat...">
        </div>
        <br><br>
        <div class="card p-2" style="width: 40%; margin: auto; border: 1px solid #037AFF;">
            <div>
                <a href="#" class="btn shadow-none p-0"><img src="../img/cancelar.png" style="width: 30px;"></a>
                <a href="#" class="btn shadow-none p-0"><img src="../img/editar.png" style="width: 30px;"></a>
                <a href="#" class="btn shadow-none p-0"><img src="../img/play.png" style="width: 30px;"></a>
            </div><br>
            <div>
                <p class="d-inline" style="color: #037AFF">Nom activitat</p><br>
                <p class="d-inline" style="color: #037AFF">Nº Preguntes</p>
            </div>
            <br>
        </div>
    </div>
    
<?php include("includes/footer.php"); ?>