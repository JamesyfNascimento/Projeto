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
                $('.alert-danger').removeClass("show");
                $('.alert-success').addClass("show");
            }else{
                $('.alert').alert();
                $('.alert-success').removeClass("show");
                $('.alert-danger').addClass("show");
            }
        },
        error: function(xhr, status, error) {
            alert(error);
        }
    });
 });