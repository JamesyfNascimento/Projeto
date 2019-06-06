<?php ?>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
    <html lang="pt-br">
      
        <head>
        <title>Perfil Animal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../Assets/Css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Assets/Css/style.css">

        <script type="text/javascript" src="../../Assets/Js/jquery-3.4.1.min.js"></script>  
        <script type="text/javascript" src="../../Assets/Js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./Js/AnimalController.js"></script>                                                    


        </head>
        <body>
            <header>
                <div class="collapse bg-dark" id="navbarHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-7 py-4">
                                <h4 class="text-white">Sobre nós</h4>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et placerat
                                    tellus. Curabitur tempus scelerisque purus. Mauris sed lobortis nibh. Integer lectus felis,
                                    iaculis vel eros nec, blandit faucibus augue.</p>
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
                                    <li><a href="../Inicio/" class="text-white">Início</a></li>
                                    <li><a href="#" class="text-white">Mural de Informações</a></li>
                                    <li><a href="#" class="text-white">Denuncia</a></li>
                                    <li><a href="#" class="text-white">Entre em Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-dark bg-dark box-shadow">
                    <div class="container">
                            <a href="home.html" class="navbar-brand">
                                    <strong>Início</strong>
                                </a>
                                <a class="navbar-brand text-white"><strong>|</strong></a>
                                <a href="#" class="navbar-brand">
                                    <strong>Cadastrar Animal </strong>
                                </a>
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarHeader"
                            aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </header>
            <hr>
            <div class="container bootstrap snippet">
                <div class="row">
                    <div class="col-sm-10 align-middle space-block-50"><h1>Perfil do Animal</h1></div>
                </div>
            </div> 

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-3 nmr npr">
                            <div class="card">
                                <img class="card-img-top" src="../../Assets/Img/cao.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Bidú</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-body">
                                    <button id="remover" type="button" class="btn btn-danger btn-block">Remover</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <ul class="nav nav-tabs" id="animalTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="perfil-animal-tab" data-toggle="tab" href="#perfil-animal" role="tab" aria-controls="perfil-animal" aria-selected="true">Perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contato-animal-tab" data-toggle="tab" href="#contato-animal" role="tab" aria-controls="contato-animal" aria-selected="false">Contato</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="animalTabContent">
                                <div class="tab-pane fade show active" id="perfil-animal" role="tabpanel" aria-labelledby="perfil-animal-tab">
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
                                            <input class="btn btn-dark float-right" type="submit" value="Atualizar" />
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="contato-animal">
                                    dd
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="alerta">
                <div class="col-8 float-right alert alert-success alert-dismissible fade" role="alert">
                    <strong>Cadastrado com sucesso!</strong> você está contribuindo para que não exista animais abandonados.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="col-6 float-right alert alert-danger alert-dismissible fade" role="alert">
                    <strong>Erro ao cadastrar!</strong> não foi possivel cadastrar o animal :(
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            
        </body>
        </html>
<body>

     
    




