<?php
$filtro = isset($filtro)?$filtro:'(Todos)';
?>
<div class="row">
    <h3>Cursos encontrados para: 
        <span class="text-danger">

            <?=$filtro?>
        </span>
    </h3>
</div>
<div class="row mt-4">
<?php
if (is_array($cursos)) :

    foreach ($cursos as $c) :
?>
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
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
                    <div class="col-sm-6">
                        
                        <a href="#" class="btn btn-dark detalles" data-id="<?=$c['id']?>" data-page="Detalles" data-titlePage="Detalles">
                            Detalles
                        </a>
                        
                    </div>
                    <div class="col-sm-6">
                        
                        <a href="?ctrl=CtrlMatricula&accion=matricular&id=<?=$c['id']?>" class="btn btn-primary">
                            Comenzar
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    endforeach;
else: ?>
    <h2 class="mb-0">No se encontraron coincidencias</h2>
<?php
endif;
?>

        
</div>

<script type="text/javascript">
$(function(){
    
    $('.detalles').click( function(){ 
        // alert('detalles');
        let obj = $(this);
        let linkNuevo=obj.html();
        let id= obj.data('id');
        let page = obj.data('page');
        //let titlePage = obj.data('titlePage');
        console.log(page)
        
        obj.html('<i class="fa fa-spinner"></i> Cargando...');
        // $('.modal-title-login').html('Login');
        // alert(linkNuevo)
        $.ajax({
            url:'index.php',
            type:'get',
            data:{'accion':'getDetalles','id':id}
        }).done(function(datos){
            obj.html(linkNuevo);
            $('#page').html(page);
            $('#titlePage').html(page);
            // console.log(datos);
            $('#home').html(datos);
            // $('#modalBase').modal('show');
        }).fail(function(){
            obj.html(linkNuevo);
            alert("error");
        }); 
        
    });

});
</script>