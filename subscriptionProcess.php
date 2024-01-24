<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    $subscriptionId = isset($_REQUEST['subscriptionId']) ? $_REQUEST['subscriptionId'] : "";
    $type = isset($_REQUEST['type']) ? $_REQUEST['type'] : "";
    $end_Date = isset($_REQUEST['endDate']) ? $_REQUEST['endDate'] : "";
    $start_Date = isset($_REQUEST['startDate']) ? $_REQUEST['startDate'] : "";

    if (!empty($subscriptionId) && !empty($type) && !empty($end_Date) && !empty($start_Date)) {
        $sql = "INSERT INTO subscription (subscription_id, type, end_Date, start_Date) VALUES ('$subscriptionId', '$type', '$end_Date', '$start_Date')";

        if ($conn->query($sql) === TRUE) {
            // Insertion successful
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                header("Location: register.php?subscriptionId=$subscriptionId");
            } else {
                // Generate report
                echo "Subscription successfully added to the database. Report generation logic goes here.";
            }
        } else {
            // Insertion failed
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid data provided.";
    }
}

$conn->close();
?>
