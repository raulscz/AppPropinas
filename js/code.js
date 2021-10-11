function calculo() {
    //alert("Hellow") 
    let totalCuenta = document.getElementById('cuenta').value;
    let servicio = document.getElementById('servicio').value;
    let personas = document.getElementById('personas').value;

    let resultado = (servicio * totalCuenta) / personas;

    if (isNaN(resultado)) {
        alert('Introduce datos válidos')
    } else if (personas == ' ' || personas == 0) {
        alert('Introduce las personas que van a pagar')
    } else {
        document.getElementById("res").innerHTML = "<p>Total A Pagar</p> <h3>" + resultado + " por persona...</h3>";
    }
}

function limpiarFormulario() {
    document.getElementById("form").reset();
    document.getElementById("res").innerHTML = " ";
}