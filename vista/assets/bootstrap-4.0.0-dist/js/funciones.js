
$(document).ready(function() {
    $("button").click(function() {
        $.get("datos.txt",function(dato, status, xhr) {
            console.log("Mensaje: "+dato+ "\nStatus: " + status + " " + xhr.status);
        });
    });
});
