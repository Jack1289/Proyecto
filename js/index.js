function hola() {
    $.post("../php/var.php",
        {
            idPelicula: "1",
            sala:"Sala1"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });
}
function hola2() {
    $.post("../php/var.php",
        {
            idPelicula: "2"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}

function hola3() {
    $.post("../php/var.php",
        {
            idPelicula: "3"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}
function hola4() {
    $.post("../php/var.php",
        {
            idPelicula: "4"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}
function hola5() {
    $.post("../php/var.php",
        {
            idPelicula: "5"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}
function hola6() {
    $.post("../php/var.php",
        {
            idPelicula: "6"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}
function hola7() {
    $.post("../php/var.php",
        {
            idPelicula: "7"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}
function hola8() {
    $.post("../php/var.php",
        {
            idPelicula: "8"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });



}
function comprar(){
    var horario=$('#horario').val();
    var pelicula=$('#nombrePelicula').val();
    var poster=$('#poster').val();
    var sala=$('#sala').val();
    if($('#horario').val()!=0) {
        $.post("../php/var.php",
            {
                horario: horario,
                pelicula: pelicula,
                poster: poster,
                sala: sala
            },
            function(data, status){
                window.location="../php/asientos.php"
            });
    }
}