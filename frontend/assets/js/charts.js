// Initialize the chart when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
  var txCanvas = document.getElementById('myChart');
  if (txCanvas) {
    var txChart = new Chart(txCanvas.getContext('2d'), {
      type: 'bar',
      data: { /* ... */ },
      options: { /* ... */ }
    });
  }

  // Chart for another page
  var salesCanvas = document.getElementById('salesChart');
  if (salesCanvas) {
    var salesChart = new Chart(salesCanvas.getContext('2d'), {
      type: 'line',
      data: { /* ... */ },
      options: { /* ... */ }
    });
  }

  // Summary chart for transactions page
  var transactionSummaryCanvas = document.getElementById('transaction.summary');
  if (transactionSummaryCanvas) {
    var days = Array.from({length: 31}, (_, i) => `${i+1}`);
    var dummySales = [
      1200, 1350, 1100, 1450, 1600, 1700, 1550, 1400, 1500, 1650, 1750, 1800, 1900, 2000, 2100, 1950, 1850, 1700, 1600, 1500, 1400, 1300, 1200, 1100, 1000, 950, 900, 850, 800, 750, 700
    ];
    new Chart(transactionSummaryCanvas.getContext('2d'), {
      type: 'bar',
      data: {
        labels: days,
        datasets: [{
          label: 'Total Sales (RM)',
          data: dummySales,
          backgroundColor: 'rgba(33, 150, 243, 0.7)',
          borderColor: 'rgba(33, 150, 243, 1)',
          borderWidth: 1,
          hoverBackgroundColor: '#1572B9',}]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Total Sales Per Day (Dummy Data)',
            font: { size: 16, weight: 'bold' }
          }
        },
        scales: {
          x: {
            title: { display: true, text: 'Day of Month' },
            ticks: { maxRotation: 90, minRotation: 45, font: { size: 10 } }
          },
          y: {
            beginAtZero: true,
            title: { display: true, text: 'Sales (RM)' }
          }
        }
      }
    });
  }

  // ...other charts...
});