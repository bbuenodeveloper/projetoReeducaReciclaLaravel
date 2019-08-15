$(function(){
    $('#myform2').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#myform2').attributes.dataroute.value;
        var myform = document.querySelector('#myform2');

        let dados = new FormData(myform2);


        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            url: route,
            data: dados,
            success: function() {

                    executeSweet();


            },
            error : function() {
                executeSweetError();
            }


        });


    });





});
