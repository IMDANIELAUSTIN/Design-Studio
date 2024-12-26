<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $business_name = $_POST['business_name'];
    $business_website = $_POST['business_website'];
    $email = $_POST['email'];
    $budget = $_POST['budget'];
    $time_allowance = $_POST['time_allowance'];
    $package_options = $_POST['package_options'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send an email (example)
    $to = "contact@astndsgn.com"; "me@imdanielaustin.com";
    $headers = "From: $email";
    $body = "New Project Inquiry:\n\nName: $first_name $last_name\nBusiness: $business_name\nWebsite: $business_website\nEmail: $email\nBudget: $budget\nTime Allowance: $time_allowance\nPackage: $package_options\nSubject: $subject\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your form was successfully submitted!";
    } else {
        echo "Error submitting form. Please try again.";
    }
}
?>
