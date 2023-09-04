/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.registerBox').fadeIn('fast');
        $('.forgetBox').fadeOut('fast');
        $('.forget-footer').fadeOut('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('নিবন্ধন');
    });
    $('.error').removeClass('alert alert-danger').html('');

}
function showLoginForm() {
    $('#loginModal .registerBox').fadeOut('fast', function () {
        $('.loginBox').fadeIn('fast');
        $('.forgetBox').fadeOut('fast');
        $('.forget-footer').fadeOut('fast');
        $('.register-footer').fadeOut('fast', function () {
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('লগইন করুন');
    });
    $('.error').removeClass('alert alert-danger').html('');
}
function showForgetPasswordForm() {
    $('.loginBox').fadeOut('fast', function () {
        $('.forgetBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast', function () {
            $('.forget-footer').fadeIn('fast');
        });
        $('.modal-title').html('পাসওয়ার্ড ভুলে গেছেন?');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

function openLoginModal() {
    showLoginForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}
function openRegisterModal() {
    showRegisterForm();
    setTimeout(function () {
        $('#loginModal').modal('show');
    }, 230);

}

$("#lpassword").keyup(function (event) {
    if (event.keyCode === 13) {
        loginAjax();
    }
});

function loginAjax() {
    $("#ajaximgloader").show();
    if (!ValidateLogin()) {
        $("#ajaximgloader").hide();
        return;
    }
    $.ajax({
        type: "POST",
        url: "/home/Login",
        data: $('form.login').serialize(),
        success: function (msg) {
            if (msg.response == "ok") {
                toastr["success"](msg.message);
                openLoginModal();
                $("#ajaximgloader").hide();
                window.location.href = "/user";
            }
            else {
                toastr["error"](msg.message);
                $("#ajaximgloader").hide();
            }
        },
        error: function () {
            toastr["error"](msg.message);
            $("#ajaximgloader").hide();
        }
    });
}

function ValidateLogin() {
    var email = $("#lemail").val();
    var password = $("#lpassword").val();
    if (email == null || email == "") {
        toastr["error"]("Please enter your email address.");
        shakeModal();
        $("#lemail").focus();
        return false;
    }
    if (password == null || password == "") {
        toastr["error"]("Please enter your password to login.");
        shakeModal();
        $("#lpassword").focus();
        return false;
    }
    return true;
}

function RegistrationAjax() {
    if (!ValidateRegistration()) {
        return;
    }
    $("#ajaximgloader").show();
    $.ajax({
        type: "POST",
        url: "/home/Register",
        data: $('form.register').serialize(),
        success: function (msg) {
            if (msg.response == "ok") {
                toastr["success"](msg.message);
                openLoginModal();
                $("#ajaximgloader").hide();
            }
            else {
                toastr["error"](msg.message);
                $("#ajaximgloader").hide();
            }
        },
        error: function () {
            alert("failure");
            $("#ajaximgloader").hide();
        }
    });

    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

    /*   Simulate error message from the server   */
    //shakeModal();
}

function ValidateRegistration() {
    var MemberTypeId = $("#MemberTypeId").val();
    var rname = $("#rname").val();
    var remail = $("#remail").val();
    var rpassword = $("#rpassword").val();
    var rpassword_confirmation = $("#rpassword_confirmation").val();
    var rmobile = $("#rmobile").val();
    var CountryId = $("#CountryId").val();
    var DistrictId = $("#DistrictId").val();
    if (rname == null || rname == "") {
        toastr["error"]("Please enter your name.");
        shakeModal();
        $("#rname").focus();
        return false;
    }
    if (remail == null || remail == "") {
        toastr["error"]("Please enter your email address");
        shakeModal();
        $("#remail").focus();
        return false;
    }

    if (remail != null && validateEmail(remail) == false) {
        toastr["error"]("Please enter a valid email address");
        shakeModal();
        $("#remail").focus();
        return false;
    }

    if (rpassword == null || rpassword == "") {
        toastr["error"]("Please enter your password");
        shakeModal();
        $("#rpassword").focus();
        return false;
    }
    if (rpassword_confirmation == null || rpassword_confirmation == "") {
        toastr["error"]("Please enter your confirm password");
        shakeModal();
        $("#rpassword_confirmation").focus();
        return false;
    }
    if (rpassword != null && rpassword_confirmation != null && rpassword != rpassword_confirmation) {
        toastr["error"]("Password and Confirm Password is mismatched, please check and re-enter password");
        shakeModal();
        $("#rpassword_confirmation").focus();
        return false;
    }
    if (rmobile == null || rmobile == "") {
        toastr["error"]("Please enter your mobile number");
        shakeModal();
        $("#rmobile").focus();
        return false;
    }

    if (rmobile != null && validateMobile(rmobile) == false) {
        toastr["error"]("Please enter a valid mobile number");
        shakeModal();
        $("#rmobile").focus();
        return false;
    }
    return true;
}

function shakeModal() {
    $('#loginModal .modal-dialog').addClass('shake');
    //$('.error').addClass('alert alert-danger').html("Invalid email/password combination");
    //$('input[type="password"]').val('');
    setTimeout(function () {
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000);
}


function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validateMobile(mobile) {
    var phoneRe = /^01\d{9}$/;
    var digits = mobile.replace(/\D/g, "");
    return phoneRe.test(digits);
}
