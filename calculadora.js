let display = document.getElementById('display');
let ultimoResultado = 0;
let igualPresionado = false;

function agregarAlDisplay(valor) {
    if (igualPresionado && !isNaN(valor)) {
        display.value = valor; 
        igualPresionado = false;
    } else {
        if (valor === 'ANS') {
            display.value += ultimoResultado;
        } else {
            display.value += valor;
        }
    }
}

function borrarUltimo() {
    display.value = display.value.slice(0, -1);
}

function limpiarDisplay() {
    display.value = '';
}

function calcular() {
    try {
        ultimoResultado = eval(display.value);
        display.value = ultimoResultado;
    } catch (e) {
        display.value = 'Error';
    }
    igualPresionado = true;
}
