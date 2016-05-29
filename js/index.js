function hola() {
    $.post("../php/var.php",
        {
            valo: "1",
            city: "Duckburg"
        },
        function(data, status){
            //alert("Data: " + data + "\nStatus: " + status);
            window.location="../php/boruto.php"
            //alert();
        });
}