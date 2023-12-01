<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $currentWeight = $_POST["currentWeight"];
    $desiredWeight = $_POST["desiredWeight"];
    $height = $_POST["height"];
    $streetAddress = $_POST["streetAddress"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postalCode = $_POST["postalCode"];
    $country = $_POST["country"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $paymentMethod = $_POST["paymentMethod"];
    $membershipDuration = $_POST["membershipDuration"];
    $personalTrainer = $_POST["personalTrainer"];
    $gymExperience = $_POST["gymExperience"];

    // Perform further processing, validation, and database storage as needed

    // For this example, let's just print the received data
    echo "<h2>Form Data Received:</h2>";
    echo "<p>Name: $firstName $lastName</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Current Weight: $currentWeight lbs</p>";
    echo "<p>Desired Weight: $desiredWeight lbs</p>";
    echo "<p>Height: $height</p>";
    echo "<p>Address: $streetAddress, $city, $state, $postalCode, $country</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
    echo "<h3>Membership Details:</h3>";
    echo "<p>Payment Method: $paymentMethod</p>";
    echo "<p>Membership Duration: $membershipDuration</p>";
    echo "<p>Personal Trainer: $personalTrainer</p>";
    echo "<p>Gym Experience: $gymExperience</p>";
} else {
    // Redirect or handle invalid requests
    header("Location: index.html");
    exit();
}
?>