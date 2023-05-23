
var data = {
  labels: ["10hs", "11hs", "12hs", "13hs", "14hs", "15hs", "16hs","17hs","18hs"],
  datasets: [
    /*{
      label: "Validação",
      data: [12, 19, 3, 5, 2, 3, 9],
      fill: false,
      borderColor: "rgb(75, 192, 192)",
      lineTension: 0.1
    },
    {
      label: "Inclusão CB",
      data: [5, 7, 8, 10, 6, 9, 34],
      fill: false,
      borderColor: "rgb(255, 99, 132)",
      lineTension: 0.1
    },
    {
      label: "Inclusão PL",
      data: [20, 15, 18, 22, 25, 21, 23],
      fill: false,
      borderColor: "rgb(54, 162, 235)",
      lineTension: 0.1
    },
    {
      label: "Ag. Aprovação PL",
      data: [8, 10, 6, 9, 12, 15, 11],
      fill: false,
      borderColor: "rgb(33, 205, 86)",
      lineTension: 0.1
    },{
      label: "Inclusão CI",
      data: [19, 5, 13, 15, 5, 3, 4],
      fill: false,
      borderColor: "rgb(23, 192, 192)",
      lineTension: 0.1
    },*/
    {
      label: "Aprovadas",
      data: [2, 3, 4, 10, 12, 5, 17],
      fill: false,
      borderColor: "rgb(187, 99, 132)",
      lineTension: 0.1
    },
    {
      label: "Negadas",
      data: [12, 4, 13, 22, 19, 9, 3],
      fill: false,
      borderColor: "#E8CB23",
      lineTension: 0.1
    },
    {
      label: "Erro",
      data: [3, 10, 5, 7, 13, 12, 7],
      fill: false,
      borderColor: "rgb(255, 43, 86)",
      lineTension: 0.1
    }
    // Adicione aqui mais 4 objetos com suas próprias labels, dados e cores
  ]
};

var options = {
  responsive: false,
  maintainAspectRatio: false,
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
};
var ctx = document.getElementById("lineChart").getContext("2d");
var myChart = new Chart(ctx, {
  type: "line",
  data: data,
  options: options,
  
});



// function drawChart() {

// var data = new google.visualization.DataTable();
// data.addColumn('number', 'Day');
// data.addColumn('number', 'Guardians of the Galaxy');
// data.addColumn('number', 'The Avengers');
// data.addColumn('number', 'Transformers: Age of Extinction');

// data.addRows([
//   [1,  37.8, 80.8, 41.8],
//   [2,  30.9, 69.5, 32.4],
//   [3,  25.4,   57, 25.7],
//   [4,  11.7, 18.8, 10.5],
//   [5,  11.9, 17.6, 10.4],
//   [6,   8.8, 13.6,  7.7],
//   [7,   7.6, 12.3,  9.6],
//   [8,  12.3, 29.2, 10.6],
//   [9,  16.9, 42.9, 14.8],
//   [10, 12.8, 30.9, 11.6],
//   [11,  5.3,  7.9,  4.7],
//   [12,  6.6,  8.4,  5.2],
//   [13,  4.8,  6.3,  3.6],
//   [14,  4.2,  6.2,  3.4]
// ]);

// var options = {
//   chart: {
//     title: 'Box Office Earnings in First Two Weeks of Opening',
//     subtitle: 'in millions of dollars (USD)'
//   },
//   width: 900,
//   height: 500
// };

// var chart = new google.charts.Line(document.getElementById('lineChart'));

// chart.draw(data, google.charts.Line.convertOptions(options));
// }