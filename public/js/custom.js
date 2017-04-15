$(function (e) {
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $(document).on('click', '#email_submit', function (e) {
        var token = $('#csrf_token').val();
        e.preventDefault();
        var email = $('#email').val();
        if (isEmail(email)) {
            $('#email').css('border-color', 'green');
            $.ajax({
                    method: "POST",
                    url: "post",
                    data: {_token: token, email: email}
                })
                .done(function (msg) {
                    $('#static_block').html(msg);
                });
        } else {
            $('#email').css('border-color', 'darkred');
        }
    });
    $(document).on('click', '#confirm_alert', function (e) {

        var token = $('#csrf_token').val();
        e.preventDefault();
        var id = $('#id').val();
        var formData = $("#confirtmalerts_form").serializeArray();
        $.ajax({
                method: "POST",
                url: "confirm_alert",
                data: {_token: token, formData: formData}
            })
            .done(function (msg) {
                $('#static_block').html(msg);
            })
    });
});