<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

  <nav class="navbar" style="background-color: #FF7D00;">
    <div class="container">
      <a href="index.php" class="logo"><img src="./img/logo.png" alt="" srcset="" width="50px"> INC Empreendimentos</a>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Serviços</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
      <button class="nav-toggle" aria-label="Toggle navigation">
        <span class="hamburger"></span>
      </button>
    </div>
  </nav>

  <div class="container main-content">
    <h1>Bem-vindo à nossa página inicial!</h1>
    <p>Explore nossos serviços e entre em contato para mais informações.</p>
    <div class="container-btn">
      <button class="button type1" id="cadastro-vendas-btn">
        <span class="btn-txt">Cadastro de Vendas</span>
      </button>
      <button class="button type1" id="relatorio-cliente-btn">
        <span class="btn-txt">Consultar Clientes</span>
      </button>
      <button class="button type1" id="relatorio-contrato-btn">
        <span class="btn-txt">Consultar Contratos</span>
      </button>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<script>
  $("#cadastro-vendas-btn").on('click', function() {
    window.location.href = 'form_vendas.php';
  });

  $("#relatorio-cliente-btn").on('click', function() {
    window.location.href = 'relatorio_cliente.php';
  });

  $("#relatorio-contrato-btn").on('click', function() {
    window.location.href = 'relatorio.php';
  });
</script>

</html>