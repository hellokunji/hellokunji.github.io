function validateForm(event) {
    event.preventDefault();

    $("#cbr_button").attr("disabled", true);

    //VALIDATION
    var name = $("#cbr_name").val();
    var phone = $("#cbr_phone").val();
    var email = $("#cbr_email").val();
    var message = $("#cbr_message").val();

    var check_val = 0;
    //NAME
    if (name == "") {
        $("#val_cbr_name").text("Enter your name");
        $("#val_cbr_name").fadeIn("fast");
    }
    else {
        check_val += 1;
        $("#val_cbr_name").fadeOut("fast");
    }
    //PHONE
    if (phone == "") {
        check_val += 1;
        $("#val_cbr_phone").fadeOut("fast");
    }
    else {
        if (phone.toString().length > 10 || phone.toString().length < 10) {
            $("#val_cbr_phone").text("Enter valid phone number");
            $("#val_cbr_phone").fadeIn("fast");
        }
        else if (!/^\d+$/.test(phone)) {
            $("#val_cbr_phone").text("Enter 10 digit phone number");
            $("#val_cbr_phone").fadeIn("fast");
        }
        else {
            check_val += 1;
            $("#val_cbr_phone").fadeOut("fast");
        }
    }
    //EMAIL VALIDATION
    if (email == "") {
        $("#val_cbr_email").text("Enter your email address");
        $("#val_cbr_email").fadeIn("fast");
    }
    else {
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
            $("#val_cbr_email").text("Enter valid email address");
            $("#val_cbr_email").fadeIn("fast");
        }
        else {
            if (email.toString().length > 100) {
                $("#val_cbr_email").text("Enter valid email address");
                $("#val_cbr_email").fadeIn("fast");
            }
            else {
                check_val += 1;
                $("#val_cbr_email").fadeOut("fast");
            }
        }
    }
    //MESSAGE
    if (message == "") {
        $("#val_cbr_message").text("Enter your message");
        $("#val_cbr_message").fadeIn("fast");
    }
    else {
        check_val += 1;
        $("#val_cbr_message").fadeOut("fast");
    }
    if (check_val == 4) {
        $("#cbr_button").text("Sending...");
        $("#cbr_button").css("opacity", "0.8");
        $.ajax({
            url: "/resources/mailscript.php",
            type: "POST",
            data: {
                name: name,
                phone: phone,
                email: email,
                message: message
            },
            dataType: "json",
            success: function (data) {
                console.log(JSON.stringify(data));
                if (data.message == "no_error") {
                    $("#cbr_button").text("Email Sent");
                    $(".gmb_text").text("Thank you, I will notify you ASAP");
                    $(".gm_box").css("background-color", "green");
                    $(".g_msg").fadeIn(300).delay(3000).fadeOut(300);
                }
                else {
                    $("#cbr_button").attr("disabled", false);
                    $("#cbr_button").text("Send Email");
                    $("#cbr_button").css("opacity", "1");
                    $(".gmb_text").text("Unexpected error reported, Please try again");
                    $(".gm_box").css("background-color", "red");
                    $(".g_msg").fadeIn(300).delay(3000).fadeOut(300);
                }
            }.bind(this)
        });
    }
    else {
        $("#cbr_button").attr("disabled", false);
    }
}