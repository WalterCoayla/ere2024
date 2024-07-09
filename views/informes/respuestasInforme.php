<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <b>.:: <i class="far fa-file-alt"></i> Criterios:</b>
        </div>
    </div>
    <div class="card">
        <h6 class="card-header">
            <div class="row align-items-center">

                <div class="col-sm-2">
                    <small class="form-text text-muted">Evaluación</small>
                    <select class="form-control form-control-sm" id="evaluaci">
                        <option value="">Selecciona ...</option>
                        <?php foreach ($evaluaciones as $e) : ?>
                        <option value="<?=$e['tabla']; ?>"><?=$e['descripcion'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <small class="form-text text-muted">UGEL</small>
                    <select id="ugel" class="form-control form-control-sm xCombo" data-destino="distrito"
                        data-ctrl="CtrlERE" data-accion="getDistritosXUgel">
                        <option value="">Selecciona ...</option>
                        <?php foreach ($ugeles as $e) : ?>
                        <option value="<?=$e['ugel']; ?>"><?=$e['ugeldescripcion'];?></option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="col-sm-2">
                    <small class="form-text text-muted">Distrito</small>
                    <select id="distrito" class="form-control form-control-sm xCombo" data-destino="ie"
                        data-ctrl="CtrlERE" data-accion="getIesXDistrito">
                        <option value="">Selecciona...</option>

                    </select>
                </div>

                <div class="col-sm-2">
                    <small class="form-text text-muted">I.E.</small>
                    <select id="ie" class="form-control form-control-sm">
                        <option value="">Selecciona...</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <small class="form-text text-muted">Nivel</small>
                    <select id="nivel" class="form-control form-control-sm">
                        <option value="">Selecciona...</option>
                        <option value="PRIMARIA">Primaria</option>
                        <option value="SECUNDARIA">Secundaria</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <small class="form-text text-muted">Area</small>
                    <select id="curso" class="form-control form-control-sm">
                        <option value="">Selecciona...</option>
                        <option value="comlec">Comunicación</option>
                        <option value="ciensoc">Ciencias Sociales</option>
                        <option value="cientec">Ciencia y Tecnología</option>
                        <option value="dpcc">DPCC</option>
                        <option value="mat">Matemática</option>
                        <option value="persoc">Personal Social</option>
                    </select>
                </div>

                <div class="col-sm-2">
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
                        <option value="">Todos</option>
                        <option value="Privada">Privada</option>
                        <option value="Pública">Pública</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <small class="form-text text-muted">Zona</small>
                    <select id="zona" class="form-control form-control-sm">
                        <option value="">Todos</option>
                        <option value="Urbano">Urbano</option>
                        <option value="Rural">Rural</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <small class="form-text text-muted">Seccion</small>
                    <select id="seccion" class="form-control form-control-sm">
                        <option value="">Todos</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <small class="form-text text-muted">Sexo</small>
                    <select id="sexo" class="form-control form-control-sm">
                        <option value="">Todos</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
                <div class="col-sm-2">

                    <button class="btn btn-primary h-100 w-100 enviar" type="button" id="btn">
                        <span class="spinner-border spinner-border-sm cargar" role="status" aria-hidden="true"></span>
                        Procesar
                    </button>

                </div>
            </div>
        </h6>
        <div class="card-body respuestag">
            <div class="row">




            </div>

            <div class="row">
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
</div>