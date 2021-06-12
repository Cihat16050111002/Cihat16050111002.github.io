$(document).ready(function () {
    let valid = $("input").jqBootstrapValidation();


    $('.form-group .login_btn').click(() => {
        if(valid[0].validity.valid && valid[1].validity.valid) {
            Swal.fire({
                title: 'Successfull',
                text: 'Logged In Successfully',
                icon: 'success',
                confirmButtonText: 'Confirm'
            }).then(() => window.location.href="index.html");
        }
        else {
            Swal.fire({
                title: 'Error!',
                text: 'Please fill the information correctly',
                icon: 'error',
                confirmButtonText: 'Confirm'
            });
        }
    });
});

