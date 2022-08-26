<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>

<!-- Seguir con el añadir y modificar alumne. El añadir reaprovecharlo para esta pantalla y ponerle avatar naranja por defecto con variable o no se -->

<!-- P�?GINA CON TABLA DE ALUMNOS Y OPCIÓN AL LADO DE CADA UNO PARA ELIMINAR O MODIFICAR -->
<!-- PODR�? ACCEDER A ESTA P�?GINA TANTO PROFESORES COMO ADMINISTRADOR -->

    <header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="principalmoderador.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Gestió Professors</h3>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <img id="imatgeusuari2" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>

    <?php if (isset($_SESSION['missatge'])) { ?>
        <div class="container-fluid position-absolute p-0">
            <div class="alert alert-<?= $_SESSION['missatgecolor'] ?> alert-dismissible fade show position-relative" role="alert">
            <?= $_SESSION['missatge'] ?>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php unset($_SESSION['missatge']); unset($_SESSION['missatgecolor']); } ?>

    <div class="container p-4">
    <br><br>
    <div class="row">
        <div class="col-4">
			<div class="card card-body">
                            <form action="operacions/afegir_prof.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Professor name" name="nom" autofocus>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Professor password" name="contrasenya" autofocus>
					</div>
					<button class="btn btn-outline-primary btn-md mt-3">Registrar</button>
				</form>
			</div>
        </div>
        <div class="col-8">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Contrasenya</th>
                <th>Accions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $stmt = $pdo->query("SELECT * FROM moderador");

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo openssl_decrypt($row['contrasenya'], "AES-128-ECB", 'password') ?></td>
                <td>
                <a href="./operacions/editar_prof.php?idModerador=<?php echo $row['idModerador']?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                </a>
                <a href="./operacions/eliminar_prof.php?idModerador=<?php echo $row['idModerador']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    </div>

<?php include("includes/footer.php"); ?>