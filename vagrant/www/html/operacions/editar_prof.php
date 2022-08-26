<?php include("../includes/pdo.php"); ?>

<?php include("../includes/header.php"); ?>

<header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="principalmoderador.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Modificar Professors</h3>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <img id="imatgeusuari2" src="../img/usuari2.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>

<?php
$idModerador = $_GET['idModerador'];
echo $_GET['idModerador'];
if  (isset($_GET['idModerador'])) {

  $result = $pdo->query("SELECT * FROM moderador WHERE idModerador=$idModerador");

    $row = $result->fetch(PDO::FETCH_ASSOC);
    $nom = $row['nom'];
    $contrasenya = openssl_decrypt($row['contrasenya'], "AES-128-ECB", 'password');
  
}

if (isset($_POST['update'])) {
  $idModerador = $_GET['idModerador'];
  $nom= $_POST['nom'];
  $contrasenya = openssl_encrypt($_POST['contrasenya'], "AES-128-ECB", 'password');
  
    $query = $pdo->query("UPDATE moderador set nom = '$nom', contrasenya = '$contrasenya' WHERE idModerador=$idModerador");

    $rows = $query->fetch(PDO::FETCH_ASSOC);
  echo $contrasenya;
  if (mysqli_query($pdo, $rows)) {
        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';
  }
  else {
      printf("error: %s\n",mysqli_error($pdo));
  }
  
  header('Location: ../gestioprofessors.php');
}

?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar_prof.php?idModerador=<?php echo $_GET['idModerador']; ?>" method="POST">
        <div class="form-group">
            <input name="nom" type="text" class="form-control" value="<?php echo $nom; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
            <input name="contrasenya" type="text" class="form-control" value="<?php echo $contrasenya; ?>" placeholder="Update Password">
        </div>
        <button class="btn btn-outline-primary btn-md mt-3" name="update">
          Update
        </button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>