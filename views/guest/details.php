<?php

?>
<div class="row">
    <div class="col-lg-6 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-secondary shadow-primary border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <img class="card-img-top" src="./assets/img/products/<?=$c['imagen']?>" alt="imagen" height="170">
                        <!-- <canvas id="chart-bars" class="chart-canvas" height="170"></canvas> -->
                    </div>
                </div>
            </div>      
            <div class="card-body">
                <h6 class="mb-0 "><?=$c['titulo']?></h6>
                <p class="text-sm ">
                    <?=$c['descripcion']?>
                </p>
                <hr class="dark horizontal">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="d-flex">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm"> última actualización: <?=$c['actualizacion']?> </p>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        
                        <a href="?ctrl=CtrlMatricula&accion=matricular&id=<?=$c['id']?>" class="btn btn-primary">
                            Comenzar <?=$c['id']?>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mt-4 mb-4">
        <table class="table">
            <thead>
                <tr>
                   <th>
                    <h3>Contenido</h3>
                   </th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No hay detalles</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
