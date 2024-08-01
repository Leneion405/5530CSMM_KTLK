$(document).ready(function () {
  $(".btn").click(function () {
    $("#result").text("");
    $("#resultEmail").text("");

    $("#firstname, #lastname, #email, #password, #confirm_password").css(
      "border",
      "1px solid black"
    );

    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!firstname || !lastname || !email || !password || !confirm_password) {
      $("#result").text("All fields need to be filled.");
      $("#result").css("color", "red");
      $("#firstname, #lastname, #email, #password, #confirm_password").css(
        "border",
        "1px solid red"
      );
    } else if (!emailRegex.test(email)) {
      $("#resultEmail").text("Invalid email address");
      $("#resultEmail").css("color", "red");
      $("#email").css("border", "1px solid red");
    } else if (password !== confirm_password) {
      $("#result").text("The passwords do not match.");
      $("#result").css("color", "red");
      $("#password, #confirm_password").css("border", "1px solid red");
    } else if (password.length < 8) {
      $("#result").text("The password must be at least 8 characters long.");
      $("#result").css("color", "red");
      $("#password").css("border", "1px solid red");
    } else {
      $.post(
        "../api/register_api.php",
        {
          firstname: firstname,
          lastname: lastname,
          email: email,
          password: password,
        },
        function (data) {
          if (data === "Success") {
            console.log(data);
            window.location.href = "../index.php";
          } else {
            $("#resultEmail").text(data);
            $("#resultEmail").css("color", "red");
            $("#email").css("border", "1px solid red");
          }
        }
      );
    }
  });
});
