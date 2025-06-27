<?php
// Initialize variables
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Form Validation</title>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span style="color:red">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <span style="color:red">* <?php echo $nameErr; ?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
  <span style="color:red">* <?php echo $emailErr; ?></span>
  <br><br>

  Website: <input type="text" name="website" value="<?php echo $website; ?>">
  <br><br>

  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>Female
  <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>Male
  <input type="radio" name="gender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>>Other
  <span style="color:red">* <?php echo $genderErr; ?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
// Display submitted values if no errors
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nameErr == "" && $emailErr == "" && $genderErr == "") {
  echo "<h3>Your Input:</h3>";
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Website: $website<br>";
  echo "Comment: $comment<br>";
  echo "Gender: $gender<br>";
}
?>

</body>
</html>
