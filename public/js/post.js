$(function(){
    $('#myform').submit(function(e){
        e.preventDefault();
        var route = document.querySelector('#myform').attributes.dataroute.value;
        var myform = document.querySelector('#myform');

        let dados = new FormData(myform);


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
