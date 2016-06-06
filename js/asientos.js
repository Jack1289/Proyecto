var blanco='http://localhost/img/asientonn.png';
var verde='http://localhost/img/asientov.png';
var rojo='http://localhost/img/asientou.png';
var contador=0;
function taquito(element){
    if(element.src!=rojo) {
        if (element.src == verde) {
            element.src=blanco;
            contador=contador+1;
            if(contador==0){
                document.getElementById('pagar').disabled=true;
            }
            else{
                document.getElementById('pagar').disabled=false;
            }
        }else{
            element.src=verde;
            contador=contador-1;
            if(contador==0){
                document.getElementById('pagar').disabled=true;
            }
            else{
                document.getElementById('pagar').disabled=false;
            }
        }
    }
}
function comprar(){
    BootstrapDialog.confirm({
        title: 'Compra de Boletos',
        message: 'Usted va a comprar '+contador+' boletos. ¿Está seguro?',
        type: BootstrapDialog.TYPE_WARNING, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
        closable: true, // <-- Default value is false
        draggable: true, // <-- Default value is false
        btnCancelLabel: 'Regresar', // <-- Default value is 'Cancel',
        btnOKLabel: 'Continuar', // <-- Default value is 'OK',
        btnOKClass: 'btn-success', // <-- If you didn't specify it, dialog type will be used,
        callback: function(result) {
            // result will be true if button was click, while it will be false if users close the dialog directly.
            if(result) {
                $.post("../php/var2.php",
                    {
                        boletos:contador
                    },
                    function(data, status){
                        window.location="pago.php"
                    });
            }else {
            }
        }
    });
    return false;

}