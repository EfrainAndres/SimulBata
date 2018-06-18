var fx = document.getElementById('fx'),
resultado = document.getElementById('resultado');

fx.addEventListener('input', function () {
    var error = true;
    try{
        //Si sólo tiene números y signos + - * / ( )
        if (/^[\d*()]+$/.test(fx.value)) {
            // Evaluar el resultado
            resultado.innerText = eval(fx.value)/10;
            error = false;
        }
    } catch (err) { }
    if (error) // Si no se pudo calcular
        resultado.innerText = "Error";
});