<div class="col-sm-12 col-md-12">
            <div class="card">
                <h6 class="card-header">.:: <i class="fas fa-user-alt"></i> Crear Cuadernillo</h6>
                <div class="card-body respuestafi">
                    <div class="container-fluid">
                        <form id="formulario-cuadernillo" name="formulario-cuadernillo" method=" POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Evaluación</small>
                                    <select class="form-control" name="seleeva" id="seleeva"><br><br>
                                        
                                        <option value="" selected>Selecciona ...</option>
                                        <?php foreach ($evaluaciones as $e) : ?>
                                        <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Nivel</small>
                                    <select class="form-control" name="selenivel" id="selenivel"><br><br>
                                        <option value="">Selecciona ...</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Sedundaria</option>

                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <small id="emailHelp" class="form-text text-muted">Grado</small>
                                    <select class="form-control" name="selegra" id="selegra"><br><br>
                                        <option value="">Selecciona ...</option>
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
                                        <option value="">Selecciona ...</option>
                                        
                                        <?php foreach ($areas as $e) : ?>
                                        <option value="<?=$e['cod']; ?>"><?=$e['descripcionarea'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    
                                        <button class="btn btn-primary" type="button" id="btngrabar">
                                            <span class="spinner-border spinner-border-sm cargar" role="status"
                                                aria-hidden="true"></span>
                                            Grabar
                                        </button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>