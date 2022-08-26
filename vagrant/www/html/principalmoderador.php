<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="index.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Opcions</h3>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <img id="imatgeusuari2" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>
    
    <div id="container">
        <br><br><br>
        <div class="text-center">
            <a href="llistaactivitats.php" class="btn btn-outline-primary btn-md" style="width: 175px">Activitats</a><br><br>
            <a href="crearactivitats.php" class="btn btn-outline-primary btn-md" style="width: 175px">Nova activitat</a><br><br>
            <a href="gestioalumnes.php"><button class="btn btn-outline-primary btn-md" style="width: 175px">Gestió alumnes</button></a><br><br>
            <a href="gestioprofessors.php"><button class="btn btn-outline-primary btn-md" style="width: 175px">Gestió professors</button></a>
        </div>
    </div>
    
<?php include("includes/footer.php"); ?>