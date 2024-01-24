<!-- registerProcess.php -->

<?php
include('connection.php');

$User_ID = "";
$Subscription_ID = "";
$First_Name = "";
$Last_Name = "";
$Password = "";
$Username = "";

if (isset($_POST['save'])) {
    // Assuming your form fields are named 'userId', 'subscriptionId', etc.
    $User_ID = isset($_POST['userId']) ? $_POST['userId'] : "";
    $Subscription_ID = isset($_POST['subscriptionId']) ? $_POST['subscriptionId'] : "";
    $First_Name = isset($_POST['firstName']) ? $_POST['firstName'] : "";
    $Last_Name = isset($_POST['lastName']) ? $_POST['lastName'] : "";
    $Password = isset($_POST['password']) ? $_POST['password'] : "";
    $Username = isset($_POST['username']) ? $_POST['username'] : "";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO user (User_ID, Subscription_ID, First_Name, Last_Name, Password, Username) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $User_ID, $Subscription_ID, $First_Name, $Last_Name, $Password, $Username);
    $stmt->execute();
    $stmt->close();
    header("Location: login.php");
}
?>
