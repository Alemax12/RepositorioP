
function operaciones() {

    $("#formulario").hide();

    $("#nuevo").click(function () {
        $("#formulario").show();
        $(this).hide();
    });
    $("#cancel").click(function () {
        $("#formulario").hide();
        $("#nuevo").show();
        $("#form1").trigger("reset");
    });

    $("#save").click(function (e) {
        e.preventDefault();

        var datos = $("#form1").serialize();

        $.ajax({
            url: "../php/GuardarCliente.php",
            method: "POST",
            data: datos, //{ varianble : valor },   
            dataType: "html"
        })

            .done(function (data) {
                location.reload();
            })

            .fail(function (jqXHR, textStatus) {
                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: 'Ocurrió un error : ' + textStatus,
                    showConfirmButton: false,
                    timer: 1500
                })

            });

    });

    $(".delete").click(function () {

        Swal.fire({
            title: 'Eliminar Cliente',
            text: "¿Esta seguro que desea eliminar el cliente?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: 'lightgray',
            cancelButtonText:"Cancelar",
            confirmButtonText: 'Eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                const id = $(this).data("id");
                $.ajax({
                    url: "../php/EliminarCliente.php",
                    method: "POST",
                    data: { id: id }, //{ varianble : valor },   
                    dataType: "html"
                })

                    .done(function (data) {
                        location.reload();
                    })

                    .fail(function (jqXHR, textStatus) {
                        Swal.fire({
                            position: 'top-end',
                            type: 'error',
                            title: 'Ocurrió un error : ' + textStatus,
                            showConfirmButton: false,
                            timer: 1500
                        })

                    });
            }
        })
    });
}