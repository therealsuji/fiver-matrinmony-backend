$(document).ready(function () {
    $('#table').DataTable();
});

let firstPanelChild =  $(".sidepanel").children('.nav-link').first();
let formType = firstPanelChild.attr("data-formtype")
$('#formtitle').text(firstPanelChild.first().text());

function valueChanger(action) {
    value = $(`#value`).val();
    value = value.trim();
    if (!value) {
        Swal.fire({
            type: 'error',
            text: 'Please enter a value',
        })
        return;
    }

    $.post(`${base_url}/admin/fieldManager/fieldvaluechange`, {value: value, formType: formType, action: action})
        .done(function (data) {
            data = JSON.parse(data);
            if (data.status === 200) {
                $(`#value`).val('');
                Swal.fire({
                    type: 'success',
                    title: 'Success',
                    text: 'Successfully added value',
                })
            }
        });
}

$('#v-pills-tab a').on('click', function (e) {
    formType = $(this).attr("data-formtype");
    $('#formtitle').text($(this).text());
})