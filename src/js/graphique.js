function createPieChart(listeLabels, listeData) {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: listeLabels,
            datasets: [{
                label: '# de ventes',
                data: listeData,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
}