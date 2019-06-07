<?php ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>AnimalHelp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../Assets/Css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Assets/Css/style.css">

        <script type="text/javascript" src="../../Assets/Js/jquery-3.4.1.min.js"></script>  
        <script type="text/javascript" src="../../Assets/Js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../Animal/Js/AnimalController.js"></script>                                                    

</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre nós</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et placerat tellus. Curabitur tempus scelerisque purus. Mauris sed lobortis nibh. Integer lectus felis, iaculis vel eros nec, blandit faucibus augue.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contato</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Twitter</a></li>
                            <li><a href="#" class="text-white">Facebook</a></li>
                            <li><a href="#" class="text-white">Email</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Início</a></li>
                            <li><a href="#" class="text-white">Mural de Informações</a></li>
                            <li><a href="#" class="text-white">Denuncia</a></li>
                            <li><a href="#" class="text-white">Entre em Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                        </path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Bem Vindo </strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main id="main" role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">AnimalHelp</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et placerat
                    tellus. Curabitur tempus scelerisque purus. Mauris sed lobortis nibh. Integer lectus felis, iaculis
                    vel eros nec, blandit faucibus augue.</p>
                <p>
                <button type="button" class="btn btn-secondary my-2" data-toggle="modal" data-target="#cadAnimal">
                    Cadastrar Animal
                </button>
            </div>
        </section>

        <!-- FILTRO -->
        <!-- <div class="container" id="filtro">
                <h1 class="text-center mt-5 mb-5">Encontre o seu novo amor aquí!!!</h1>

            <form class="mb-5">
                <div class="form-row">
                    <div class="form-group col-md-3 col-xs-12">
                        <label for="inputCity">Cidade</label>
                        <select id="inputState" class="form-control">
                            <option selected>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-xs-12">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control">
                            <option selected>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-xs-12">
                        <label for="inputZip">Ong's</label>
                        <select id="inputState" class="form-control">
                            <option selected>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-xs-12">
                        <label for="inputZip">Sexo</label>
                        <select id="inputState" class="form-control">
                            <option selected>...</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary float-right">Filtrar</button>
            </form>
        </div> -->

        <!-- LISTAGEM DOS ANIMAIS -->
        <div class="album py-5 bg-light">
            <div id="listagemAnimal" class="container">
            </div>
        </div>

    </main>

    

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">ir ao topo</a>
            </p>
            <p>AnimalHelp &copy; Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p>Novo no Animalhelp? <a href="../../">Visite nosso guia</a> leia mais
        </div>
    </footer>

    <!-- NOTIFICAÇÃO -->
    <div class="alerta col-6">
        <div class="float-right alert alert-success alert-dismissible fade" role="alert">
            <p></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="float-right alert alert-danger alert-dismissible fade" role="alert">
            <p></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <!-- Modal CADASTRAR UM ANIMAL-->
    <div class="modal fade" id="cadAnimal" tabindex="-1" role="dialog" aria-labelledby="cadAnimalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cadAnimalModalLabel">Cadastrar Animal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="space-block-50">
                    <form id="form-cad-animal" method="Post">
                        <div class="form-group row">
                            <label for="nome" class="col-3 col-form-label col-form-label">Nome:</label>
                            <div class="col-9">
                                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="especie" class="col-3 col-form-label col-form-label">Especie:</label>
                            <div class="col-9">
                                <input class="form-control" type="text" id="especie" name="especie" placeholder="Especie" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="genero" class="col-3 col-form-label col-form-label">Genero:</label>
                            <div class="col-9">
                                <div class="row nm">
                                    <div class="col-6 form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="exampleRadios2" value="M" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Macho
                                        </label>
                                    </div>
                                    <div class="col-6 form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="exampleRadios2" value="F" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Fêmea
                                        </label>
                                    </div>
                                </div>                                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="situacao" class="col-3 col-form-label col-form-label">Situacao:</label>
                            <div class="col-9">
                            <div class="row nm">
                                    <div class="col-4 form-check">
                                        <input class="form-check-input" type="radio" name="situacao" id="exampleRadios2" value="Adotado" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Adotado
                                        </label>
                                    </div>
                                    <div class="col-4 form-check">
                                        <input class="form-check-input" type="radio" name="situacao" id="exampleRadios2" value="Para Adotar" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Para Adotar
                                        </label>
                                    </div>
                                    <div class="col-4 form-check">
                                        <input class="form-check-input" type="radio" name="situacao" id="exampleRadios2" value="Na Rua" required>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Na Rua
                                        </label>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dataNascimento" class="col-3 col-form-label col-form-label">Nascimento:</label>
                            <div class="col-9">
                                <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="raca" class="col-3 col-form-label col-form-label">Raça:</label>
                            <div class="col-9">
                                <input class="form-control" type="text" id="raca" name="raca" placeholder="Raça" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="historico" class="col-3 col-form-label col-form-label">Historico:</label>
                            <div class="col-9">
                                <textarea class="form-control" id="historico" name="historico" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-dark float-right" type="submit" value="Cadastrar" />              
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>