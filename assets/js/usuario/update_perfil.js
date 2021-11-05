$('#update_perfil_datos').click(function() {
    var
        nombre = $('#nombre').val(),
        cell = $('#cell').val(),
        email = $('#email').val(),
        id = $('#id').val();

    $.ajax({
        dataType: 'json',
        url: baseurl + '/Usuario/update_perfilDatos',
        type: 'POST',
        dataType: 'json',
        data: {
            nombre,
            cell,
            email,
            id
        },
        dataType: 'json',
        before: function() {},
        success: function(data) {
            if (data.success === 1) {
                let timerInterval
                Swal.fire({
                    icon: 'info',
                    title: 'Actualizando..!',
                    timer: 1500,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 75)
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                        document.location.href = baseurl + '/DashboardCliente/';
                    }
                })

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'No se pudo Actualizar',
                    type: 'error',
                    showConfirmButton: false,
                    timer: 1500,
                    animation: false,
                    customClass: {
                        popup: 'animated flipInY'
                    }
                })
            }
        },
        error: function(e) {
            console.log(e);
        }
    });

});

$('#update_perfil_pass').click(function() {
    var
        pass = $('#pass').val(),
        id = $('#id').val();

    $.ajax({
        dataType: 'json',
        url: baseurl + '/Usuario/update_perfilPass',
        type: 'POST',
        dataType: 'json',
        data: {
            pass,
            id
        },
        dataType: 'json',
        before: function() {},
        success: function(data) {
            if (data.success === 1) {
                let timerInterval
                Swal.fire({
                    icon: 'info',
                    title: 'Actualizando..!',
                    timer: 1500,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 75)
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                        document.location.href = baseurl + '/DashboardCliente/';
                    }
                })

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'No se pudo Actualizar',
                    type: 'error',
                    showConfirmButton: false,
                    timer: 1500,
                    animation: false,
                    customClass: {
                        popup: 'animated flipInY'
                    }
                })
            }
        },
        error: function(e) {
            console.log(e);
        }
    });

});

///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////

$('#update_usuario').click(function() {
    var
        nombre = $('#floating_nombre').val(),
        cell = $('#floating_cell').val(),
        email = $('#floating_email').val(),
        pass = $('#floating_pass').val(),
        id = $('#floating_id').val(),
        tipo = $('#floating_tipo').val();

    $.ajax({
        dataType: 'json',
        url: baseurl + '/Usuario/actualizarUsuario',
        type: 'POST',
        dataType: 'json',
        data: {
            nombre,
            cell,
            email,
            pass,
            id,
            tipo
        },
        dataType: 'json',
        before: function() {},
        success: function(data) {
            if (data.success === 1) {
                let timerInterval
                Swal.fire({
                    icon: 'info',
                    title: 'Actualizando..!',
                    timer: 1500,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 75)
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                        document.location.href = baseurl + '/Usuario';
                    }
                })

            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'No se pudo Actualizar',
                    type: 'error',
                    showConfirmButton: false,
                    timer: 1500,
                    animation: false,
                    customClass: {
                        popup: 'animated flipInY'
                    }
                })
            }
        },
        error: function(e) {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'No se pudo Actualizar, Hay un error interno',
                text: (e),
                type: 'error',
                showConfirmButton: false,
                timer: 1500,
                animation: false,
                customClass: {
                    popup: 'animated flipInY'
                }
            })
        }
    });

});