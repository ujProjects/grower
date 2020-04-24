$("#loginBtn").on("click", function(){
    loginChecker();
});

function loginChecker(){
    var username = $("#username").val();
    var password = $("#password").val();


    if (!username.trim() || !password.trim()) {
        $("#errorHandler").removeClass("d-none");
        $('#errorHandler').text("Fill the blanks");
    }else{

        $.ajax({
            url: 'verfications/login.php',
            type: 'POST',
            cache: false,
            data: { 'username': username, 'password': password},
            dataType: 'html',
            beforeSend: function(){
                $("#loginBtn").prop("disabled", true);
            },

            success: function(data){
                    if (data == "success") {
                        $("#errorHandler").addClass("d-none");
                        location.href='http://grower.uz/';
                    }else{
                        $("#errorHandler").removeClass("d-none");
                        $('#errorHandler').text("Username or Password is incorrect");
                    }
                    $("#loginBtn").prop("disabled", false);
            }
        })

    }
}
