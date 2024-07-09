<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card col-md-6 mx-auto">
            <h6 class="card-header">.:: Nivel de Logro</h6>
            <div class="card-body respuestag">
                <div class="row">
                    <div class="col-8">
                        <select class="form-control" name="seleeva" id="seleeva"><br><br>
                            <option value="">Selecciona ...</option>
                                    <?php foreach ($evaluaciones as $e) : ?>
                                    <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                                    <?php endforeach; ?>
                        </select>
                        <small class="form-text text-muted">Evaluación</small>
                    </div>

                    <div class="col-4">
                        <button class="btn btn-primary enviard" type="button">
                            <span class="spinner-border spinner-border-sm cargar" role="status"
                                aria-hidden="true"></span>
                            Procesar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>