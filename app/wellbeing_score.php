<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well Being Score</title>
    <link rel="stylesheet" href="../library/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../library/jquery-3.7.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <style>
        .rating-wrapper {
            border-radius: 1rem;
            display: inline-flex;
            direction: rtl !important;
            /* padding: 1.5rem 2.5rem; */
            justify-content: center;

            label {
                color: #E1E6F6;
                cursor: pointer;
                display: inline-flex;
                font-size: 3rem;
                padding: 1rem .6rem;
                transition: color 0.5s;
            }

            svg {
                -webkit-text-fill-color: transparent;
                -webkit-filter: drop-shadow (4px 1px 6px rgba(198, 206, 237, 1));
                filter: drop-shadow(5px 1px 3px rgba(198, 206, 237, 1));
            }

            input {
                height: 100%;
                width: 100%;
            }

            input {
                display: none;
            }

            label:hover,
            label:hover~label,
            input:checked~label {
                color: #2563EB;
            }

            label:hover,
            label:hover~label,
            input:checked~label {
                color: #2563EB;
            }
        }
    </style>

</head>

<body>
    <div class="background"></div>

    <?php

    require_once './navbar.php';
    ?>

    <div class="container">

        <?php
        require_once '../api/checkdate.php';


        if (!$check) {
            echo "<div class='card my-3'>
            <div class='row text-center'>
            <div class='card-body col-12'><h2>Give Score for Today</h2></div>
            </div></div>";
        } else {

            require_once '../api/showscore.php';
        }
        ?>
        <form action="../api/rating_data.php" method="post">
            <!-- row-cols-xl-3 -->
            <div class="row row-cols-1  mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h2 class="my-0 fw-normal">
                                Anxiety
                            </h2>
                        </div>
                        <div class="card-body justify-content-center">
                            <h4>Mental Wellness Score</h4>


                            <div>
                                <div class="row justify-content-center">

                                    <!-- star rating -->
                                    <div class="rating-wrapper">

                                        <!-- star 5 -->
                                        <input type="radio" id="anxiety1" name="anx" value="5">
                                        <label for="anxiety1" class="star-rating">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 4 -->
                                        <input type="radio" id="anxiety2" name="anx" value="4">
                                        <label for="anxiety2" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 3 -->
                                        <input type="radio" id="anxiety3" name="anx" value="3">
                                        <label for="anxiety3" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 2 -->
                                        <input type="radio" id="anxiety4" name="anx" value="2">
                                        <label for="anxiety4" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 1 -->
                                        <input type="radio" id="anxiety5" name="anx" value="1">
                                        <label for="anxiety5" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h2 class="my-0 fw-normal">
                                Happiness
                            </h2>
                        </div>
                        <div class="card-body justify-content-center">
                            <h4>Mental Wellness Score</h4>


                            <div>
                                <div class="row justify-content-center">

                                    <!-- star rating -->
                                    <div class="rating-wrapper">

                                        <!-- star 5 -->
                                        <input type="radio" id="happiness1" name="happiness" value="5">
                                        <label for="happiness1" class="star-rating">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 4 -->
                                        <input type="radio" id="happiness2" name="happiness" value="4">
                                        <label for="happiness2" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 3 -->
                                        <input type="radio" id="happiness3" name="happiness" value="3">
                                        <label for="happiness3" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 2 -->
                                        <input type="radio" id="happiness4" name="happiness" value="2">
                                        <label for="happiness4" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 1 -->
                                        <input type="radio" id="happiness5" name="happiness" value="1">
                                        <label for="happiness5" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h2 class="my-0 fw-normal">
                                Workload management
                            </h2>
                        </div>
                        <div class="card-body justify-content-center">
                            <h4>Mental Wellness Score</h4>


                            <div>
                                <div class="row justify-content-center">

                                    <!-- star rating -->
                                    <div class="rating-wrapper">

                                        <!-- star 5 -->
                                        <input type="radio" id="workloadmanagement1" name="workloadmanagement" value="5">
                                        <label for="workloadmanagement1" class="star-rating">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 4 -->
                                        <input type="radio" id="workloadmanagement2" name="workloadmanagement" value="4">
                                        <label for="workloadmanagement2" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 3 -->
                                        <input type="radio" id="workloadmanagement3" name="workloadmanagement" value="3">
                                        <label for="workloadmanagement3" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 2 -->
                                        <input type="radio" id="workloadmanagement4" name="workloadmanagement" value="2">
                                        <label for="workloadmanagement4" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                        <!-- star 1 -->
                                        <input type="radio" id="workloadmanagement5" name="workloadmanagement" value="1">
                                        <label for="workloadmanagement5" class="star-rating star">
                                            <i class="fas fa-star d-inline-block"></i>
                                        </label>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mx-auto">
                    <button type="submit" class="col-4 w-100 btn btn-lg btn-outline-primary" id="subBtn">Submit</button>
                </div>

            </div>
        </form>
    </div>



    <?php
    print_r($_POST);
    ?>

</body>

</html>