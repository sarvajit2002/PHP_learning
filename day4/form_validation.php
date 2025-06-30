<?php
// form_validation.php

function test_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

function validate_required($field, $field_name) {
  if (empty($field)) {
    return "$field_name is required";
  }
  return "";
}

function validate_email($email) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "Invalid email format";
  }
  return "";
}
?>
