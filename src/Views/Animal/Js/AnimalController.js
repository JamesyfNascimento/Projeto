$(function() {
    // Handler for .ready() called.
});

$(document).on("submit", "#form-cad-animal",function(e){
    e.preventDefault();
    var postURL = "../../Controllers/AnimalController.php?action=Adicionar";
    alert("aaaaa");
    $.ajax({
        type: "POST",
        url: postURL,
        data: $("#form-cad-animal").serialize(),
        success: function(data){
            alert(data);

            var result = JSON.parse(data);
            if(result.success){
                alert("Animal adicionado com sucesso!!! :)");
            }else{
                alert("Erro ao adicionar um animal!!! :(");
            }
        },
        error: function(xhr, status, error) {
            alert(error);
        }
    });
 });