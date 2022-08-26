<?php include("./includes/pdo.php"); ?>

<?php include("./includes/header.php"); ?>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-start">
                <a class="btn shadow-none p-0" href="principalmoderador.php"><i class="fas fa-angle-left"></i></a>
            </div>
            <div class="col-4">
                <h3>Crear Activitat</h3>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <img id="imatgeusuari2" src="./img/avatar-<?= $_SESSION['avatar'] ?>.png" style="width: 40px; height: 40px;">
            </div>
        </div>    
    </header>

    <div class="container">
        <form>
            <br><br><br>
            <div class="form-group centered">
                <input id="nomactivitat" type="text" class="form-control" placeholder="Nom activitat" name="nomactivitat"/>
            </div><br>
            <div class="form-group">
                <div class="text-center">
                    <input class="form-check-input" type="checkbox" value="" id="checktemporitzador" name="tempoactiu" checked>
                    <label class="form-check-label" for="flexCheckDefault">Temporitzador</label>
                </div>
            </div>
            <div class="form-group centered">
                <input id="temps" type="time" class="form-control" name="temps"/>
            </div>
            <br>
            
            <!--<div id="tabla" class="form-group centered card">-->
            <div id="tabla">
                <table class="table card-table table-borderless" style="border: 1px solid #037AFF;">
                    <p>Pregunta 1</p>
                    <tbody name="1">
                        <tr>
                            <td colspan="2">
                                <button name="eliminar" type="button">Eliminar</button>
                                <input id="pregunta" type="text" class="form-control" placeholder="Pregunta"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <select class="form-select" name="tipuspregunta">
                                    <option value="simple" selected="selected">Resposta Simple</option>
                                    <option value="llarga">Resposta Llarga</option>
                                    <option value="seleccio">Resposta Seleccio</option>
                                    <option value="seleccioSimple">Resposta Seleccio Simple</option>
                                    <option value="seleccioMultiple">Resposta Seleccio Multiple</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <input id="resposta1" type="text" class="form-control" placeholder="Resposta 1" name="resposta1"/>
                                <label class="form-check-label" for="flexCheckDefault">Correcte</label>
                                <input class="form-check-input" type="checkbox" value="" id="checkr1" checked>
                            </td>
                            <td colspan="1">
                                <input id="resposta2" type="text" class="form-control" placeholder="Resposta 2" name="resposta2"/>
                                <label class="form-check-label" for="flexCheckDefault">Correcte</label>
                                <input class="form-check-input" type="checkbox" value="" id="checkr2" checked>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <input id="resposta3" type="text" class="form-control" placeholder="Resposta 3" name="resposta3"/>
                                <label class="form-check-label" for="flexCheckDefault">Correcte</label>
                                <input class="form-check-input" type="checkbox" value="" id="checkr3" checked>
                            </td>
                            <td colspan="1">
                                <input id="resposta4" type="text" class="form-control" placeholder="Resposta 4" name="resposta4"/>
                                <label class="form-check-label" for="flexCheckDefault">Correcte</label>
                                <input class="form-check-input" type="checkbox" value="" id="checkr4" checked>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="form-group centered">
                <button id="btNovaPregunta" type="button" class="btn btn-outline-primary btn-sm m-2">Nova pregunta</button>
                <button id="btGuardar" type="submit" class="btn btn-outline-primary btn-sm m-2">Guardar canvis</button>
            </div>
        </form>
    </div>
    
    <script type="text/javascript" src="js/crearactivitats.js"></script>

<?php include("includes/footer.php"); ?>