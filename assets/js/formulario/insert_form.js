/* ----------------------------------------------------- */
/* ----------------------------------------------------- */
// funcion para reutilzar el maquetado de mensajes de alerta

function mensajeAlerta($icono, $texto) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: $icono,
        title: $texto
    })
}

$('#registro_formulario').click(function () {
    var
        nombre = $('#r_nombre').val(),
        email = $('#r_email').val(),
        cell = $('#r_cell').val(),
        pass = $('#r_pass').val(),
        tipo = '2',
        icono, texto;

    if (pass.trim() === '' && email.trim() === '' && nombre.trim() === '' && cell.trim() === '') {
        icono = 'error', texto = 'Por favor Ingrese todos los Campos!.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (pass.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese una contraseña.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (email.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese un correo.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (nombre.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese su nombre.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (cell.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese su telefono.';
        mensajeAlerta(icono, texto);
        return false;
    } else {
        $.ajax({
            dataType: 'json',
            url: baseurl + '/Login/registrar_Cliente',
            type: 'post',
            dataType: 'json',
            data: {
                pass,
                email,
                nombre,
                cell,
                tipo
            },
            dataType: 'json',
            before: function () { },
            success: function (data) {
                if (data.success === 1) {
                    let timerInterval
                    Swal.fire({
                        icon: 'success',
                        title: 'Login..!',
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
                            document.location.href = baseurl + '/Login';
                        }
                    })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Error en registro',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            popup: 'animated flipInY'
                        }
                    })
                }
            },
            error: function (e) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Hay un error interno',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'animated flipInY'
                    }
                })
            }
        });
    }

});

$('#registro_form').click(function () {
    var
        nombrecompleto = $('#nombrecompleto').val(),
        correoelectronico = $('#correoelectronico').val(),
        tipoentrega = $('#tipoentrega').val(),
        telefono = $('#telefono').val(),
        mensaje = $('#mensaje').val(),
        icono, texto;

    if (nombrecompleto.trim() === '' && correoelectronico.trim() === '' && tipoentrega.trim() === '' && telefono.trim() === '' && mensaje.trim() === '') {
        icono = 'error', texto = 'Por favor Ingrese todos los Campos!.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (nombrecompleto.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese su nombre completo.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (correoelectronico.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese un correo.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (tipoentrega.trim() === '') {
        icono = 'warning', texto = 'Por favor seleccione su entrega.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (telefono.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese su telefono.';
        mensajeAlerta(icono, texto);
        return false;
    } else if (mensaje.trim() === '') {
        icono = 'warning', texto = 'Por favor ingrese un mensaje.';
        mensajeAlerta(icono, texto);
        return false;
    } else {
        $.ajax({
            dataType: 'json',
            url: baseurl + '/Inicio/insertarFormulario',
            type: 'post',
            dataType: 'json',
            data: {
                nombrecompleto,
                correoelectronico,
                tipoentrega,
                telefono,
                mensaje
            },
            dataType: 'json',
            before: function () { },
            success: function (data) {
                if (data.success === 1) {
                    let timerInterval
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviando..!',
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
                            document.location.href = baseurl + '/Inicio';
                        }
                    })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Error en registro',
                        showConfirmButton: false,
                        timer: 1500,
                        customClass: {
                            popup: 'animated flipInY'
                        }
                    })
                }
            },
            error: function (e) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Error interno',
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        popup: 'animated flipInY'
                    }
                })
            }
        });
    }

});