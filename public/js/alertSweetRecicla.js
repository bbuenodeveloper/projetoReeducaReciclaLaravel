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
    text: 'Tente Novamente!',

    })
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
