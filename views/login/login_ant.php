    <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-secondary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Acceder</h4>
            </div>
        </div>  
        <div class="card-body">
            <form role="form" action="?ctrl=CtrlUsuario&accion=validar" class="text-start" method="post">
                <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Clave</label>
                    <input type="password" class="form-control" name="clave">
                </div>
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Recuérdame</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Ingresar</button>
                </div>
                
            </form>
            <p class="mt-4 text-sm text-center">
                
                <a href="#" title="Regístrame"
                    class="text-primary text-gradient font-weight-bold" id="registrarme">
                    Aun no tengo una cuenta
                </a>, 
                <a href="#" title="recuperar contraseña"
                    class="text-info text-gradient font-weight-bold" id="registrarme">
                    Olvidé mi clave
                </a>
            </p>
        </div>

    </div>