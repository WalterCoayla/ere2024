<div class="row">
    <div class="col-sm-12 col-md-12 resultainte">

        <div class="card col-md-6 mx-auto">
            <h6 class="card-header">.:: LISTADO DE CUADERNILLOS</h6>
            <div class="card-body respuestag">

                <div class="row">


                    <div class="col-8">
                        <small id="emailHelp" class="form-text text-muted">Evaluación</small>
                        <select class="form-control" name="seleeva" id="seleevac"><br><br>
                            <option value="" selected>Selecciona ...</option>
                            <?php foreach ($evaluaciones as $e) : ?>
                            <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-4">
                        <button class="btn btn-primary enviardc" type="button">
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