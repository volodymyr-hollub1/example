$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'reg.php',
            data: {
                'user': $('input[name="user"]').val(),
                'phone': $('input[name="phone"]').val()
            },
            success: function (response) {
                var jsonData = JSON.parse(response);


                if (jsonData.success == "1") {
                    $('form').html('<div class="alert alert-success">' + jsonData.message + '</div>');
                } else {
                    $('form').html('<div class="alert alert-error"> error</div>');
                }
            }
        });
    });
});
