<?php
// Initialize errors array
$errors = [];

// Validate name
if (empty($_POST['name'])) {
    $errors['name'] = "Name is required.";
} else {
    $name = htmlspecialchars(trim($_POST['name']));
}

// Validate email
if (empty($_POST['email'])) {
    $errors['email'] = "Email is required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email address.";
} else {
    $email = htmlspecialchars(trim($_POST['email']));
}

// Validate message
if (empty($_POST['message'])) {
    $errors['message'] = "Message cannot be empty.";
} else {
    $message = htmlspecialchars(trim($_POST['message']));
}

// Validate subject
$subject_options = ["General Inquiry", "Support", "Feedback"];
if (empty($_POST['subject']) || !in_array($_POST['subject'], $subject_options)) {
    $errors['subject'] = "Please select a valid subject.";
} else {
    $subject = $_POST['subject'];
}

// Validate contact method
if (empty($_POST['contact_method']) || !in_array($_POST['contact_method'], ["Email", "Phone"])) {
    $errors['contact_method'] = "Select a contact method.";
} else {
    $contact_method = $_POST['contact_method'];
}

// Validate agreement
if (empty($_POST['agree'])) {
    $errors['agree'] = "You must agree to terms.";
}

// If no errors, save to file
if (empty($errors)) {
    $file = 'submissions.txt';
    
    $entry = "------------------------------\n";
    $entry .= "Name: $name\n";
    $entry .= "Email: $email\n";
    $entry .= "Message: $message\n";
    $entry .= "Subject: $subject\n";
    $entry .= "Contact Method: $contact_method\n";
    $entry .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";

    // Append to file
    file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

    // Optional: clear POST so form resets
    $_POST = [];
    
    // Optional: show a success message
    echo '<div class="toast show">Message submitted successfully!</div>';
}
?>
