<?php
require_once '../api/date.php';
require_once '../api/dbinfo.php';
// require_once './dbinfo.php';
// session_start();



$user_id = 1;

$query = "SELECT * FROM score WHERE user_id = ? AND date = ?;";
try {
    $stmt = $conn->prepare($query);
    $stmt->bind_param("is", $user_id, $date);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $check = true;
        $row = $result->fetch_array(MYSQLI_ASSOC);

        $anxiety = $row['anxiety'];
        $happy = $row['happiness'];
        $wlmgmt = $row['workloadmanagement'];

        // echo $anxiety;
        // echo $happy;
        // echo $wlmgmt;

        // print_r($row);
        echo "<div class='card my-3 text-center rounded-3 shadow-sm'>
            <div class='card-header py-3'>
            <h2>Score for Today $date</h2>
            </div>  ";




        echo "
            <div class='row text-center'>
                <div class='card-body col-12 col-md-4 my-0'>
                    <h5>Anxiety:</h5> <h3>$anxiety</h3>
                </div>
                <div class='card-body col-12 col-md-4 border-start border-end my-0'>
                    <h5>Happiness:</h5> <h3>$happy</h3>
                </div>
                <div class='card-body col-12 col-md-4 my-0'>
                    <h5>Workload Management:</h5> <h3>$wlmgmt</h3>
                </div>
            </div>
        </div>";
    } else {
        echo "No rows found.";
    }

    $stmt->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
