<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Ctrol - Gráficos Teste</title>
</head>
<body>
@auth
{{$user->balance}}
<div style="width: 800px;">
  <canvas id="balanceMonths"></canvas>
</div>

<div style="width: 800px; height: 600px;">
  <canvas id="categoryResume"></canvas>
</div>
@endauth
<script>
    const labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    const data = {
    labels: labels,
    datasets: [{
      label: 'Saldo',
      data: JSON.parse('<?php $balance; ?>'),
      borderColor: 'rgba(0, 220, 0, 0.3)',
      backgroundColor: 'rgba(0, 220, 0, 0.2)',
      fill: false,
      tension: 0.2
    },
    {
      label: 'Gasto',
      data: JSON.parse('<?php $debt ?>'),
      borderColor: 'rgba(255, 0, 0, 0.3)',
      backgroundColor: 'rgba(255, 0, 0, 0.2)',
      fill: false,
      tension: 0.2
    }]
    };

   const config = {
    type: 'line',
    data: data,
    };

    var myChart = new Chart(
        document.getElementById('balanceMonths'),
        config
    );

    // divisão graficos //
    const labelsCategory = ['TV / Internet / Telefone ', 'Moradia', 'Supermercado', 'Bares e restaurantes / Delivery', 'Lazer', 'Transporte', 'Saúde e beleza', 'Contas Fixas'];
    const dataCategory = {
    labels: labelsCategory,
    datasets: [{
        label: 'Gastos por Categorias',
        data: JSON.parse('<?php $categories ?>'),
        backgroundColor: [
        'rgb(30,144,255)',
        'rgb(220,20,60)',
        'rgb(128,0,128)',
        'rgb(255,140,0)',
        'rgb(0,128,128)',
        'rgb(34,139,34)',
        'rgb(139,69,19)',
        'rgb(255,255,0)',
        ],
        hoverOffset: 4
    }]
    };

    const configCategory = {
    type: 'bars',
    data: dataCategory,
    };

    var myChart = new Chart(
        document.getElementById('categoryResume'),
        configCategory 
    );
</script>
 

 
</body>
</html>