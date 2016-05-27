var banderaInicio=0;
function verificarContrasena(){
               var contrasena1=document.getElementById('contrasena1').value;
               var contrasena2=document.getElementById('contrasena2').value;
               
               if (contrasena1==contrasena2) {
                     notificacionWarning('Las Password no coiniciden');
                     return false;
               }else{
                   notificacionWarning('Las Password no coiniciden');
                   return false;
               }
    return false;
}
var bandera=document.getElementById('bandera').value;
            function notificacionError() {
                $.notify({
                        icon: 'fa fa-exclamation-circle',
                        title: '<strong>Error</strong><br>',
                        message: 'Error al cambiar el Password',
                }, {
                        // settings
                        element: 'body',
                        position: null,
                        type: "danger",
                        allow_dismiss: true,
                        newest_on_top: true,
                        showProgressbar: false,
                        placement: {
                                from: "top",
                                align: "right"
                        },
                        z_index: 2000,
                        delay: 8000,
                        timer: 1000,
                        animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                        }
                });
                
            }
            function notificacionWarning() {
	$.notify({
		// options
		icon: 'fa fa-exclamation-triangle',
		title: '<strong>Advertencia</strong><br>',
		message: 'El Password no es correcto o las nuevas Password no coinciden',
	}, {
		// settings
		element: 'body',
		position: null,
		type: "warning",
		allow_dismiss: true,
		newest_on_top: true,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		z_index: 2000,
		delay: 8000,
		timer: 1000,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		}
	});

}

function notificacionSuccess() {
	$.notify({
		// options
		icon: 'fa fa-thumbs-o-up',
		title: '<strong>Correcto</strong><br>',
		message: 'Se ha guardado la Password correctamente',
	}, {
		// settings
		element: 'body',
		position: null,
		type: "success",
		allow_dismiss: true,
		newest_on_top: true,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		z_index: 2000,
		delay: 5000,
		timer: 1000,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		}
	});

}

             if (bandera==1) {
               notificacionError();
               bandera=0;
               document.getElementById('bandera').value=0;
             }
             if (bandera==2) {
               notificacionWarning();
               bandera=0;
               document.getElementById('bandera').value=0;
             }
             if (bandera==3) {
               notificacionSuccess();
               document.getElementById('bandera').value=0;
               bandera=0;
             }