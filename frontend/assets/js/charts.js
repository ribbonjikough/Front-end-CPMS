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

  // Bar chart: Weekly Transactions
  var barCanvas = document.getElementById('weekly_transactions_bar');
  if (barCanvas) {
    new Chart(barCanvas.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        datasets: [{
          label: 'Transactions',
          data: [120, 150, 170, 140, 180, 200, 160],
          backgroundColor: 'rgba(33, 150, 243, 0.7)',
          borderColor: 'rgba(33, 150, 243, 1)',
          borderWidth: 1,
          borderRadius: 4,
          hoverBackgroundColor: '#1572B9',
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Transactions per Day (This Week)',
            font: { size: 15, weight: 'bold' }
          }
        },
        scales: {
          x: { title: { display: true, text: 'Day' } },
          y: { beginAtZero: true, title: { display: true, text: 'Transactions' } }
        }
      }
    });
  }

  // Line chart: Weekly Sales
  var lineCanvas = document.getElementById('weekly_sales_line');
  if (lineCanvas) {
    new Chart(lineCanvas.getContext('2d'), {
      type: 'line',
      data: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        datasets: [{
          label: 'Sales (RM)',
          data: [1200, 1500, 1700, 1400, 1800, 2000, 1600],
          backgroundColor: 'rgba(33, 150, 243, 0.15)',
          borderColor: 'rgba(33, 150, 243, 1)',
          borderWidth: 2,
          pointBackgroundColor: '#2196f3',
          pointBorderColor: '#2196f3',
          hoverBackgroundColor: '#1572B9',
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Daily Sales (This Week)',
            font: { size: 15, weight: 'bold' }
          }
        },
        scales: {
          x: { title: { display: true, text: 'Day' } },
          y: { beginAtZero: true, title: { display: true, text: 'Sales (RM)' } }
        }
      }
    });
  }
});