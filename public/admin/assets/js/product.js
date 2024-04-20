
$('#form-product').submit(function() {
    var description = $('#for_description').html();
    var content = $('#for_content').html();
    $('#description').val(description)
    $('#content').val(content)
    return true; // return false to cancel form action
});

