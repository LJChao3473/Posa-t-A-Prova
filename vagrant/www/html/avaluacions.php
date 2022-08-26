<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="principalalumne.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Avaluació Activitats</h3>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <img id="imatgeusuari2" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>
    
    <div class="container">
        <br><br><br>
        <table class="table table-bordered">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <?php
                $stmt = $pdo->query("SELECT idAlumne, nom, contrasenya FROM alumne");

                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <h5 class="card-title">Card title</h5><hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <?php } ?>
            </div>
        </div>
    </div>
    
<?php include("includes/footer.php"); ?>