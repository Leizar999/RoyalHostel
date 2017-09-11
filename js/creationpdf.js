//Salva la página actual en PDF.
var doc = new jsPDF("landscape", 'pt');
var elem = document.getElementById("tabla-resumen");
var res = doc.autoTableHtmlToJson(elem);
doc.autoTable(res.columns, res.data);
doc.save("reserva.pdf"); //Opcional, pero lo pongo porque es más completo.

//Llama a la función para enviar el PDF generado por mail.
var pdf = btoa(doc.output()); 
$.ajax({
    method: "POST",
    url: "/lib/mailsystem/pdfcreator.php",
    data: {data: pdf},
}).done(function(data){
    console.log(data);
});

//Devuelve a la página principal en 15 segundos.
function goHome() {
    setTimeout(function () {
        window.location.href = "../index.php";
    }, 16000);

    var timer = 0;
    var myVar = setInterval(temporizador, 1000);
    function temporizador() {
        document.getElementById("timer").innerHTML = "REDIRECCIÓN EN 15 SEGUNDOS: " + (timer++) + " SEGUNDOS. <br><br> O PUEDES HACER CLICK AQUÍ: <a href='http://www.royalhostel.es'>RoyalHostel</a>";
    }
}

goHome();

