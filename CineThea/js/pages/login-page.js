$(document).ready(function () {
    let valid = $("input").jqBootstrapValidation();


    $('#form-submit').click(() => {
        Swal.fire({
            title: 'Successfull',
            text: 'Logged In Successfully',
            icon: 'success',
            confirmButtonText: 'Confirm'
        }).then(() => window.location.reload());

    });
});

