function hola() {
    $.post("../php/var.php",
        {
            idPelicula: "1"
        },
        function(data, status){
            window.location="../php/boruto.php"
        });
}
function comprar(){
    var horario=$('#horario').val();
    var pelicula=$('#nombrePelicula').val();
    var poster=$('#poster').val();
    if($('#horario').val()!=0) {
        $.post("../php/var.php",
            {
                horario: horario,
                pelicula: pelicula,
                poster: poster
            },
            function(data, status){
                window.location="../php/asientos.php"
            });
    }
}