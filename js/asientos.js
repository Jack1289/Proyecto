var blanco='http://localhost/img/asientonn.png';
var verde='http://localhost/img/asientov.png';
var rojo='http://localhost/img/asientou.png';
function taquito(element){
    if(element.src!=rojo) {
        if (element.src == verde) {
            element.src=blanco;
        }else{
            element.src=verde;
        }
    }
}