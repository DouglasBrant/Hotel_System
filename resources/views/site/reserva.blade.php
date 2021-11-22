<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <script src="/resources/js/bootstrap.js"></script>
</head>

<body>
  <main class="flex-shrink-0">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container px-5">
        <a class="navbar-brand" href="index.html">Diplomata Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/sobre">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="/planos">Planos</a></li>
            <li class="nav-item"><a class="nav-link" href="/home">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/reserva">Reserva</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                <li><a class="dropdown-item" href="/overview">Portfolio Overview</a></li>
                <li><a class="dropdown-item" href="/portfolio">Portfolio Item</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </nav>
      <div class="container">
        <div class="row">
          <form action="/confirma reserva" method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <!-- Endereço -->
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" name="Endereço" placeholder="Rua dos Bobos, nº 0">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- Cidade -->
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" name="Cidade">
              </div>
              <div class="form-group col-md-2">
                <!-- CEP -->
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" name="Cep">
              </div>
              <div class="form-group col-md-2">
                <!-- CPF -->
                <label for="inputCEP">CPF</label>
                <input type="text" class="form-control" name="Cpf">
              </div>
            </div>
        </div>
        <div class="card">
          <p>check in </p>
          <input id="date" type="date" name="DataEntrada">
          <P>check out</P>
          <input id="date" type="date" name="DataSaida">
          <div class="form-group">
          </div>
          <div class="card">
            <div class="form-group col-md-4">
              <div class="form-check">
                <label class="form-check-label" for="Premium">
                  PREMIUM
                </label>
                <input type="text" class="form-control" name="Premium" placeholder="Premium">
              </div>
              <div class="form-check">
                <label class="form-check-label" for="Luxo">
                  LUXO
                </label>
                <input type="text" class="form-control" name="Luxo" placeholder="Luxo">
              </div>
              <div class="form-check">
                <label class="form-check-label" for="Master">
                  MASTER
                </label>
                <input type="text" class="form-control" name="Master" placeholder="Master">
              </div>
            </div>
          </div>
          <div class="card">
            <div class="form-group col-md-4">
              <div class="form-check">
                <label class="form-check-label" for="CafeDaManha">
                  CafeDaManha
                </label>
                <input type="text" class="form-control" name="CafeDaManha" placeholder="CafeDaManha">
              </div>
              <div class="form-check">
                <label class="form-check-label" for="Lazer">
                  Lazer
                </label>
                <input type="text" class="form-control" name="Lazer" placeholder="Lazer">
              </div>
              <div class="form-check">
                <label class="form-check-label" for="Itinerarios">
                  Itinerarios
                </label>
                <input type="text" class="form-control" name="Itinerarios" placeholder="Itinerarios">
              </div>
              <div class="form-check">
                <label class="form-check-label" for="Frigobar">
                  Frigobar
                </label>
                <input type="text" class="form-control" name="Frigobar" placeholder="Frigobar">
              </div>
              <label for="inputCEP">Forma de pagamento</label>
              <input type="text" class="form-control" placeholder="credito" name="FormaDePagamento">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button>
          <input type="hidden" value="reserva">

          </form>
        </div>
      </div>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>