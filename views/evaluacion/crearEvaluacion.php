
    <div class="card col-sm-6 mx-auto">
        <h6 class="card-header">.:: <i class="fas fa-cogs"></i> CREAR EVALUACIÓN</h6>
        <div class="card-body respuestagp">
            <form action="#" id="frmEvaluacion" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="sut"><i class="fas fa-caret-right"></i> Nombre</label><br>
                        <input required type="text" class="form-control" name="nombre" id="nombre"
                            style="text-align: center;"><br>
                        <label class="sut"><i class="fas fa-caret-right"></i> Descripción</label><br>
                        <input required type="text" class="form-control" name="descripcion" id="descripcion"
                            style="text-align: center;"><br>
                        <button class="btn btn-primary mx-auto d-block" type="submit" id="btn">
                            <span class="spinner-border spinner-border-sm cargar" role="status" aria-hidden="true"></span>
                            <span>Crear Evaluación</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


<script>
    $('#btn').click(function() {
        $(this).attr('disabled', true);
        var dataForm = new FormData($("#frmEvaluacion")[0]);
        
        $.ajax({
                url: '?ctrl=CtrlEvaluacion&accion=guardarEvaluacion',
                type: 'POST',
                data: dataForm,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.spinner-border').removeClass("cargar");
                }
            })
            .done(function(res) {
                $('.respuestagp').html(res);
                $('.spinner-border').addClass("cargar");
            })
            .fail(function(data) {
                alert("error procesando información del formulario");
            })
            .always(function() {
                $(this).attr('disabled', true);
                $('.spinner-border').addClass("cargar");
            });
    });
    </script>