<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well Being Chart</title>
    <link rel="stylesheet" href="../library/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../library/jquery-3.7.1.min.js"></script>



</head>

<body>
    <?php
    require_once './navbar.php';
    ?>

</body>
<script>
    $(document).ready(function() {
        $.getJSON("../api/chart_api.php", function(data) {
            console.log(data);
        });
    });
</script>

</html>