<!-- Las respuestas se ocultaran dependiendo del tipo de pregunta que se ha elegido. O sea que algunos se ocultan y otros no -->

<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
		
	<header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-between">
                <a class="btn shadow-none p-0" href="principalalumne.php"><i class="fas fa-angle-left"></i></a>
				<a id="btAnteriorP" href="#" class="btn shadow-none"><i class="fas fa-caret-left" style="color: white; width: 40px; height: 40px;"></i></a>
            </div>
            <div class="col-4 p-0">
				<h3>Pregunta nº <span id="vActual">1</span>/<span id="vMax">25</span></h3>
            </div>
            <div class="col-4 d-flex justify-content-between">
				<a id="btSiguienteP" href="#" class="btn shadow-none"><i class="fas fa-caret-right" style="color: white; width: 40px; height: 40px;"></i></a>
				<img id="imatgeusuari2" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>
		
	<div id="container">
		<form>
			<br>
			<h4 id="enunciat" class="text-center fw-bold">Pregunta?</h4>
			<br>
			<!-- Resposta Simple -->
			<div id="pSimple" class="form-group">
				<input id="inRespSimple" type="text" class="form-control" placeholder="La teva resposta..."/>
			</div>
			
			<!-- Resposta Llarga -->
			<div id="pLlarga" class="form-group">
				<textarea id="inRespLlarga" type="text" class="form-control" placeholder="La teva resposta..."></textarea>
			</div>
				<br>
			<!-- Resposta Seleccio -->
			<div id="pSeleccio" class="form-group text-center">
				<a class="btn p-1" id="psr1" value = false>Resposta 1</a>
				<a class="btn p-1" id="psr2" value = false>Resposta 2</a>
				<br>
				<a class="btn p-1" id="psr3" value = false>Resposta 3</a>
				<a class="btn p-1" id="psr4" value = false>Resposta 4</a>
			</div>
				
			<!-- Resposta Seleccio Multiple -->
			<div id="pSeleccionMultiple" class="form-group d-flex justify-content-center">
				<div class="text-left">
					<input id="psm1" type="checkbox"/><label id="psmr1" class="form-check-label labelr" for="flexCheckDefault">Resposta 1</label><br>
					<input id="psm2" type="checkbox"/><label id="psmr2" class="form-check-label labelr" for="flexCheckDefault">Resposta 2</label><br>
					<input id="psm3" type="checkbox"/><label id="psmr3" class="form-check-label labelr" for="flexCheckDefault">Resposta 3</label><br>
					<input id="psm4" type="checkbox"/><label id="psmr4" class="form-check-label labelr" for="flexCheckDefault">Resposta 4</label><br>
				</div>
			</div>
			<br><br><br>
			<div class="form-group centered">
				<button id="btFinalitzar" class="btn btn-outline-primary btn-sm centered">Finalitzar activitat</button>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="js/preguntes.js"></script>

<?php include("includes/footer.php"); ?>