<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Ctrol - Gráficos Teste</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
<body>
@auth

<div class="container-fluid text-white">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="/images/ctrol - white - logo.png" alt="Logo Ctrol na cor branca!" class="bg-transparent img-fluid fs-5 d-none d-sm-inline">
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Orders</span></a>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap text-white"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
          @json($saldo)
          <div style="width: 800px;">
            <canvas id="balanceMonths"></canvas>
          </div>

          <div style="width: 800px; height: 600px;">
            <canvas id="categoryResume"></canvas>
          </div>
        </div>
    </div>
</div>
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
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>