<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../library/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../library/jquery-3.7.1.min.js"></script>


</head>

<body>

    <?php

    require_once './navbar.php';
    ?>
    <div class="background"></div>
    <div class="container">
        <div class="row justify-content-center mt-4" style="height: 10vh;">
            <div class="col-9 col-md-4 d-flex text-center justify-content-center">
                <div class="box">
                    <p class="p-3 pb-0">Hello, <?php echo $_SESSION['name']; ?></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center mt-3" style="max-height: 30vh;">
            <div class="col-auto">
                <button class="btn btn-custom d-none d-md-block previousBtn"><i class="fa-solid fa-chevron-left"></i></button>
            </div>
            <div class="col-11 col-md-8">
                <blockquote class="my-2 text-center">
                    <p class="quote-font">...</p>
                    <p class="author-font">...</p>
                </blockquote>
            </div>
            <div class="col-auto">
                <button id='nextBtn' class="btn btn-custom d-none d-md-block nextBtn"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="row justify-content-evenly align-items-center d-md-none mt-4">
            <div class="col-auto">
                <button class="btn btn-custom mx-4 previousBtn"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="btn btn-custom mx-4 nextBtn"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>

</body>
<link rel="stylesheet" href="../css/quote.css">
<script>
    $(document).ready(function() {
        var result;
        index = () => {
            var today = new Date();
            var day = Math.ceil(
                (today - new Date(today.getFullYear(), 0, 1)) / 86400000
            );
            index = day - 119;
            return index;
        };
        var index = index();
        $.getJSON("./quotes.json", function(data) {
            result = data.quotes[index];
            $(".quote-font").text(result.quote);
            $(".author-font").text('-' + result.author);
            $('.nextBtn').click(function() {
                index = index + 1;
                result = data.quotes[index];
                $(".quote-font").text(result.quote);
                $(".author-font").text('-' + result.author);

            });
            $(".previousBtn").click(function() {

                index = index - 1;
                result = data.quotes[index];
                $(".quote-font").text(result.quote);
                $(".author-font").text('-' + result.author);

            });
        });
    });
</script>


</html>