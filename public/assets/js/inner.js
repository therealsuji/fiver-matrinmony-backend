$(document).ready(function () {
    $('#userTable').DataTable();
    $('#userTable-2').DataTable();
    $('#userTable-3').DataTable();
    $('#tableCountry').DataTable();
    $('#tableState').DataTable( );
    $('#tableCity').DataTable();
    $('#table').DataTable({
        columns: [
            {data: 'id'},
            {data: 'value'},
            {data: 'edit_action'},
            {data: 'delete_action'},
        ]
    });
    $.fn.dataTable.ext.errMode = 'none';
});

let firstPanelChild = $(".sidepanel").children('.nav-link').first();
let formType = firstPanelChild.attr("data-formtype")
$('#formtitle').text(firstPanelChild.first().text());


function getNewValues(formType) {
    $.post(`${base_url}/admin/fieldManager/getFieldValues`, {
        formType: formType,
    }).done(function (data) {
        console.log(data);

        data = JSON.parse(data);
        data = data.map((val) => {
            newItem = {
                id: val.id,
                value: val.field_value,
                edit_action: `<i class="far fa-edit icon" onclick="openEditBox('${val.field_value}','${val.id}')"></i>`,
                delete_action: `<i class="fas fa-trash-alt icon" onclick="deleteValue('${val.id}')"></i>`
            }
            return newItem;
        })
        $('#table').dataTable().fnClearTable();
        $('#table').dataTable().fnAddData(data);

    });
}

function addValue() {
    value = $("#new-value").val();
    value = value.trim();
    if (!value) {
        Swal.fire({
            type: 'error',
            text: 'Please enter a value',
        })
        return;
    }

    $.post(`${base_url}/admin/fieldManager/fieldvaluechange`, {
        value: value,
        formType: formType,
        action: 'add'
    }).done(function (data) {
        data = JSON.parse(data);
        if (data.status === 200) {
            $(`#new-value`).val('');
            Swal.fire({
                type: 'success',
                title: 'Success',
                text: 'Successfully added value',
            })
            getNewValues(formType);

        }
    });
}

function deleteValue(id) {
    $.post(`${base_url}/admin/fieldManager/fieldvaluechange`, {
        id: id,
        formType: formType,
        action: 'del'
    }).done(function (data) {
        data = JSON.parse(data);
        if (data.status === 200) {
            $(`#value`).val('');
            Swal.fire({
                type: 'success',
                title: 'Success',
                text: 'Successfully added value',
            })
            getNewValues(formType);

        }
    });
}


function editValue() {
    const id = $("#edit-id").val();
    const value = $("#edit-value").val();
    $.post(`${base_url}/admin/fieldManager/fieldvaluechange`, {
        id: id,
        value: value,
        formType: formType,
        action: 'edit'
    }).done(function (data) {
        data = JSON.parse(data);
        if (data.status === 200) {
            $(`#value`).val('');
            Swal.fire({
                type: 'success',
                title: 'Success',
                text: 'Successfully added value',
            })
            getNewValues(formType);
            closeEditBox();
        }
    });
}


$('#v-pills-tab-fields a').on('click', function (e) {

    formType = $(this).attr("data-formtype");
    $('#formtitle').text($(this).text());
    getNewValues(formType);
})

function openEditBox(val, id) {
    $("#edit-value").val(val);
    $("#edit-id").val(id);
    $("#edit-box").css('display', 'block');
}

function closeEditBox() {
    $("#edit-box").css('display', 'none');
}

