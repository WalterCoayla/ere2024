<nav class="navbar navbar-dark navbar-expand-lg"
    style="background-color: #126dc7; box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%)">
    <a class="navbar-brand" href="#">
        <img src="./assets/img/logos/logoDRE_negro_sombra.png"  height="30" class="d-inline-block align-top"
            alt="">
        .:: DREMO ::.
    </a>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-menu" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active letramenu">
                <a class="nav-link" href="?"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <?php if ($_SESSION['descripcionTipo'] == 'Administrador') : ?>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-cog"></i> Evaluación
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item xLink" href="#" data-ctrl="CtrlEvaluacion"
                            data-accion="crearEvaluacion">
                            <i class="fab fa-creative-commons-share"></i>
                            Crear Evaluación</a>
                        <a class="dropdown-item xLink" href="#" data-ctrl="CtrlEvaluacion"
                            data-accion="vistaEvaluacion">
                            <i class="fas fa-binoculars"></i> Vista
                            Evaluaciones</a>
                        <a class="dropdown-item xLink" href="#" id="importardatos" data-ctrl="CtrlEvaluacion"
                            data-accion="importarEvaluacion">
                            <i class="fas fa-cloud-upload-alt"></i>
                            Importar Datos</a>

                        <a class="dropdown-item xLink" href="#" id="asistencia">
                            <i class="fas fa-database"></i> Datos</a>
                        <a class="dropdown-item xLink" href="#" id="procesarevaluacion">
                            <i class="fas fa-cogs"></i>
                            Consolidado de Registros</a>
                        <a class="dropdown-item xLink" href="#" id="procesarconsolidado">
                            <i class="fas fa-cogs"></i>
                            Consolidados por Areas</a>
                        <a class="dropdown-item xLink" href="#" id="totales">
                            <i class="fas fa-cogs"></i> % de Areas</a>
                        <a class="dropdown-item xLink" href="#" id="calculoarea"><i class="fas fa-cogs"></i> Total
                            Estudiantes</a>
                    </ul>
                </div>
            </li>

            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-cog"></i> Cuadernillo
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" id="crearcuadernillo"><i
                                class="fab fa-creative-commons-share"></i> Crear Cuadernillo</a>
                        <a class="dropdown-item" href="#" id="listadocuadernillo"><i
                                class="fas fa-cloud-upload-alt"></i> Consulta Cuadernillo</a>
                    </ul>
                </div>

            </li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user"></i> Usuarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item xLink" href="#" data-ctrl="CtrlUsuario" data-accion="vistaUsuario">
                            <i class="fas fa-user-alt"></i>
                            Registro</a>
                        <a class="dropdown-item xLink" href="#" data-ctrl="CtrlUsuario" data-accion="vistaUsuario">
                            <i class="fas fa-clipboard-list"></i>
                            Información</a>
                        <a class="dropdown-item xLink" href="#" data-ctrl="CtrlUsuario" data-accion="vistaUsuario">
                            <i class="fas fa-users"></i> Vista Usuarios</a>

                    </div>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-bezier-curve"></i> Matriz
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="crearmatriz"><i class="fas fa-bezier-curve"></i> Crear
                            Matriz</a>
                        <a class="dropdown-item" href="#" id="informacionm"><i class="fas fa-binoculars"></i> Ver</a>
                        <a class="dropdown-item" href="#" id="listadomatriz"><i class="fas fa-list-ol"></i> Listado</a>
                    </div>
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-clipboard-list"></i> Logro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="crearindicador"><i class="fas fa-clipboard-list"></i>
                            Crear
                            Indicador</a>
                        <a class="dropdown-item" href="#" id="listadologro"><i class="fas fa-list-ol"></i> Listado</a>

                    </div>
            </li>
            <?php endif; ?>
            <?php if ($_SESSION['descripcionTipo'] == 'Administrador' or $_SESSION['descripcionTipo'] == 'DREMO' or $_SESSION['descripcionTipo'] == 'UGEL') : ?>
            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="far fa-address-book"></i> Informes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="informacionp"><i class="far fa-file-alt"></i>
                            Respuestas</a>
                        <a class="dropdown-item" href="#" id="informacionies"><i class="fas fa-clipboard-check"></i>
                            I.E.</a>
                        <a class="dropdown-item" href="#" id="informacionidis"><i class="fas fa-map-marked-alt"></i>
                            Distritos</a>
                    </div>
            </li>

            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle letramenu" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-not-equal"></i> Comparar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="comparar"><i class="far fa-calendar-alt"></i> Por Año</a>
                        <a class="dropdown-item" href="#" id="compararperiodo"><i class="fas fa-cogs"></i> Por
                            Evaluación</a>
                    </div>
            </li>
            <?php endif ; ?>
            <li class="nav-item dropdown">
            </li>
        </ul>
        <div class="dropdown text-usuario">
            <button class="btn btn-outline-light dropdown-toggle letramenub" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="fas fa-user"></i> <?=$_SESSION['fullName']; ?>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item cambiarclave" href="#" data-target='#exampleModal'>Contraseña</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Salir</a>
                </li>
            </ul>
        </div>


    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CERRAR SESIÓN </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                    <a href="?ctrl=CtrlUsuario&accion=cerrarSesion"><i class="fas fa-door-open fa-7x"></i></a>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="cambiarclave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modeldi">
                    <h5 class="modal-title col-12">
                        Cambiar Contraseña
                    </h5>
                </div>
                <div id="respuestaerrgclave">
                    <form name="formulario-clavenueva" id="formulario-clavenueva" enctype="multipart/form-data"
                        method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="claveanterior">Contraseña Anterior:</label>
                                <input type="password" class="form-control" id="claveanterior" name="claveanterior">
                            </div>
                            <div class="form-group">
                                <label for="nuactuclave">Nueva Contraseña:</label>
                                <input type="password" class="form-control" id="nuactuclave" name="nuactuclave">
                            </div>
                            <div class="form-group">
                                <label for="renuactuclave">Repita Nueva Contraseña:</label>
                                <input type="password" class="form-control" id="renuactuclave" name="renuactuclave">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="enviar"
                                onclick="actualizar_clave()">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</nav>