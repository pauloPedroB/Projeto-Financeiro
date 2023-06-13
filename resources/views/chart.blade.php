<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Ctrol - Gráficos Teste</title>

    @vite('resources/css/app.css')
    <!-- bootstrap -->
  </head>
<body class="bg-neutral-500/25">
@auth
<section>
  <div class="sidebar bg-neutral-700 mt-[20vh] lg:ml-24 h-[60vh] w-[3.20rem] overflow-hidden rounded-2xl hover:w-56 hover:bg-neutral-700 hover:shadow-2xl">
    <div class="flex h-screen flex-col justify-between pt-2 pb-6">
      <div>
        <div class="w-max p-2.5">
          <img src="/images/ctrol - white - logo.png" class="w-24 -ml-5" alt="">
        </div>
        <ul class="mt-6 space-y-2 tracking-wide">
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-4 hover:bg-gradient-to-r from-yellow-900 to-yellow-200 px-4 py-3 text-white">
              <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-white dark:fill-slate-100"></path>
                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-yellow-200 group-hover:text-yellow-300"></path>
                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-yellow-300"></path>
              </svg>
              <span class="-mr-1 font-bold">Dashboard</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="bg group flex items-center space-x-4 hover:bg-gradient-to-r from-yellow-900 to-yellow-200 px-4 py-3 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-yellow-300 group-hover:text-yellow-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                <path class="fill-current text-gray-100 group-hover:text-yellow-100" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
              </svg>
              <span class="group-hover:text-gray-200 font-bold">Categories</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 hover:bg-gradient-to-r from-yellow-900 to-yellow-200 px-4 py-3 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-yellow-300 group-hover:text-yellow-300" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                <path class="fill-current text-gray-100 group-hover:text-yellow-100" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
              </svg>
              <span class="group-hover:text-gray-200 font-bold">Reports</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 hover:bg-gradient-to-r from-yellow-900 to-yellow-200 px-4 py-3 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-yellow-300 group-hover:text-yellow-300" d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                <path class="fill-current text-gray-100 group-hover:text-yellow-100" d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
              </svg>
              <span class="group-hover:text-gray-200 font-bold">Other data</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 hover:bg-gradient-to-r from-yellow-900 to-yellow-200 px-4 py-3 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path class="fill-current text-yellow-300 group-hover:text-yellow-300" d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                <path class="fill-current text-gray-100 group-hover:text-yellow-100" fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
              </svg>
              <span class="group-hover:text-gray-200 font-bold">Finance</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 hover:bg-gradient-to-r from-yellow-900 to-yellow-200 px-4 py-3 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300 group-hover:fill-yellow-100" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
              </svg>
              <span class="group-hover:text-gray-200 font-bold">Settings</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="text-white">
    {{ $user->name }}
    </div>
  </div>
</section>
@endauth
<script>
    const labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    const data = {
    labels: labels,
    datasets: [{
      label: 'Saldo',
      data: [2,122,4,10,21,7,25],
      borderColor: 'rgba(0, 220, 0, 0.3)',
      backgroundColor: 'rgba(0, 220, 0, 0.2)',
      fill: false,
      tension: 0.2
    },
    {
      label: 'Gasto',
      data: [2,12,4,10,21,7,25],
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