var rojo='../img/asientou.png';
function pagar(){
   /* BootstrapDialog.confirm({
        title: 'Compra de Boletos',
        message: 'Usted va a comprar. ¿Está seguro?',
        type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
        closable: true, // <-- Default value is false
        draggable: true, // <-- Default value is false
        btnCancelLabel: 'Regresar', // <-- Default value is 'Cancel',
        btnOKLabel: 'Continuar', // <-- Default value is 'OK',
        btnOKClass: 'btn-success', // <-- If you didn't specify it, dialog type will be used,
        callback: function(result) {
            // result will be true if button was click, while it will be false if users close the dialog directly.
            if(result) {
                window.location="compra.php"

            }else {
            }
        }
    });
    return false;*/
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
                $.post("../php/pago.php",
                    {
                        comprar:''
                    },
                    function(data, status){
                        //window.location="compra.php"
                    });
            }else {
            }
        }
    });
    return false;

}
function separar(){
    var el =document.getElementById('variable').value;
    var as;
    as=el.split(",");
    var i=0;
    //for(i=0;i<as.length;i++)
    //{
      //  alert(as[i]);
   // }
    $.post("../php/var4.php",
        {
            as:as
        },
        function(data, status){
           window.location="../php/compra.php"
        });
   // return false;
}
