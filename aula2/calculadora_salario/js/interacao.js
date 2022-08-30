var valor_hora = null;
var horas_dia = null;
var dias_mes = null;

function init() {
    valor_hora = document.getElementById('valor_hora');
    horas_dia = document.getElementById('horas_dia');
    dias_mes = document.getElementById('dias_mes');

    valor_hora.addEventListener('change', (e) => {
        if (isNaN(e.target.value)) {
            e.target.classList.add('invalido');
        } else {
            e.target.classList.remove('invalido')
        }
    });

    horas_dia.addEventListener('change', (e) => {
        if (isNaN(e.target.value)) {
            e.target.classList.add('invalido');
        } else {
            e.target.classList.remove('invalido')
        }
    });

    dias_mes.addEventListener('change', (e) => {
        if (isNaN(e.target.value)) {
            e.target.classList.add('invalido');
        } else {
            e.target.classList.remove('invalido')
        }
    });
}


document.onload = init();