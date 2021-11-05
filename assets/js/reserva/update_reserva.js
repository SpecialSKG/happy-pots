$('#update_reserva').click(function() {
    var
        usuario = $('#floating_usuario').val(),
        lugar = $('#floating_lugar').val(),
        fecha = $('#floating_fecha').val(),
        hora = $('#floating_hora').val(),
        id = $('#floating_id').val();

    $.ajax({
        dataType: 'json',
        url: baseurl + '/Reservas/actualizarReserva',
        type: 'POST',
        dataType: 'json',
        data: {
            usuario,
            lugar,
            fecha,
            hora,
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
                        document.location.href = baseurl + '/Reservas/';
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