var ctx = document.getElementById("mainChart").getContext('2d');
var mainChart = new Chart(ctx, {
type: 'bar',
data: {
    labels: ["Toluca", "America", "Monterrey", "Santos", "Tigres", "Xolos", "Pumas", "Morelia"],
    datasets: [{
        label: 'Porcentaje',
        data: [30, 23, 15, 9, 5, 8, 5, 5],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(153, 102, 51, 0.2)',
            'rgba(255, 206, 86, 0.2)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(255, 206, 86, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255,99,132,1)',
            'rgba(153, 102, 51, 1)',
            'rgba(255, 206, 86, 1)'
        ],
        borderWidth: 1
    }]
},
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero:true
            }
        }]
    }
}
});
