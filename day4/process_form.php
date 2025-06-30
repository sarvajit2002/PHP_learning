<?php
// process_form.php
require 'form_validation.php';

$name = $email = $gender = "";
$nameErr = $emailErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize input
  $name = test_input($_POST["name"] ?? '');
  $email = test_input($_POST["email"] ?? '');
  $gender = test_input($_POST["gender"] ?? '');

  // Validate input
  $nameErr = validate_required($name, "Name");
  $emailErr = validate_required($email, "Email");
  $genderErr = validate_required($gender, "Gender");

  if (empty($emailErr)) {
    $emailErr = validate_email($email);
  }

  // Output result
  if (empty($nameErr) && empty($emailErr) && empty($genderErr)) {
    echo "<h3>Form submitted successfully!</h3>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Gender: $gender<br>";
  } else {
    echo "<h3>Errors:</h3>";
    echo $nameErr ? "$nameErr<br>" : "";
    echo $emailErr ? "$emailErr<br>" : "";
    echo $genderErr ? "$genderErr<br>" : "";
    echo "<br><a href='form.php'>Go back to form</a>";
  }
}
?>
