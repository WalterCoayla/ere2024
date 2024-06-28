<div class="col-sm-12 col-md-12">
    <div class="card">
        <h6 class="card-header">.:: <i class="fas fa-user-alt"></i> IMPORTAR DATOS</h6>
        <div class="card-body respuestagp">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <input type="hidden" id="d">
                                    <select class="form-control" id="evaluacioninporta">

                                        <option value="">Seleccione Evaluación</option>
                                        <?php foreach ($evaluaciones as $e) :?>

                                        <option value="<?=$e['tabla']; ?>">
                                            <?=$e['descripcion'];?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <br>


                                    <input type="file" id="my_file_input" class="form-control-file" />
                                    <div id="imgImport">

                                        <a href="PLANTILLA.xls">
                                            <h6><i class="far fa-file-excel"></i> Descargar Plantilla en Excel</h6>
                                        </a>

                                    </div>

                                    <div class="table table-responsive">
                                        <table id='my_file_output' 
                                            class="table table-bordered table-condensed table-striped">
                                        </table>
                                    </div>
                                    <button id="btn_lectura" class="btn btn-primary">Registrar Datos</button>

                                    <p id="respuesta">

                                    </p>
                                    <p id="contador">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>
</div>