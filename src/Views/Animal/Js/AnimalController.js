$(function(e) {
    listarTodosAnimais();
});

$(document).on("submit", "#form-cad-animal",function(e){
    e.preventDefault();

    var postURL = "../../Controllers/AnimalController.php?action=Adicionar";
    $.ajax({
        type: "POST",
        url: postURL,
        data: $("#form-cad-animal").serialize(),
        success: function(data){
            var result = JSON.parse(data);

            if(result.success){
                $('.alert').alert();
                var mensagem = "Cadastrado com sucesso!!!"
                $('.alert-success p').html(mensagem);
                $('.alert-danger').removeClass("show");
                $('.alert-success').addClass("show");
                $('#cadAnimal').modal('hide');
                listarTodosAnimais();
            }else{
                $('.alert').alert();
                var mensagem = "Erro ao cadastrar!!!"
                $('.alert-danger p').html(mensagem);
                $('.alert-success').removeClass("show");
                $('.alert-danger').addClass("show");
            }
        },
        error: function(xhr, status, error) {
            alert(error);
        },
        complete: function(){
            setTimeout(function(){ 
                $('.alert-danger').removeClass("show");
                $('.alert-success').removeClass("show");    
            }, 3000);
           
        }
    });
 });


 $(document).on("click", "#remover",function(e){
    e.preventDefault();
    var idAnimal = $(this).attr("data-idAnimal");
    var postURL = "../../Controllers/AnimalController.php?action=Remover";

    if(idAnimal != -1){
        $.ajax({
            type: "POST",
            url: postURL,
            data: { id: idAnimal},
            success: function(data){
                var result = JSON.parse(data);
    
                if(result.success){
                    $('.alert').alert();
                    var mensagem = "Removido com sucesso, redirecionando para a página inicial!!!"
                    
                    $('.alert-success p').html(mensagem);
                    $('.alert-danger').removeClass("show");
                    $('.alert-success').addClass("show");

                    setTimeout(function(){ 
                        window.location.href = "../Inicio/";  
                    }, 1000);
                }else{
                    $('.alert').alert();
                    var mensagem = "Erro ao remover!!!"
                    $('.alert-danger p').html(mensagem);
                    $('.alert-success').removeClass("show");
                    $('.alert-danger').addClass("show");
                }
            },
            error: function(xhr, status, error) {
                alert(error);
            },
            complete: function(){
                setTimeout(function(){ 
                    $('.alert-danger').removeClass("show");
                    $('.alert-success').removeClass("show");    
                }, 3000);
               
            }
        });
    }
 });

 function listarTodosAnimais(){
    var postURL = "../../Controllers/AnimalController.php?action=ListarTodos";

    $.ajax({
        type: "POST",
        url: postURL,
        data: "{ Listar: ListarTodos}",
        success: function(data){
            var result = JSON.parse(data);
            var listaAnimaisHtml = "<div class='row'>";
            if(result.length > 0){
                result.forEach(function(animal){
                    listaAnimaisHtml += "<div class='col-md-4'>" +
                    "<div class='card mb-4 box-shadow'>"+
                        "<img class='card-img-top' src='../../Assets/Img/cao.jpg' alt='Card image cap'>"+
                        "<div class='card-body'>"+
                            "<h1>" + animal.NOME + "</h1>"+
                           "<p class='card-text'>" + animal.HISTORICO + "</p>"+
                            "<div class='d-flex justify-content-between align-items-center'>"+
                               "<div class='btn-group'>"+
                                    "<form id='form-view-animal' method='post' action='../Animal/index.php'>" +
                                        "<input type='hidden' name='ID' value='" + animal.ID + "'/>"+
                                        "<input type='hidden' name='NOME' value='" + animal.NOME + "'/>"+
                                        "<input type='hidden' name='ESPECIE' value='" + animal.ESPECIE + "'/>"+
                                        "<input type='hidden' name='SITUACAO' value='" + animal.SITUACAO + "'/>"+
                                        "<input type='hidden' name='GENERO' value='" + animal.GENERO + "'/>"+
                                        "<input type='hidden' name='HISTORICO' value='" + animal.HISTORICO + "'/>"+
                                        "<input type='hidden' name='DATANASCIMENTO' value='" + animal.DATANASCIMENTO + "'/>"+
                                        "<input type='hidden' name='RACA' value='" +animal.RACA  + "'/>"+
                                        //"<a href=../Animal/index.php?ID=" + animal.ID + "&NOME=" + animal.NOME + "&ESPECIE=" + animal.ESPECIE + "&GENERO=" + animal.GENERO + "&HISTORICO=" + animal.HISTORICO + "&RACA=" + animal.RACA + "&SITUACAO=" + animal.SITUACAO + " id='btnDetalhesAnimal' class='btn btn-sm btn-outline-secondary'>Ver Detalhes</a>"+
                                        "<button type='submit' id='btnDetalhesAnimal' class='btn btn-sm btn-outline-secondary'>Ver Detalhes</a>"+
                                        
                                        "<button type='button' class='btn btn-sm btn-outline-danger' data-toggle='modal' data-target='#exampleModalLong'>Agendar Visíta</button>"+
                                    "</form>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                    "</div>"+
                "</div>"
                });
                listaAnimaisHtml += "</div>"
            }else{
                listaAnimaisHtml = "<h1 class='text-center'>Nenhum animal encontrado!!! :(</h1>"
            }
            $("#listagemAnimal").html(listaAnimaisHtml);
            
        },
        error: function(xhr, status, error) {
            alert(error);
        }
    });    
}


 function getAnimal(idAnimal){
    var postURL = "../../Controllers/AnimalController.php?action=GetAnimal";
    if(idAnimal != -1){
        var animal = null;
        $.ajax({
            type: "POST",
            url: postURL,
            data: { id: idAnimal},
            success: function(data){
                animal = JSON.parse(data);
            },
            error: function(xhr, status, error) {
                alert(error);
            },
            complete: function(a){
                setTimeout(function(){ 
                    $('.alert-danger').removeClass("show");
                    $('.alert-success').removeClass("show");    
                }, 3000);
               
            }
        });
        
    }
 }
