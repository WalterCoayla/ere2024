<div class="row">
    <div class="col-lg-6">
        <img src="./assets/img/BANER2024.png" alt="Banner" width="80%">
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-9">
                <h3 class="text-center">Evaluación Regional de Estudiantes <br> 2024</h3>
            </div>
            <div class="col-lg-3">

                <p class="text-center">

                    <img width="80%" src="./assets/img/logoERE.png" alt="" class="img-center">
                </p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header bg-info text-center">
                <h4>Acceder</h4>
            </div>

            <div class="card-body">
                <form role="form" action="#" method="post" id="frmLogin"
                        data-ctrl="CtrlUsuario"
                        data-accion="validar" data-formulario="frmLogin"
                        data-home="home"
                        >
                        <!-- <form action="?ctrl=CtrlUsuario&accion=validar" method="post"> -->
                    <div class="mb-3 row">
                        <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="clave" class="col-sm-2 col-form-label">Clave</label>
                        <div class="col-sm-10">
                            <input required type="password" class="form-control" id="clave" name="clave">
                        </div>
                    </div>

                    
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                        <label class="form-check-label mb-0 ms-3" for="rememberMe">Recuérdame</label>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <button type="submit" 
                        class="btn btn-outline-info xLinkForm"
                        data-ctrl="CtrlUsuario"
                        data-accion="validar" data-formulario="frmLogin"
                        data-home="home"
                        >
                            <span class="spinner-border spinner-border-sm cargar" role="status" aria-hidden="true"></span>
                            Ingresar
                        </button>
                    </div>

                </form>
                <p class="mt-4 text-sm text-center">

                    <a href="#" title="Regístrame" class="text-primary text-gradient font-weight-bold" id="registrarme">
                        Aun no tengo una cuenta
                    </a>,
                    <a href="#" title="recuperar contraseña" class="text-info text-gradient font-weight-bold"
                        id="registrarme">
                        Olvidé mi clave
                    </a>
                </p>
            </div>

        </div>
    </div>
</div>