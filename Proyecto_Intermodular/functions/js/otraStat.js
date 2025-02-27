const desayuno = document.getElementById('Desayuno');
const mediodia = document.getElementById('Mediodia');
const comida = document.getElementById('Comida');
const merienda = document.getElementById('Merienda');
const cena = document.getElementById('Cena');

let valores =[];
let etiquetas = [];

function agregarDatos(element, label) {
    if (element && element.value) {
        valores.push(parseFloat(element.value));
        etiquetas.push(label);
    }
}


agregarDatos(desayuno, 'Desayuno');
agregarDatos(mediodia, 'Mediodia');
agregarDatos(comida, 'Comida');
agregarDatos(merienda, 'Merienda');
agregarDatos(cena, 'Cena');

const ctx2 = document.getElementById('chartCanvas').getContext('2d');
const chartCanvas = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: etiquetas,
        datasets: [{
            label: 'Glucosa mg/dL',
            data: valores,
            fill: false,
            borderColor: 'rgba(75, 192, 192, 1)',
            color: 'white',
            tension: 0.1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                grid: {
                    color: 'rgba(255, 255, 255, 0.1)' // Color de las líneas de la cuadrícula del eje Y
                },
                ticks: {
                    color: 'white' // Color de las etiquetas del eje Y
                },
                border: {
                    color: 'white' // Color del borde del eje Y
                }
            },
            x: {
                grid: {
                    color: 'rgba(255, 255, 255, 0.1)' // Color de las líneas de la cuadrícula del eje X
                },
                ticks: {
                    color: 'white' // Color de las etiquetas del eje X
                },
                border: {
                    color: 'white' // Color del borde del eje X
                }
            }
        },
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    color: 'white'
                }
            },
            tooltip: {
                enabled: true
            }
        }
    }
});