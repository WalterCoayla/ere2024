<div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card">
                    <h6 class="card-header">.:: MATRIZ DE CALIFICACIÓN</h6>
                    <div class="card-body respuestag">
                        <div class="row">
                        <div class="col-3">
                                <select class="form-control" name="seleeva" id="seleeva"><br><br>
                                    <option value="">Selecciona ...</option>
                                    <?php foreach ($evaluaciones as $e) : ?>
                                    <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                                    <?php endforeach; ?>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Evaluación</small>
                            </div>
                            <div class="col-2">
                                <select id="nivele" class="form-control">
                                    <option value="">Nivel...</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                </select>
                                <small class="form-text text-muted">Nivel</small>
                            </div>
                            <div class="col-3">
                                   
                                    <select id="cursoe" class="form-control">
                                        <option value="">Selecciona ...</option>
                                       <?php foreach ($areas as $e) : ?>
                                        <option value="<?=$e['cod']; ?>"><?=$e['descripcionarea'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-muted">Area</small>
                                </div>
                       
                            <div class="col-2">
                                <select id="gradoe" class="form-control">
                                    <option value="">Selecciona ...</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="6">6</option>
                                    
                                </select>
                                <small class="form-text text-muted">Grado</small>
                            </div>
                            <div class="col-2">
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