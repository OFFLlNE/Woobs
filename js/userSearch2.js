var autocompleteResults = [];
var selected;

function autocompleteUser2() {
    var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#username_id2').val();
    if (keyword.length >= min_length) {
        $.ajax({
            url: '../database/predictUsers.php',
            type: 'POST',
            data: {keyword:keyword},
            success: function(data){

                var data = JSON.parse(data);

                autocompleteResults = data;

                $('#username_list_id2').show();
                $('#username_list_id2').html('');

                for(var i = 0; i < data.length; i++) {
                    $('#username_list_id2').append('<li onclick="markSelected2(' + i + ')">' + data[i].userName + '</li>');
                }
            }
        });
    } else {
        $('#username_list_id2').hide();
    }
}

function markSelected2 (index) {
    selected = autocompleteResults[index];
    var name = selected.userName;
    var steamID = selected.steamID;
    console.log(steamID);
    set_item2(name);
    $('#label_div2').html("<h1>"+name+"</h1>");
    $.ajax({
            url: '../database/compareUser.php',
            type: 'POST',
            data: {steamID:steamID},
            success: function(data){

                var data = JSON.parse(data);
                console.log(data[0]);
                $('#player2stat').html(data[0]);

            }
        });
    $.ajax({
            url: '../database/getPicture.php',
            type: 'POST',
            data: {steamID:steamID},
            success: function(data){

                var data = JSON.parse(data);
                console.log(data[0]);
                $('#profile2').html(data[0]);

            }
        });


}

// set_item : this function will be executed when we select an item
function set_item2(item) {
    // change input value
    $('#username_id2').val(item);
    // hide proposition list
    $('#username_list_id2').hide();
}