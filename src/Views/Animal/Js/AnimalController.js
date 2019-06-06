$(function() {
    // Handler for .ready() called.
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
                    var mensagem = "Removido com sucesso!!!"
                    $('.alert-success p').html(mensagem);
                    $('.alert-danger').removeClass("show");
                    $('.alert-success').addClass("show");
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
            }
        });
    }
 });