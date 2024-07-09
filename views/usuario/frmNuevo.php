<div class="col-sm-12 col-md-12">
    <div class="card">
        <h6 class="card-header">.:: <i class="fas fa-user-alt"></i> REGISTRO DE PERSONAL</h6>
        <div class="card-body respuestagp">

            <form id="formularioperso" method="POST">

                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="sut">DNI : </label>
                        <input type="text" class="form-control" id="dni" name="dni">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="sut">NOMBRES</label>
                        <input type="text" class="form-control" id="nombre" name="nombres">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="sut">APELLIDOS PATERNO</label>
                        <input type="text" class="form-control" id="apellidopat" name="apellidospat">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="sut">APELLIDOS MATERNO</label>
                        <input type="text" class="form-control" id="apellidomat" name="apellidosmat">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="sut">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sut">Nro Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="sut">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="inputCity" name="fechanacimiento">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="sut">Sexo</label>
                        <select id="inputState" class="form-control" name="sexo">
                            <option value="">Selecciona ...</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <br>
                    <button class="btn btn-primary text-center" type="button">
                        <span class="spinner-border spinner-border-sm cargar" role="status" aria-hidden="true"></span>
                        Registrar Usuario
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>