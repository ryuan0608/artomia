$(document).ready(function() {
    var request = 'GetAllProducts';
    var dataStr = dataStr + '&request=' + request;
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "requestHandler.php",    // handle requests
        data: dataStr,
        success: function(result){    // callback
            alert(result[0].Description);
        }
    });
});

