<div class="col-sm-12 col-md-12">
            <div class="card">
                <h6 class="card-header">.:: <i class="fas fa-user-alt"></i> Crear Matriz de Evaluación</h6>
                <div class="card-body respuestafi">
                    <div class="container-fluid">
                        <form id="formulario-matriz" name="formulario-matriz" method=" POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Evaluación</small>
                                    <select class="form-control" name="seleeva" id="seleeva"><br><br>
                                        <option value="">Seleccione Evaluación</option>
                                        <option value="" selected>Selecciona ...</option>
									<?php foreach ($evaluaciones as $e) : ?>
                                    <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Nivel</small>
                                    <select class="form-control" name="selenivel" id="selenivel"><br><br>
                                        <option value="">Seleccione Nivel</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Sedundaria</option>

                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Grado</small>
                                    <select class="form-control" name="selegra" id="selegra"><br><br>
                                        <option value="">Seleccione Grado</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Area</small>
                                    <select class="form-control" name="seleare" id="seleare"><br><br>
                                        <option value="">Selecciona ..</option>
                                        <?php foreach ($areas as $e) : ?>
                                    <option value="<?=$e['cod']; ?>"><?=$e['descripcionarea'];?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <small id="emailHelp" class="form-text text-muted">Competencia</small>
                                    <input type="text" class="form-control" name="competese">
                                </div>
                                <div class="col-md-6">
                                    <small id="emailHelp" class="form-text text-muted">Capacidad</small>
                                    <input type="text" class="form-control" name="capacidas">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <small id="emailHelp" class="form-text text-muted">Desempeño</small>
                                    <input type="text" class="form-control" name="desempa">
                                </div>
                                <div class="col-md-6">
                                    <small id="emailHelp" class="form-text text-muted">Caracterización del ITEM</small>
                                    <input type="text" class="form-control" name="caracteriten">
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Conocimiento</small>
                                    <input type="text" class="form-control" name="conocimient">
                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Item</small>
                                    <input type="text" class="form-control" name="items" id="items">
                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Nivel</small>
                                    <input type="text" class="form-control" name="nivell" id="nivell">
                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Clave</small>
                                    <input type="text" class="form-control" name="clavees" id="clavees">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <center>
                                        <button class="btn btn-primary" type="button" id="btngrabar"
                                            onclick="actualizar_asistenciad()">
                                            <span class="spinner-border spinner-border-sm cargar" role="status"
                                                aria-hidden="true"></span>
                                            Grabar
                                        </button>
                                    </center>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>