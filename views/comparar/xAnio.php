<div class="container-fluid">
    <div class="card">
        <h6 class="card-header">.:: <i class="far fa-file-alt"></i> COMPARATIVO POR AÑOS O PROCESOS </h6>
        <div class="card-body respuestag">

            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">PRUEBA A</label>
                        <select class="form-control" id="anoa">

                            <option value="">Selecciona ...</option>
                            <?php foreach ($evaluaciones as $e) : ?>
                            <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">PRUEBA B</label>
                        <select class="form-control" id="anob">

                            <option value="">Selecciona ...</option>
                            <?php foreach ($evaluaciones as $e) : ?>
                            <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <small class="form-text text-muted">Unidad de Gestion Educativa</small>
                    <select id="ugel" class="form-control form-control-sm">
                        <option value="">Selecciona ...</option>
                            <?php foreach ($ugeles as $e) : ?>
                            <option value="<?=$e['ugel']; ?>"><?=$e['ugeldescripcion'];?></option>
                            <?php endforeach; ?>

                    </select>
                </div>

                <div class="col-sm-2">
                    <small class="form-text text-muted">Distrito</small>
                    <select id="distrito" class="form-control form-control-sm">
                        <option value="">Distrito...</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <small class="form-text text-muted">I.E.</small>
                    <select id="ie" class="form-control form-control-sm">
                        <option value="">Seleccione...</option>
                    </select>
                </div>
                <div class="col-sm-2">

                    <button class="btn btn-primary enviar" type="button" id="btn">
                        <span class="spinner-border spinner-border-sm cargar" role="status" aria-hidden="true"></span>
                        Procesar
                    </button>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <small class="form-text text-muted">Area</small>
                    <select id="curso" class="form-control form-control-sm">
                        <option value="">Selecciona ...</option>
                            <?php foreach ($areas as $e) : ?>
                            <option value="<?=$e['cod']; ?>"><?=$e['descripcionarea'];?></option>
                            <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-sm-1">
                    <small class="form-text text-muted">Nivel</small>
                    <select id="nivel" class="form-control form-control-sm">
                        <option value="">Nivel...</option>
                        <option value="PRIMARIA">Primaria</option>
                        <option value="SECUNDARIA">Secundaria</option>
                    </select>
                </div>

                <div class="col-sm-1">
                    <small class="form-text text-muted">Grado</small>
                    <select id="grado" class="form-control form-control-sm">
                        <option value="">Seleccione...</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="6">6</option>

                    </select>
                </div>

                <div class="col-sm-1">
                    <small class="form-text text-muted">Gestión</small>
                    <select id="gestion" class="form-control form-control-sm">
                        <option value="">Gestión...</option>
                        <option value="Privada">Privada</option>
                        <option value="Pública">Pública</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <small class="form-text text-muted">Zona</small>
                    <select id="zona" class="form-control form-control-sm">
                        <option value="">Zona...</option>
                        <option value="Urbano">Urbano</option>
                        <option value="Rural">Rural</option>
                    </select>
                </div>


                <div class="col-sm-1">
                    <small class="form-text text-muted">Seccion</small>
                    <select id="seccion" class="form-control form-control-sm">
                        <option value="">Seccion...</option>
                        <?php 
                         $letras = range('A', 'N');
                            // Añadir cada letra como una opción en el select
                        foreach ($letras as $letra) { ?>
                            <option value="<?=$letra ?>"><?=$letra?></option>';
                        <?php } ?>
                        
                    </select>
                </div>

                <div class="col-sm-1">
                    <small class="form-text text-muted">Sexo</small>
                    <select id="sexo" class="form-control form-control-sm">
                        <option value="">Sexo...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
            </div>

            <div class="row" style="display: none;">
                <div class="col-12">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><i class="fas fa-binoculars"></i> Ver :
                    </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Detalle</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" checked>
                        <label class="form-check-label" for="inlineCheckbox2">Consolidado</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3" checked>
                        <label class="form-check-label" for="inlineCheckbox2">Consolidado por Indicadores</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="resultainfa">


    </div>

</div>