$(document).ready(function() {
    $('#calcular').click(function() {
      var entrada = $('#entrada').val();
      var saida = $('#saida').val();

      if (entrada && saida) {
        var diferenca = (new Date(saida) - new Date(entrada)) / 1000 / 60 / 60; // em horas
        $('#resultado').text('A diferença é de ' + diferenca + ' horas.');
      } else {
        $('#resultado').text('Por favor, preencha os campos de entrada e saída.');
      }
    });
  });