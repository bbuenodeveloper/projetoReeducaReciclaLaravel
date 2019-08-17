function executeSweet(){
    Swal.fire({
        type: 'success',
        text: 'Cadastro realizado com sucesso!',
    })
}

function executeSweetError(){
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Preencha todos os campos para enviar o formulário',
    })
}

function executeSweetErrorNews(){
    let nameN = document.getElementById('nameNews');
    let emailN = document.getElementById('emailNews');

    if(nameN.value == "" || emailN.value == ""){
        if(nameN.value == "" && emailN.value == ""){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Preencha os campos',
            })
        }
        else if(nameN.value == ""){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Preencha seu nome',
            })
        } else if(emailN.value == "") {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Preencha seu email',
            })
        }
        } else {
            Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Email já cadastrado',
            })
        }
}


//                     const Toast = Swal.mixin({
//   toast: true,
//   position: 'top-end',
//   showConfirmButton: false,
//   timer: 3000
// })

// Toast.fire({
//   type: 'success',
//   title: 'Signed in successfully'
// })
