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

  // You can place this in assets/js/charts.js or directly in the page
  var chartDiv = document.querySelector("#hourly-traffic-apexchart");
  if (chartDiv) {
    var timeLabels = [
      "00:00 - 00:59", "01:00 - 01:59", "02:00 - 02:59", "03:00 - 03:59",
      "04:00 - 04:59", "05:00 - 05:59", "06:00 - 06:59", "07:00 - 07:59",
      "08:00 - 08:59", "09:00 - 09:59", "10:00 - 10:59", "11:00 - 11:59",
      "12:00 - 12:59", "13:00 - 13:59", "14:00 - 14:59", "15:00 - 15:59",
      "16:00 - 16:59", "17:00 - 17:59", "18:00 - 18:59", "19:00 - 19:59",
      "20:00 - 20:59", "21:00 - 21:59", "22:00 - 22:59", "23:00 - 23:59"
    ];
    var carsIn =  [0, 0, 2, 0, 0, 0, 2, 3, 28, 55, 35, 7, 7, 6, 4, 5, 4, 3, 2, 0, 4, 2, 1, 1];
    var carsOut = [2, 1, 1, 2, 1, 1, 1, 0, 1, 3, 5, 5, 8, 0, 5, 9, 9, 10, 15, 12, 12, 6, 30, 21];

    var options = {
      chart: {
        type: 'line',
        height: 450,
        toolbar: { show: false },
        resetZoomButton: {
          text: 'Reset Zoom',
          position: 'top-right',
          offsetX: -10,
          offsetY: 0
        }
      },
      series: [
        {
          name: "No. of Cars In",
          data: carsIn
        },
        {
          name: "No. of Cars Out",
          data: carsOut
        }
      ],
      xaxis: {
        categories: timeLabels,
        labels: {
          rotate: -45,
          style: { fontSize: '11px' }
        },
        title: { text: "Time Interval" }
      },
      yaxis: {
        min: 0,
        title: { text: "No. of Cars" }
      },
      stroke: {
        width: 3
      },
      markers: {
        size: 4
      },
      colors: ['#2196f3', '#f44336'],
      legend: {
        position: 'top'
      },
      tooltip: {
        shared: true,
        intersect: false
      }
    };

    var chart = new ApexCharts(chartDiv, options);
    chart.render();

    var resetBtn = document.getElementById('resetZoomBtn');
    if (resetBtn) {
      resetBtn.addEventListener('click', function() {
        chart.resetZoom();
      });
    }
  }

  // 1. Mixed Chart: Monthly Transactions (Bar) & Sales (Line)
  var monthlyChartDiv = document.querySelector("#monthly_sales_chart_1");
  if (monthlyChartDiv) {
    var months = [
      "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];
    var trxData = [1200, 1350, 1100, 1450, 1600, 1700, 1550, 1400, 1500, 1650, 1750, 1800];
    var salesData = [12000, 13500, 11000, 14500, 16000, 17000, 15500, 14000, 15000, 16500, 17500, 18000];

    var options1 = {
      chart: {
        height: 450,
        type: 'line',
        toolbar: { show: false },
        width: '100%', // Ensures full width
        animations: { enabled: true },
        responsive: [
          {
            breakpoint: 600,
            options: {
              chart: { height: 450 }
            }
          }
        ]
      },
      series: [
        {
          name: 'Transactions',
          type: 'column',
          data: trxData
        },
        {
          name: 'Sales (RM)',
          type: 'line',
          data: salesData
        }
      ],
      stroke: { width: [0, 4] },
      plotOptions: {
        bar: { columnWidth: '40%', borderRadius: 4 }
      },
      colors: ['#2196f3', '#f44336'],
      dataLabels: { enabled: false },
      labels: months,
      xaxis: {
        categories: months,
        title: { text: "Month" }
      },
      yaxis: [
        { title: { text: "Transactions" }, min: 0 },
        { opposite: true, title: { text: "Sales (RM)" }, min: 0 }
      ],
      legend: { position: 'top' },
      tooltip: { shared: true, intersect: false }
    };

    var monthlyChart = new ApexCharts(monthlyChartDiv, options1);
    monthlyChart.render();
  }

  // 2. Bar Chart: Yearly Sales Comparison
  var yearlyChartDiv = document.querySelector("#monthly_sales_chart_2");
  if (yearlyChartDiv) {
    var years = ["2022", "2023", "2024"];
    var yearlySales = [150000, 172000, 185000];

    var options2 = {
      chart: {
        type: 'bar',
        height: 450,
        width: '100%',
        toolbar: { show: false },
        animations: { enabled: true },
        responsive: [
          {
            breakpoint: 600,
            options: {
              chart: { height: 459 }
            }
          }
        ]
      },
      series: [{
        name: 'Total Sales (RM)',
        data: yearlySales
      }],
      colors: ['#1572B9'],
      xaxis: {
        categories: years,
        title: { text: "Year" }
      },
      yaxis: {
        title: { text: "Sales (RM)" },
        min: 0
      },
      plotOptions: {
        bar: { columnWidth: '40%', borderRadius: 4 }
      },
      dataLabels: { enabled: false },
      legend: { show: false },
      tooltip: {
        y: {
          formatter: function(val) {
            return "RM " + val.toLocaleString();
          }
        }
      }
    };

    var yearlyChart = new ApexCharts(yearlyChartDiv, options2);
    yearlyChart.render();
  }

  // Mixed chart for Length of Stay
  var losChartDiv = document.querySelector("#length_of_stay_chart");
  if (losChartDiv) {
    var durations = [
      "<30 mins", "30 mins - 1 hr", "1 hr - 2 hr", "2 hr - 3 hr", "3 hr - 4 hr", "4 hr - 5 hr",
      "5 hr - 6 hr", "6 hr - 7 hr", "7 hr - 8 hr", "8 hr - 9 hr", "9 hr - 10 hr", "10 hr - 11 hr",
      "11 hr - 12 hr", "12 hr - 13 hr", "13 hr - 14 hr", "14 hr - 15 hr", "15 hr - 16 hr",
      "16 hr - 17 hr", "17 hr - 18 hr", "18 hr - 19 hr", "19 hr - 20 hr", "20 hr - 21 hr",
      "21 hr - 22 hr", "22 hr - 23 hr", "23 hr - 24 hr", "More than 24 hr"
    ];
    var cars = [34,56,80,36,32,27,14,16,24,35,136,83,35,16,12,7,2,4,1,0,1,0,0,0,0,41];
    var sales = [0.00,270.00,518.00,314.00,246.00,329.00,158.00,196.00,319.00,469.00,1237.00,893.00,539.00,189.00,172.00,109.00,15.00,10.00,10.00,0.00,43.00,0.00,0.00,0.00,0.00,3076.00];

    var options = {
      chart: {
        height: 450,
        type: 'line',
        toolbar: { show: false }
      },
      series: [
        {
          name: 'Number of Cars',
          type: 'column',
          data: cars
        },
        {
          name: 'Sales (RM)',
          type: 'line',
          data: sales
        }
      ],
      stroke: {
        width: [0, 4]
      },
      plotOptions: {
        bar: {
          columnWidth: '40%',
          borderRadius: 4
        }
      },
      colors: ['#2196f3', '#f44336'],
      dataLabels: { enabled: false },
      labels: durations,
      xaxis: {
        categories: durations,
        title: { text: "Duration of Stay" },
        labels: { rotate: -45, style: { fontSize: '11px' } }
      },
      yaxis: [
        {
          title: { text: "Number of Cars" },
          min: 0
        },
        {
          opposite: true,
          title: { text: "Sales (RM)" },
          min: 0
        }
      ],
      legend: { position: 'top' },
      tooltip: { shared: true, intersect: false }
    };

    var losChart = new ApexCharts(losChartDiv, options);
    losChart.render();
  }

  // Data from your table
  var weekLabels = ["24 Mar", "25 Mar", "26 Mar", "27 Mar", "28 Mar", "29 Mar", "30 Mar"];
  var totalEntries = [57,112,111,73,157,132,81];
  var totalExits = [9,111,114,92,163,136,67];
  var totalManual = [0,1,0,3,0,6,0];
  var performance = [100.00,99.55,100.00,98.18,100.00,97.76,100.00];

  // Stacked Column Chart
  var stackedOptions = {
    chart: {
      type: 'bar',
      height: 450,
      stacked: true,
      toolbar: { show: false }
    },
    series: [
      {
        name: 'Total Entries',
        data: totalEntries
      },
      {
        name: 'Total Exits',
        data: totalExits
      },
      {
        name: 'Total Manual Open Barrier',
        data: totalManual
      }
    ],
    colors: ['#2196f3', '#4caf50', '#f44336'],
    xaxis: {
      categories: weekLabels,
      title: { text: "Date" }
    },
    yaxis: {
      title: { text: "Count" },
      min: 0
    },
    legend: { position: 'top' },
    plotOptions: {
      bar: { borderRadius: 4, columnWidth: '40%' }
    },
    tooltip: { shared: true, intersect: false }
  };

  var stackedChartDiv = document.querySelector("#manual_barrier_chart_1");
  if (stackedChartDiv) {
    var stackedChart = new ApexCharts(stackedChartDiv, stackedOptions);
    stackedChart.render();
  }

  // Line Chart for Performance
  var lineOptions = {
    chart: {
      type: 'line',
      height: 450,
      toolbar: { show: false }
    },
    series: [
      {
        name: 'Performance (%)',
        data: performance
      }
    ],
    colors: ['#2196f3'],
    xaxis: {
      categories: weekLabels,
      title: { text: "Date" }
    },
    yaxis: {
      min: 95,
      max: 100,
      title: { text: "Performance (%)" },
      labels: {
        formatter: function (val) { return val + "%"; }
      }
    },
    stroke: { width: 4},
    markers: { size: 6 },
    dataLabels: { enabled: true, formatter: function(val){ return val + "%"; } },
    tooltip: { y: { formatter: function(val){ return val + "%"; } } },
    legend: { position: 'top' }
  };

  var lineChartDiv = document.querySelector("#manual_barrier_chart_2");
  if (lineChartDiv) {
    var lineChart = new ApexCharts(lineChartDiv, lineOptions);
    lineChart.render();
  }
});