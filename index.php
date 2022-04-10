<!DOCTYPE html>
<html lang="PT-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Salemzinho Portfólio</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>

<div class="jumbotron banner-home">
    <nav class="navbar navbar-expand-lg bg-navbar shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand me-2 mt-1" href="/">
                <h4 id="logo"><b class="cor-verde">Salem</b>zinho</h4>
            </a> 
            <button class="navbar-toggler bg-dark" data-bs-toggle="collapse" data-bs-target="#navbar">
                <i class="fas fa-bars" style="color: white;"></i>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="m-auto">
                        <a href="#projetos" class="me-4 text-white efeito-hover-menu">
                            Projetos
                        </a>
                    </li>
                    <li class="m-auto">
                        <a href="#redes-sociais" class="me-4 text-white efeito-hover-menu">
                            Redes Sociais
                        </a>
                    </li>
                    <a class="btn btn-dark px-3" href="https://github.com/Salemzinho" role="button"><i class="fab fa-github"></i></a>

                </ul>
            </div>
        </div>
    </nav>

    <br><br><br><br><br><br><br>

    <div class="container">
        <h2 class="banner-titulo">Bem vindo!</h2>
        <h1 class="banner-titulo">Me chamo <b class="cor-verde">Luan Costa</b></h1>
        <h3 class="typewriter">E sou um <b class="cor-verde">Desenvolvedor</b></h3>
        <hr class="my-4 col-6">
        <p>Vem dar uma olhada nos projetos que andei realizando por ai :)</p>
        <button class="mt-5 btn-identidade">
            <span>Clique aqui</span>
        </button>
    </div>

    <br><br><br><br><br><br><br><br><br><br>

</div>


<div class="jumbotron section-projetos" id="projetos">
    <div class="container">
        <br><br><br><br>
        <h2 class="text-white text-center headline">Meus Projetos</h2>
        <br><br><br><br>
        <div class="col-12">
            <div class="row">
                <div class="col-sm-4 mb-5">
                    <div class="card card-projeto p-3 rounded-0 punchline">
                        <div class="card-body">
                            <h5 class="text-left text-white mb-5">blueDenounces</h5>
                            <p class="card-text text-muted">💙 Website voltado para denunciar de forma menos burocrática os usuários que compartilham pornografia infantil no Twitter, ajude a causa!</p>
                            <button class="mt-4 col-12 btn-identidade-card">
                                <span>GitHub</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-5">
                    <div class="card card-projeto p-3 rounded-0 punchline">
                        <div class="card-body">
                            <h5 class="text-left text-white mb-5">LaraCRUD</h5>
                            <p class="card-text text-muted">👨🏻‍💻 O LaraCRUD é uma reimaginação do Crud feito em Laravel baseado no projeto realizado por Douglas Carlos Men nos artigos da Imasters.</p>
                            <button class="mt-4 col-12 btn-identidade-card">
                                <span>GitHub</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-5">
                    <div class="card card-projeto p-3 rounded-0 punchline">
                        <div class="card-body">
                            <h5 class="text-left text-white mb-5">ImóvelP</h5>
                            <p class="card-text text-muted">🧡 Proptech que descomplica a preparação e divulgação do imóvel para o proprietário e a forma de captar imóveis para corretores. Atuo nela como desenvolvedor estágiario. </p>
                            <button class="mt-4 col-12 btn-identidade-card">
                                <span>Site <i class="fa-regular fa-rocket-launch"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
</div>

<div class="jumbotron section-redes-sociais" id="redes-sociais">
    <div class="container">
        <br><br><br><br>
        <h2 class="text-white text-center">Minhas Redes Sociais</h2>
        <br><br><br><br><div class="col-12">
            <div class="row">
                <div class="col-sm-3 mb-5 text-center bloco-redes-sociais p-4 redes-um">
                    <a href="">
                        <i class="fa-brands fa-instagram fa-5x"></i>
                    </a>
                    <p class="text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cumque id ratione eaque aliquam consequatur quo! Voluptates enim place</p>
                </div>
                <div class="col-sm-3 mb-5 text-center bloco-redes-sociais p-4 redes-dois">
                    <a href="">
                        <i class="fa-brands fa-linkedin-in fa-5x"></i>
                    </a>
                    <p class="text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cumque id ratione eaque aliquam consequatur quo! Voluptates enim place</p>
                </div>
                <div class="col-sm-3 mb-5 text-center bloco-redes-sociais p-4 redes-tres">
                    <a href="">
                        <i class="fa-brands fa-discord fa-5x"></i>
                    </a>
                    <p class="text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cumque id ratione eaque aliquam consequatur quo! Voluptates enim place</p>
                </div>
                <div class="col-sm-2 mb-5 text-center p-4">
                    <a href="">
                        <img src="/assets/img/perfil.jpg" alt="" width="250" height="250">
                    </a>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
</div>

<footer class="col-12">
    <div class="text-light container">
        <div class="d-flex">
            © 2022 Copyright:
            <a class="font-weight-bold" href="#">Salemzinho</a>
        </div>

        <div class="d-flex">
            <a href="#">
                <i class="fa-brands fa-instagram fa-2x"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-linkedin-in fa-2x"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-discord fa-2x"></i>
            </a>
        </div>
    </div>
</footer>


<script src="/assets/js/main.js"></script>
</body>
</html>