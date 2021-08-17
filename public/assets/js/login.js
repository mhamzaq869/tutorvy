


// email validation

$(".submit2").click(function () {
  var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  var email = $(".email").val();
  if (!filter.test(email)) {
    $(".email").css("border-color", "red");
    $(".add").html('enter your valid email address');
    return false;
  }
})
//
$("#togglepass").click(function () {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $("#pswd").val();

  if ($("#pswd").attr("type") == "password") {

      $("#pswd").attr("type", "");
  } else {
    $("#pswd").attr("type", "password");
  }
})


// pass validation


//
// const pass_field = document.querySelector("input");
// const show_btn = document.querySelector("i");
// show_btn.addEventListener("click", function () {
//   if (pass_field.type === "password") {
//     pass_field.type = "text";
//     show_btn.classList.add("hide");
//   } else {
//     pass_field.type = "password";
//     show_btn.classList.remove("hide");
//   }
// });


//
function checkPass() {

  var get_elem = document.getElementById,
    pass1 = document.getElementById('password'),
    pass2 = document.getElementById('password2'),
    message = document.getElementById('confirmMessage'),
    colors = {
      goodColor: "#fff",
      goodColored: "#087a08",
      badColor: "#fff",
      fontStyle: "italic"
    },
    strings = {
      "confirmMessage": ["Password Matched", "Password notmathed"]
    };

  if (password.value === password2.value && (password.value + password2.value) !== "") {
    password2.style.backgroundColor = colors["goodColor"];
    message.style.color = colors["goodColored"];
    message.innerHTML = strings["confirmMessage"][0];
  }
  else if (!(password2.value === "")) {
    password2.style.backgroundColor = colors["badColor"];
    message.style.color = colors["badColored"];
    message.innerHTML = strings["confirmMessage"][1];
  }
  else {
    message.innerHTML = "";
  }

}

// jquery validation

function sendContact() {
  var valid;
  valid = validateContact();
  if (valid) {
    jQuery.ajax({
      url: "contact_mail.php",
      data: '&userEmail=' + $("#userEmail").val(),
      type: "POST",
      success: function (data) {
        $("#mail-status").html(data);
      },
      error: function () { }
    });
  }
}

function validateContact() {
  var valid = true;
  $(".demoInputBox").css('background-color', '');
  $(".info").html('');
  if (!$("#userEmail").val()) {
    $("#userEmail-info").html("(required)");
    $("#userEmail-info").html("(required)");
    $("#userEmail").css('background-color', '#FFFFDF');
    valid = false;
  }
  if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#userEmail-info").html("(invalid)");
    $("#userEmail").css('background-color', '#FFFFDF');
    valid = false;
  }
  return valid;
}
// password
function verifyPassword() {
  var pw = document.getElementById("pswd").value;
  //check empty password field
  if (pw == "") {
    document.getElementById("message").innerHTML = "Fill the password please!";
    document.getElementById('pswd').style.borderColor = "red";
    return false;
  }

  //minimum password length validation
  if (pw.length < 8) {
    document.getElementById("message").innerHTML = "Password length must be atleast 8 characters";

    return false;
  }

  //maximum length of password validation
  if (pw.length > 15) {
    document.getElementById("message").innerHTML = "Password length must not exceed 15 characters";
    return false;
  } else {
    alert("Password is correct");
  }
}
