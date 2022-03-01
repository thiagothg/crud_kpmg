$(function () {
    $.extend($.fn.dataTable.defaults, {
        language: { url: 'datatables_pt_br.json' }
    });

    $('#table').DataTable({
        "ajax": {
            "url": 'api/student',
            "data": {
                "source": "grid"
            }
        },
        "columns": [
            { "data": "id" },
            { "data": "name", "width": "10%" },
            { "data": "cpf" },
            { "data": "email", "width": "10%" },
            { "data": "matricula", "width": "10%" },
            { "data": "enable" },
            { "data": "created_at" },
            { "data": "acao", "defaultContent": "<i> empty</i>" }
        ]
    });
});