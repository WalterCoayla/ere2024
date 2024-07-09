<div class="row">
    <div class="col-sm-12 col-md-12">

        <div class="card">
            <h6 class="card-header">.:: Procesar Evaluación - Total Estudiantes</h6>
            <div class="card-body respuestag">

                <div class="row">
                    <div class="col-sm-2">
                        <select class="form-control" id="evaluacion">
                            <option value="" selected>Selecciona ...</option>
                            <?php foreach ($evaluaciones as $e) : ?>
                            <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-muted">Evaluación</small>
                    </div>

                    <div class="col-sm-2">
                        <select class="form-control" id="nivel">
                            <option value="" selected>Selecciona ...</option>
                            <option value="PRIMARIA">PRIMARIA</option>
                            <option value="SECUNDARIA">SECUNDARIA</option>
                        </select>
                        <small class="form-text text-muted">Nivel</small>
                    </div>

                    <div class="col-sm-2">
                        <button class="btn btn-primary enviar" type="button">
                            <span class="spinner-border spinner-border-sm cargar" role="status" aria-hidden="true"></span>

                            Procesar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>