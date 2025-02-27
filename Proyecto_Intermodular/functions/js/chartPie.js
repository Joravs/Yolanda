const datos=document.getElementById('datos').value;
let dat=datos.split(",");


var ctx = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie', // Tipo de gráfico (pie chart)
        data: {
            labels: ['Hipoglucemia', 'Hiperglucemia'], // Etiquetas para cada sección
            datasets: [{
                label: 'Episodios',
                data: dat, // Datos para cada sección del gráfico
                backgroundColor: ['red', 'blue'], // Colores de cada sección
                borderColor: ['darkred', 'darkblue'], // Colores de borde de las secciones
                borderWidth: 1
            }]
        },
        options: {
            responsive: true, // Hacerlo responsivo para que se ajuste al tamaño de la pantalla
            plugins: {
                legend: {
                    position: 'top', // Posición de la leyenda
                    labels: {
                        color: 'white'
                    }
                },
                tooltip: {
                    enabled: true // Habilitar la visualización de los tooltips al pasar el ratón
                }
            }
        }
    });