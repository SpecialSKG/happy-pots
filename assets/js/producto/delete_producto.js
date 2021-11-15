$("tr td #eliminar_producto").click(
    function borrar_producto() {
        var id = $(this).attr("data-id");
        var img = $(this).attr("data-img");

        Swal.fire({
            title: "ELIMINAR",
            text: "No hay manera de deshacer esta accion, ¿Esta seguro que desea eliminar?",
            showDenyButton: true,
            showCancelButton: true,
            showCancelButton: false,
            confirmButtonText: `Eliminar`,
            icon: "warning",
            denyButtonText: `Cancelar`,
            customClass: {
                confirmButton: "btn btn-success",
                denyButton: "btn btn-danger",
            },
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    dataType: "json",
                    url: baseurl + "/ProductosAd/eliminar_producto",
                    type: "post",
                    dataType: "json",
                    data: {
                        id,
                        img
                    },
                    dataType: "json",
                    success: function (data) {
                        if (data.success === 1) {
                            Swal.fire({
                                icon: "success",
                                title: "Eliminado",
                                text: "Eliminado con exito",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                            document.location.href = baseurl + "/ProductosAd";
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: "No se pudo Eliminar",
                                type: "error",
                                showConfirmButton: false,
                                timer: 1500,
                                animation: false,
                                customClass: {
                                    popup: "animated flipInY",
                                },
                            });
                        }
                    },
                    error: function (data) {
                        console.log("Error:", data);
                    },
                });
            } else if (result.isDenied) {
                Swal.fire({
                    icon: "info",
                    title: "Registro no Eliminado",
                    text: ":)",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        });

    });
