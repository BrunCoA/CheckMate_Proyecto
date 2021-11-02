$(function () {
  
    $('#btn_agregar').on('click', onClickBotonAgregar);

    var dataTable = $('#user_data').DataTable({
        "language": { url: 'Spanish.json'},
        "dom": 'Bfrtip',
        "buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "pageLength": 5,
        "processing": true,
        "serverSide": false,
        "order": [],
        "ajax": {
            url: "../controller/listarAlumno.php",
            type: "POST"
        },
        "columnDefs": [{ 
            "targets": [5, 6], 
            "orderable": false
        }]
    });
    $(this).on('submit', '#frm_persona', function (event) {
        event.preventDefault();
        
        var cedula = $('#cedula').val();
        var primer_nombre = $('#txt_primer_nombre').val();
        var primer_apellido = $('#txt_primer_apellido').val();

        if (cedula != '' && primer_nombre != '' && primer_apellido != '') {
            $.ajax({
                url: "../controller/agregar.php",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#frm_persona')[0].reset();
                    $('#personaModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        } else {
            alert("Los campos Cedula, Primer Nombre y Primer Apellido son requeridos");
        }
    });

    $(this).on('click', '.update', function () {
        let persona_id = $(this).attr("id");
        $.ajax({
            url: "../controller/cargar_persona.php",
            method: "POST",
            data: {
                persona_id: persona_id
            },
            dataType: "json",
            success: function (data) {
                $('#personaModal').modal('show');

                $('#txt_cedula').val(data.cedula);
                $('#txt_primer_nombre').val(data.primer_nombre);
                $('#txt_segundo_nombre').val(data.segundo_nombre);
                $('#txt_primer_apellido').val(data.primer_apellido);
                $('#txt_segundo_apellido').val(data.segundo_apellido);

                $('.modal-title').text("Editar Persona");
                $('#h_persona_id').val(persona_id);
                $('#accion').val("Editar");
                $('#h_operacion').val("Editar");
            }
        })
    });

    $(this).on('click', '.delete', function () {
        var persona_id = $(this).attr("id");
        if (confirm("¿Estas seguro de Eliminar este registro?")) {
            $.ajax({
                url: "../model/eliminar.php",
                method: "POST",
                data: {
                    persona_id: persona_id
                },
                success: function (data) {
                    dataTable.ajax.reload();
                }
            });
        } else {
            return false;
        }
    });
});

function onClickBotonAgregar() {

    $('#frm_persona')[0].reset();
    $('.modal-title').text("Agregar Persona");
    $('#accion').val("Agregar");
    $('#operacion').val("Agregar");
}



