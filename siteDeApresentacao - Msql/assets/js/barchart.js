var data = {
    labels: ["Validação", "Inclusão CB", "Ag. Aprovação PL", "Inclusão CI", "Aprovadas", "Negadas","Erro"],
    datasets: [
      {
        label: "",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#E8CB23","#7FF400"],
        data: [2.5,1.8,1.5,1.2,1.0,2,3.3]
      }
    ]
  };
  var meuGrafico = new Chart(document.getElementById("meu-grafico"), {
    type: 'bar',
    data: data,
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  