$(function(){
    
     $(".loader").fadeOut("fast", function() {
        
        // Muestra el contenido
        $("#content").fadeIn("fast");
    });

     $(document).on('click', '.xLink', function() {
        let obj = $(this);
        let ctrl = obj.data('ctrl');
        let accion = obj.data('accion');
        /* alert('ctrl: ' + ctrl +'\n'+ 'accion: '+ accion); */
        console.log('ctrl'+ctrl)
        console.log('accion'+accion)
        $.ajax({
            url:'?ctrl='+ctrl+'&accion='+accion,
            type:'POST',
            /* data:{'accion':'getCatalogo','txt':txt} */
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.loader').show();
            }
        }).done(function(datos){
            $('.loader').hide();
           /*  $('#page').html (page);
            $('#titlePage').html (page); */
            /* obj.html(linkNuevo); */
            // console.log(datos);
            $('#home').html(datos);
            // $('#modalBase').modal('show');
        }).fail(function(){
            /* obj.html(linkNuevo); */
            alert("error");
        }).always(function() {}); 


     });

      $("#frmLogin").on("submit", function(event) {
        event.preventDefault();
        let obj = $(this);
        let ctrl = obj.data('ctrl');
        let accion = obj.data('accion');
        let formulario = "#" + obj.data('formulario');
        let home = "#"+obj.data('home');
        var dataForm = new FormData($(formulario)[0]);
        /* alert('ctrl: ' + ctrl +'\n'+ 'accion: '+ accion); */

        console.log('ctrl: '+ctrl)
        console.log('accion: '+accion)
        console.log('Formulario: '+dataForm)
        console.log('home : '+home)
        
        $.ajax({
            url:'?ctrl='+ctrl+'&accion='+accion,
            type:'POST',
            data: dataForm,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.loader').show();
                $('.spinner-border').removeClass("cargar");
                /* $(home).html(''); */
                $(home).hide();
                $("#menu").hide();
            }
        }).done(function(datos){
            
            $('.loader').hide();
            $('.spinner-border').addClass("cargar");
            const obj= JSON.parse(datos)
            $('#menu').html(obj.menu);
            $(home).html(obj.contenido);
            /* $(home).html(obj.contenido); */
            $(".loader").fadeOut("fast", function() {
        
                // Muestra el contenido
                $(home).fadeIn("fast");
                $('#menu').fadeIn("fast");
            });
            
        }).fail(function(){
           
            alert("error");
        }).always(function() {
            $(this).attr('disabled', true);
            $('.loader').hide();
            $('.spinner-border').addClass("cargar");
        }); 


     });
   /*   $(document).on('click', '.xLink', function() {
        alert("Button clicked: " + $(this).text());
    }); */
   
     $('#buscar').click( function(){ 
        let obj = $(this);
        let linkNuevo=obj.html();
        let txt = $('#txtBuscar').val();
        let page = obj.data('page');
        // let titlePage = obj.data('titlePage');
        console.log(page)
        obj.html('<i class="fa fa-spinner"></i> Cargando...');
        // $('.modal-title-login').html('Login');
        // alert(linkNuevo)
        $.ajax({
            url:'index.php',
            type:'get',
            data:{'accion':'getCatalogo','txt':txt}
        }).done(function(datos){
            $('#page').html (page);
            $('#titlePage').html (page);
            obj.html(linkNuevo);
            // console.log(datos);
            $('#home').html(datos);
            // $('#modalBase').modal('show');
        }).fail(function(){
            obj.html(linkNuevo);
            alert("error");
        }); 
        
    });
    $('.detalles').click( function(){ 
        alert('detalles');
        let obj = $(this);
        let linkNuevo=obj.html();
        let id= obj.data('id');
        
        
        obj.html('<i class="fa fa-spinner"></i> Cargando...');
        // $('.modal-title-login').html('Login');
        // alert(linkNuevo)
        $.ajax({
            url:'index.php',
            type:'get',
            data:{'accion':'getDetalles','id':id}
        }).done(function(datos){
            obj.html(linkNuevo);
            // console.log(datos);
            $('#home').html(datos);
            // $('#modalBase').modal('show');
        }).fail(function(){
            obj.html(linkNuevo);
            alert("error");
        }); 
        
    });

});