<div class="col-sm-12 col-md-12">
    <div class="card">
        <h6 class="card-header">.:: <i class="fas fa-binoculars"></i> VISTA DE EVALUACIONES</h6>
        <div class="card-body respuestagp">
            <div class="form-row">
                <div class="form-group col-md-12">

                    <table class="table table-sm table-bordered  table-striped table-hover ">
                        <thead class="tablatitulo">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">FECHA DE CREACIÓN</th>
                                <th scope="col">DATOS</th>
                                <th scope="col">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody class="tablacontenido">
                            <?php
                            $i = 0;
                            foreach ($evaluaciones as $e): 
                            $i++;
                            ?>
                            <tr>
                                <td>
                                    <?=$i?>
                                </td>
                                <td>
                                    <?=$e['descripcion']?>
                                </td>
                                <td>
                                    <?=$e['comentario']?>
                                </td>
                                <td class="text-center">
                                    <?=$e['fecha']?>
                                </td>
                                <td  class="text-center">
                                    <?=$e['total']?>
                                </td>
                                <td>
                                <button type='button' title='Visible' class='btn btn-light-danger btn-sm visible'>
                                    <?=($e['visible'])?"<i class='far fa-eye blue'></i>":"<i class='far fa-eye-slash rojo'></i>"?>
                                </button>
                                    <button type='button' title='Cerrar' class='btn btn-light-danger btn-sm estadoc'>
                                    <?=($e['estado'])?"<i class='fas fa-lock-open blue'></i>":"<i class='fas fa-lock rojo'></i>"?>
                                </button>

                                    <button type='button' title='Editar' class='btn btn-light-danger btn-sm editar'>
                                    <i class='fas fa-edit'></i>
                                </button>

                                    <button type='button' title='Eliminar' class='btn btn-light-danger btn-sm eliminarnew'>
                                    <i class='fas fa-trash-alt'>Eliminar</i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>