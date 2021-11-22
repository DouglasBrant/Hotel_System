<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Diplomata Hotel</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/scripts.js"></script>

</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
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
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="d-flex justify-content-center">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Entrar em contato</h1>
                        <p class="lead fw-normal text-muted mb-0">Gostaríamos muito de ouvir de você</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                           <form action="/enviar-contato" method="POST"> 
                             @csrf
                            <!-- nome- -->
                               
                            <input type="text" name="nome" placeholder="Nome" value="{{$Contato -> nome}}" >
                               <br>
                               <!-- emial -->
                              
                               <input type="text" name="email" placeholder="Email"value="{{$Contato -> email}}" > 
                               <br>
                               <!-- telefone -->
                              
                               <input type="text" name="numero" placeholder="numero" value="{{$Contato -> numero}}">
                               <br>
                               <!-- Menssagem -->
                               
                               <input type="text" name="mensagem" placeholder="Mensagem" value="{{$Contato -> mensagem}}">
                               <br><br>
                               <button>Enviar</button>

                           </form>                       
                        </div>
                    </div>
                </div>
                <!-- Contact cards-->
                <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                        <div class="h5 mb-2">Converse conosco</div>
                        <p class="text-muted mb-0">Converse ao vivo com um de nossos especialistas de suporte.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                        <div class="h5">Pergunte à comunidade</div>
                        <p class="text-muted mb-0">Explore os fóruns da nossa comunidade e comunique-se com outros usuários.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                        <div class="h5">Centro de Apoio</div>
                        <p class="text-muted mb-0">Navegue pelas perguntas frequentes e artigos de suporte para encontrar soluções.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                        <div class="h5">Ligue para nós</div>
                        <p class="text-muted mb-0">Ligue para nós durante o horário comercial normal em (61) 3392-9403.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Douglas Website 2021</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacidade</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Termos</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contato</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>