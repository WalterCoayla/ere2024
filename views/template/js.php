<script type="text/javascript">
$(function(){
    $.ajax({
            url:'?ctrl=CtrlPrincipal',
            type:'get'
            
        }).done(function(datos){
            $('#menu').html(datos.menu);
            $('#home').html(datos['contenido']);
            /* $('#modalBase').modal('show'); */
        }).fail(function(){
            /* obj.html(linkNuevo); */
            alert("error");
        }); 

    
});
</script>