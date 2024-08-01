$(document).ready(function () {
  $(".btn").click(function () {
    var email = $("#email").val();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var password = $("#password").val();

    if (!emailRegex.test(email)) {
      $("#result").text("Invalid email address");
      $("#result").css("color", "red");
      return;
    }

    $.post(
      "./api/login_api.php",
      {
        email: email,
        password: password,
      },
      function (data) {
        if (data === "Login Success") {
          $("#result").text(data);
          $("#result").css("color", "green");
          window.location.href = "./app/home.php";
        } else {
          $("#result").text(data);
          $("#result").css("color", "red");
          $("#password,#email").css("border", "1px solid red");
        }
      }
    );
  });
});
