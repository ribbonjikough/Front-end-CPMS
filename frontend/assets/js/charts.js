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

  // --- Monthly Transactions & Sales Mixed Chart ---
  var monthlyChartDiv = document.getElementById("monthly_sales_chart_1");
  if (monthlyChartDiv) {
    var months = [
      "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];
    var trxData = [1200, 1350, 1100, 1450, 1600, 1700, 1550, 1400, 1500, 1650, 1750, 1800];
    var salesData = [12000, 13500, 11000, 14500, 16000, 17000, 15500, 14000, 15000, 16500, 17500, 18000];

    // Create a canvas for Chart.js if not already present
    if (!monthlyChartDiv.querySelector('canvas')) {
      var canvas = document.createElement('canvas');
      canvas.style.width = "100%";
      canvas.style.height = "450px";
      monthlyChartDiv.appendChild(canvas);
    } else {
      var canvas = monthlyChartDiv.querySelector('canvas');
    }

    new Chart(canvas.getContext('2d'), {
      type: 'bar',
      data: {
        labels: months,
        datasets: [
          {
            label: 'Transactions',
            data: trxData,
            backgroundColor: 'rgba(33, 150, 243, 0.7)',
            borderColor: 'rgba(33, 150, 243, 1)',
            borderWidth: 1,
            borderRadius: 4,
            yAxisID: 'y',
            order: 2
          },
          {
            label: 'Sales (RM)',
            data: salesData,
            type: 'line',
            borderColor: '#f44336',
            backgroundColor: 'rgba(244,67,54,0.15)',
            borderWidth: 3,
            pointBackgroundColor: '#f44336',
            pointBorderColor: '#f44336',
            fill: false,
            tension: 0,
            yAxisID: 'y1',
            order: 1
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'top' },
          title: {
            display: true,
            text: 'Monthly Transactions & Sales',
            font: { size: 16, weight: 'bold' }
          }
        },
        scales: {
          x: {
            title: { display: true, text: "Month" }
          },
          y: {
            title: { display: true, text: "Transactions" },
            beginAtZero: true,
            position: 'left'
          },
          y1: {
            title: { display: true, text: "Sales (RM)" },
            beginAtZero: true,
            position: 'right',
            grid: { drawOnChartArea: false }
          }
        }
      }
    });
  }

  // --- Yearly Sales Comparison Bar Chart ---
  var yearlyChartDiv = document.getElementById("monthly_sales_chart_2");
  if (yearlyChartDiv) {
    var years = ["2022", "2023", "2024"];
    var yearlySales = [150000, 172000, 185000];

    // Create a canvas for Chart.js if not already present
    if (!yearlyChartDiv.querySelector('canvas')) {
      var canvas2 = document.createElement('canvas');
      canvas2.style.width = "100%";
      canvas2.style.height = "450px";
      yearlyChartDiv.appendChild(canvas2);
    } else {
      var canvas2 = yearlyChartDiv.querySelector('canvas');
    }

    new Chart(canvas2.getContext('2d'), {
      type: 'bar',
      data: {
        labels: years,
        datasets: [{
          label: 'Total Sales (RM)',
          data: yearlySales,
          backgroundColor: '#1572B9',
          borderRadius: 4,
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Yearly Sales Comparison',
            font: { size: 16, weight: 'bold' }
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                return "RM " + context.parsed.y.toLocaleString();
              }
            }
          }
        },
        scales: {
          x: {
            title: { display: true, text: "Year" }
          },
          y: {
            title: { display: true, text: "Sales (RM)" },
            beginAtZero: true
          }
        }
      }
    });
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

  // --- Redemption by Type Pie Chart ---
  var pieDiv = document.querySelector("#redemption_graph_1");
  if (pieDiv) {
    var pieOptions = {
      chart: {
        type: 'pie',
        height: 220,
        toolbar: { show: false }
      },
      labels: ['Early Bird', 'Flat Rate Friday', 'Spend & Redeem'],
      series: [44, 32, 24], // Example data
      colors: ['#2196f3', '#ff9800', '#8e24aa'],
      legend: { position: 'bottom' },
      title: { text: 'Redemption by Type', align: 'center', style: { fontSize: '16px' } }
    };
    var pieChart = new ApexCharts(pieDiv, pieOptions);
    pieChart.render();
  }

  // --- Redemption Sales Bar Chart ---
  var barDiv = document.querySelector("#redemption_graph_2");
  if (barDiv) {
    var barOptions = {
      chart: {
        type: 'bar',
        height: 220,
        toolbar: { show: false }
      },
      series: [
        {
          name: 'Paid Amount',
          data: [1200, 900, 600]
        },
        {
          name: 'Parking Fee',
          data: [3100, 2100, 1800]
        },
        {
          name: 'Discounted Amount',
          data: [1900, 1200, 900]
        }
      ],
      colors: ['#2196f3', '#ff9800', '#8e24aa'],
      xaxis: {
        categories: ['Early Bird', 'Flat Rate Friday', 'Spend & Redeem'],
        title: { text: 'Redemption Type' }
      },
      plotOptions: {
        bar: { columnWidth: '40%', borderRadius: 4 }
      },
      legend: { position: 'top' },
      dataLabels: { enabled: false },
      title: { text: 'Redemption Sales', align: 'center', style: { fontSize: '16px' } }
    };
    var barChart = new ApexCharts(barDiv, barOptions);
    barChart.render();
  }

  // --- Daily Redemption Value Over Time Line Chart ---
  var lineDiv = document.querySelector("#redemption_graph_3");
  if (lineDiv) {
    var days = Array.from({length: 30}, (_, i) => `2025-03-${(i+1).toString().padStart(2, '0')}`);
    // Example data for each type
    var earlyBird = days.map(() => Math.floor(Math.random() * 200) + 800);
    var flatRate = days.map(() => Math.floor(Math.random() * 120) + 400);
    var spendRedeem = days.map(() => Math.floor(Math.random() * 100) + 300);

    var lineOptions = {
      chart: {
        type: 'line',
        height: 458,
        toolbar: { show: false }
      },
      series: [
        {
          name: 'Early Bird',
          data: earlyBird
        },
        {
          name: 'Flat Rate Friday',
          data: flatRate
        },
        {
          name: 'Spend & Redeem',
          data: spendRedeem
        }
      ],
      colors: ['#2196f3', '#ff9800', '#8e24aa'],
      xaxis: {
        categories: days,
        title: { text: 'Date' },
        labels: { rotate: -45, style: { fontSize: '11px' }, show: false }
      },
      yaxis: {
        title: { text: 'Sales (RM)' },
        min: 0
      },
      stroke: { width: 3, curve: 'smooth' },
      legend: { position: 'top' },
      dataLabels: { enabled: false },
      title: { text: 'Daily Redemption Value Over Time', align: 'center', style: { fontSize: '16px' } },
      tooltip: { shared: true, intersect: false }
    };
    var lineChart = new ApexCharts(lineDiv, lineOptions);
    lineChart.render();
  }

  // --- Daily Revenue Line Chart (every 30 min) ---
  var dailyLabels = [
      "00:00", "00:30", "01:00", "01:30", "02:00", "02:30", "03:00", "03:30", "04:00", "04:30",
      "05:00", "05:30", "06:00", "06:30", "07:00", "07:30", "08:00", "08:30", "09:00", "09:30",
      "10:00", "10:30", "11:00", "11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30",
      "15:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30",
      "20:00", "20:30", "21:00", "21:30", "22:00", "22:30", "23:00", "23:30"
  ];
  var dailyRevenue = Array.from({length: 48}, () => Math.floor(Math.random() * 500) + 100);

  var dailyLine = {
      chart: { type: 'line', height: 160, toolbar: { show: false } },
      series: [{ name: 'Revenue', data: dailyRevenue }],
      xaxis: { categories: dailyLabels, labels: { show: false } },
      yaxis: { title: { text: 'RM' }, min: 0 },
      stroke: { width: 3},
      colors: ['#2196f3'],
      dataLabels: { enabled: false },
      legend: { show: false }
  };
  if (document.querySelector("#dashboard_graph_1")) {
      new ApexCharts(document.querySelector("#dashboard_graph_1"), dailyLine).render();
  }

  // --- Monthly Revenue Line Chart (2025, 2024, 2023) ---
  var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
  var revenue2025 = [12000, 8000, 19500, 7000, 21000, 9000, 25000, 11000, 17000, 30000, 5000, 26000];
  var revenue2024 = [10000, 22000, 13000, 6000, 18000, 14000, 9000, 24500, 15500, 9000, 27000, 8000];
  var revenue2023 = [9000, 10500, 5000, 21000, 13000, 4000, 22500, 13500, 14500, 12000, 16000, 17000];

  var monthlyLine = {
      chart: { type: 'line', height: 160, toolbar: { show: false } },
      series: [
          { name: '2025', data: revenue2025 },
          { name: '2024', data: revenue2024 },
          { name: '2023', data: revenue2023 }
      ],
      xaxis: { categories: months },
      yaxis: { title: { text: 'RM' }, min: 0 },
      stroke: { width: 3, curve: 'straight' }, // No curve
      colors: ['#2196f3', '#ff9800', '#8e24aa'],
      dataLabels: { enabled: false },
      legend: { position: 'top' }
  };
  if (document.querySelector("#dashboard_graph_2")) {
      new ApexCharts(document.querySelector("#dashboard_graph_2"), monthlyLine).render();
  }

  // --- Monthly Length of Stay Pie Chart ---
  var stayLabels = ["0h-3h", "3h-6h", "6h-9h", "9h-12h", "12h+"];
  var stayData = [320, 410, 210, 90, 30];
  var stayColors = ['#2196f3', '#4caf50', '#ff9800', '#8e24aa', '#f44336'];

  var stayPie = {
      chart: { type: 'pie', height: 400, toolbar: { show: false } },
      labels: stayLabels,
      series: stayData,
      colors: stayColors,
      legend: { position: 'bottom' },
      dataLabels: { enabled: true },
  };
  if (document.querySelector("#dashboard_graph_3")) {
      new ApexCharts(document.querySelector("#dashboard_graph_3"), stayPie).render();
  }

   // --- Peak Hour Bar Chart ---
    var peakLabels = Array.from({length: 24}, (_, i) => i.toString().padStart(2, '0'));
    var tngData = [2, 4, 6, 8, 10, 12, 15, 20, 25, 30, 40, 65, 60, 40, 30, 25, 20, 15, 10, 8, 6, 4, 3, 2];
    var visaData = [1, 2, 3, 4, 5, 8, 10, 15, 20, 25, 35, 50, 55, 35, 25, 20, 15, 10, 8, 6, 4, 3, 2, 1];
    var mcData = [0, 1, 1, 2, 2, 3, 4, 6, 8, 10, 15, 20, 22, 15, 10, 8, 6, 4, 3, 2, 1, 1, 1, 0];

    var peakBar = {
        chart: { type: 'bar', height: 240, toolbar: { show: false } },
        series: [
            { name: 'TNG', data: tngData },
            { name: 'Visa', data: visaData },
            { name: 'Mastercard', data: mcData }
        ],
        colors: ['#ffb300', '#43a047', '#8e24aa'],
        xaxis: { categories: peakLabels, title: { text: 'Hour' } },
        yaxis: { title: { text: 'Transactions' }, min: 0 },
        plotOptions: { bar: { columnWidth: '60%', borderRadius: 3 } },
        legend: { position: 'top' },
        dataLabels: { enabled: false }
    };
    if (document.querySelector("#dashboard_graph_7")) {
        new ApexCharts(document.querySelector("#dashboard_graph_7"), peakBar).render();
    }

// Car Count Pie Chart
const carCountCtx = document.getElementById('car_count_pie');
if (carCountCtx && typeof Chart !== "undefined") {
    const carCountData = {
        labels: ['TNG', 'VISA', 'MASTERCARD'],
        datasets: [{
            data: [322, 191, 33],
            backgroundColor: ['#ffb300', '#43a047', '#8e24aa'],
            borderWidth: 0
        }]
    };
    new Chart(carCountCtx, {
        type: 'pie',
        data: carCountData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: { size: 15, weight: 'bold' },
                        color: '#212b36',
                        padding: 18,
                        boxWidth: 18
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed}`;
                        }
                    }
                }
            }
        }
    });
}

// Revenue Pie Chart
const revenueCtx = document.getElementById('revenue_pie');
if (revenueCtx && typeof Chart !== "undefined") {
    const revenueData = {
        labels: ['TNG', 'VISA', 'MASTERCARD'],
        datasets: [{
            data: [1175, 489, 143],
            backgroundColor: ['#ffb300', '#43a047', '#8e24aa'],
            borderWidth: 0
        }]
    };
    new Chart(revenueCtx, {
        type: 'pie',
        data: revenueData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: { size: 15, weight: 'bold' },
                        color: '#212b36',
                        padding: 18,
                        boxWidth: 18
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: RM${context.parsed}`;
                        }
                    }
                }
            }
        }
    });
}
});

// --- Monthly Application Trends Line Chart ---
const appTrendCtx = document.getElementById('season_app_trend_chart');
if (appTrendCtx) {
    new Chart(appTrendCtx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            datasets: [
                {
                    label: 'Individual',
                    data: [50,40,40,30,30,10,10,20,30,40,60,30],
                    borderColor: '#7ed957',
                    backgroundColor: 'rgba(126,217,87,0.08)',
                    tension: 0,
                    pointRadius: 3,
                    fill: false
                },
                {
                    label: 'Corporate',
                    data: [30,30,25,25,20,15,20,15,10,10,10,5],
                    borderColor: '#f7e967',
                    backgroundColor: 'rgba(247,233,103,0.08)',
                    tension: 0,
                    pointRadius: 3,
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: { font: { size: 14 }, color: '#222', boxWidth: 16 }
                }
            },
            scales: {
                x: {
                    grid: { color: '#e0e0e0' },
                    title: { display: false }
                },
                y: {
                    beginAtZero: true,
                    grid: { color: '#e0e0e0' },
                    title: { display: false }
                }
            }
        }
    });
}

// --- Corporate vs Individual Donut Chart ---
const donutCtx = document.getElementById('season_app_donut_chart');
if (donutCtx) {
    new Chart(donutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Individual', 'Corporate'],
            datasets: [{
                data: [402, 208],
                backgroundColor: ['#7ed957', '#f7e967'],
                borderWidth: 0
            }]
        },
        options: {
            cutout: '70%',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed}`;
                        }
                    }
                }
            }
        }
    });
}

// --- Refund Status Breakdown Bar Chart ---
const refundBarCtx = document.getElementById('season_refund_bar_chart');
if (refundBarCtx) {
    new Chart(refundBarCtx, {
        type: 'bar',
        data: {
            labels: ['Pending', 'Accepted', 'Rejected'],
            datasets: [{
                label: 'Count',
                data: [19, 24, 15],
                backgroundColor: ['#8ed6fb', '#7ed957', '#f76c6c'],
                borderRadius: 6,
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                x: {
                    grid: { color: '#e0e0e0' }
                },
                y: {
                    beginAtZero: true,
                    grid: { color: '#e0e0e0' }
                }
            }
        }
    });
}