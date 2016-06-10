
function pagar(){

    BootstrapDialog.confirm({
        title: 'Compra de Boletos',
        message: '¿Desea continuar con el pago?',
        type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
        closable: true, // <-- Default value is false
        draggable: true, // <-- Default value is false
        btnCancelLabel: 'Regresar', // <-- Default value is 'Cancel',
        btnOKLabel: 'Continuar', // <-- Default value is 'OK',
        btnOKClass: 'btn-success', // <-- If you didn't specify it, dialog type will be used,
        callback: function(result) {
            // result will be true if button was click, while it will be false if users close the dialog directly.
            if(result) {
                var v1=$('#fecha').val();
                var v2=$('#cuenta').val();
                var v3=$('#verificacion').val();
                //var v4=$('#saldo').val();


                $.post("../php/var4.php",
                    {
                        fecha:v1,
                        cuenta:v2,
                        verificacion:v3
                        //saldo:v4
                    },
                    function(data, status){
                        window.location="compra.php"
                    });
            }else {
            }
        }
    });
    return false;

}