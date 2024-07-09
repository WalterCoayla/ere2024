<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-sm-12 col-md-12">

            <div class="card">
                <h6 class="card-header">.:: <i class="fas fa-database"></i> ASISTENCIA A EVALUACIÓN </h6>
                <div class="card-body">

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control" id="evaluaci">
                                    <option value="" selected>Selecciona ...</option>
									<?php foreach ($evaluaciones as $e) : ?>
                                    <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-muted">Evaluación</small>
                            </div>
                        </div>
                        <div class="col-4">

                            <button class="btn btn-primary " type="button" id="btn">
                                <span class="spinner-border spinner-border-sm cargar" role="status"
                                    aria-hidden="true"></span>
                                Procesar
                            </button>

                        </div>
                    </div>

                </div>
            </div>
            <br>

            <div id="respuesta">

            </div>
        </div>
    </div>
</div>