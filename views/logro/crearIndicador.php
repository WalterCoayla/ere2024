<div class="row">
    <div class="col-sm-12 col-md-12">

        <div class="card">
            <h6 class="card-header">.:: NIVEL DE LOGRO</h6>
            <div class="card-body respuestagda">
                <form name="formulario-logro" id="formulario-logro" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-3">
                            <select class="form-control" name="seleeva" id="seleeva"><br><br>
                                
                                <option value="">Selecciona ...</option>
                                    <?php foreach ($evaluaciones as $e) : ?>
                                    <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                                    <?php endforeach; ?>
                            </select>
                            <small class="form-text text-muted">Evaluación</small>
                        </div>
                        <div class="col-2">
                            <select id="nivele" name="nivele" class="form-control">
                                <option value="">Nivel...</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                            </select>
                            <small class="form-text text-muted">Nivel</small>
                        </div>


                        <div class="col-3">

                            <select id="cursoe" class="form-control" name="cursoe">
                                <option value="">Selecciona ...</option>
                                    <?php foreach ($areas as $e) : ?>
                                    <option value="<?=$e['cod']; ?>"><?=$e['descripcionarea'];?></option>
                                    <?php endforeach; ?>
                                
                            </select>
                            <small class="form-text text-muted">Area</small>
                        </div>

                        <div class="col-2">
                            <select id="gradoe" class="form-control" name="gradoe">
                                <option value="">Grado...</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                            </select>
                            <small class="form-text text-muted">Grado</small>
                        </div>
                        <div class="col-2">
                            <select id="gradoe" class="form-control" name="calnivel">

                                <option value="0">NO</option>
                                <option value="1">SI</option>

                            </select>
                            <small class="form-text text-muted">Calificar por Nivel</small>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-2">
                            <input type="text" class="form-control" name="inia">
                            <small class="form-text text-muted">Inicial 1</small>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" name="fina">
                            <small class="form-text text-muted">Final 1</small>
                        </div>
                        <div class="col-2">
                            <select class="form-control" name="resa">
                                <option value="">Seleccion</option>
                                <option value="Previo Inicio">Previo Inicio</option>
                                <option value="Inicio">Inicio</option>
                                <option value="Proceso">Proceso</option>
                                <option value="Satisfactorio">Satisfactorio</option>
                            </select>
                            <small class="form-text text-muted">Logro 1</small>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" name="inib">
                            <small class="form-text text-muted">Inicial 2</small>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" name="finb">
                            <small class="form-text text-muted">Final 2</small>
                        </div>
                        <div class="col-2">
                            <select class="form-control" name="resb">
                                <option value="">Seleccion</option>
                                <option value="Previo Inicio">Previo Inicio</option>
                                <option value="Inicio">Inicio</option>
                                <option value="Proceso">Proceso</option>
                                <option value="Satisfactorio">Satisfactorio</option>
                            </select>
                            <small class="form-text text-muted">Logro 2</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <input type="text" class="form-control" name="inic">
                            <small class="form-text text-muted">Inicial 3</small>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" name="finc">
                            <small class="form-text text-muted">Final 3</small>
                        </div>
                        <div class="col-2">
                            <select class="form-control" name="resc">
                                <option value="">Seleccion</option>
                                <option value="Previo Inicio">Previo Inicio</option>
                                <option value="Inicio">Inicio</option>
                                <option value="Proceso">Proceso</option>
                                <option value="Satisfactorio">Satisfactorio</option>
                            </select>
                            <small class="form-text text-muted">Logro 3</small>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" name="inid">
                            <small class="form-text text-muted">Inicial 4</small>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" name="find">
                            <small class="form-text text-muted">Final 4</small>
                        </div>
                        <div class="col-2">
                            <select class="form-control" name="resd">
                                <option value="">Seleccion</option>
                                <option value="Previo Inicio">Previo Inicio</option>
                                <option value="Inicio">Inicio</option>
                                <option value="Proceso">Proceso</option>
                                <option value="Satisfactorio">Satisfactorio</option>
                            </select>
                            <small class="form-text text-muted">Logro 4</small>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <center>
                                <button type="button" class="btn btn-primary"
                                    onclick="gruardar_logro()">Guardar</button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>