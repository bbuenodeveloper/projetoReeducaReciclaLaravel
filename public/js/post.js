$(function(){
    $('#myform').submit(function(e){
        var route = $('#myform').data('route');
        var myform = $(this);

        $.ajax({
            type: 'POST',
            url: route,
            data: myform.serialize(),
            success: function (executeSweet) {

                    Swal.fire({
                    type: 'success',
                    text: 'Cadastro realizado com sucesso!',

                    });

            }


        });
            // e.preventDefault();

    });





});
