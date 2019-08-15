<?php

$server = "localhost";
$username = "root";
$password = "Wicked2013";
$db = "membership";

$conn = new mysqli($server, $username, $password, $db);

$stmt = $conn->prepare("INSERT INTO members (lastName, firstName, middleName) VALUES (?,?,?)");
$stmt->bind_param("sss", $_POST['lastName'], $_POST['firstName'], $_POST['middleName']);

if ($_POST['lastName'] == "") {
    echo "Please go back and enter a last name";
} elseif ($_POST['firstName'] == "") {
    echo "Please go back and enter a first name";
} else {
    $stmt->execute();
    $stmt->close();
    echo "Member successfully added!";
}
$conn->close();
