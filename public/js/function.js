 $(document).on("submit",".form_entrada",function(e){
//funcion para atrapar los formularios y enviar los datos
        e.preventDefault();
        var formu=$(this);
        var quien=$(this).attr("id");
       
           var modalB = $("#body-info");
                var modalT = $("#ModalTitle");
        if(quien=="form-postulante"){ var miurl="function.php"; }

           var formData = new FormData($('#'+quien+'')[0]);
          $.ajax({
            url: miurl,
            type:"POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                $('#loading').show(); 
            },
            success : function(response){
                setTimeout(function() {
    	            $("#deleteModal").modal('show');
    	            $('#loading').hide();
                }, 2000);                
                $(".ocultar").hide()

                modalT.empty();
                modalB.empty().append(response);
                setTimeout(function() { location.reload() }, 2000);
                
            }
        });
});


 /*funcion encargar de mostrar modal de borrado de datos*/
 function DeletePostu(id,name)
 {  
    $('#loading').show(); 

    setTimeout(function() {
    	$("#deleteModal").modal('show');
    	$('#loading').hide();
    }, 2000);
    var modalB = $("#body-info");
    var modalT = $("#ModalTitle");
    $("#postulante").val(id);
    modalT.empty().append('Borrar Datos');
    modalB.empty().append('¿Esta usted seguro que quiere borrar los datos de<br><b>'+name.toUpperCase()+'</b>?');

    $(document).on('click', '.confirm', function(e) {
        $.get('function.php?action=delete&id='+id+'', function(response) {
            $(".ocultar").hide()
            modalT.empty();
            modalB.empty().append(response);
        	setTimeout(function() { location.reload() }, 2000);
        });
    });

  }

  //ancla de navegador
$('nav a').click(function(e){				
		e.preventDefault();		//evitar el eventos del enlace normal
		var strAncla=$(this).attr('href'); //id del ancla
			$('body,html').stop(true,true).animate({				
				scrollTop: $(strAncla).offset().top
			},2000);		
	});