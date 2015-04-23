var autocompleteResults = [];
var selected;

function autocompleteUser() {
    var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#username_id').val();
    if (keyword.length >= min_length) {
        $.ajax({
            url: '../database/predictUsers.php',
            type: 'POST',
            data: {keyword:keyword},
            success: function(data){

                var data = JSON.parse(data);

                autocompleteResults = data;

                $('#username_list_id').show();
                $('#username_list_id').html('');

                for(var i = 0; i < data.length; i++) {
                    $('#username_list_id').append('<li onclick="markSelected(' + i + ')">' + data[i].userName + '</li>');
                }
            }
        });
    } else {
        $('#username_list_id').hide();
    }
}

function markSelected (index) {
    selected = autocompleteResults[index];
    var name = selected.userName;
    var steamID = selected.steamID;
    console.log(steamID);
    set_item(name);
    $('#label_div1').html(data[0]);
    $.ajax({
            url: '../database/compareUser.php',
            type: 'POST',
            data: {steamID:steamID},
            success: function(data){

                var data = JSON.parse(data);
                console.log(data[0]);
                $('#player1stat').html(data[0]);

            }
        });

}

// set_item : this function will be executed when we select an item
function set_item(item) {
    // change input value
    $('#username_id').val(item);
    // hide proposition list
    $('#username_list_id').hide();
}