function autocompleteUser() {
    var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#username_id').val();
    if (keyword.length >= min_length) {
        $.ajax({
            url: '../database/predictUsers.php',
            type: 'POST',
            data: {keyword:keyword},
            success:function(data){
                $('#username_list_id').show();
                $('#username_list_id').html(data);
            }
        });
    } else {
        $('#username_list_id').hide();
    }
}

// set_item : this function will be executed when we select an item
function set_item(item) {
    // change input value
    $('#username_id').val(item);
    // hide proposition list
    $('#username_list_id').hide();
}