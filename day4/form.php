<!-- form.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Reusable Form Validation</title>
</head>
<body>

<h2>Contact Form</h2>
<form method="post" action="process_form.php">
  Name: <input type="text" name="name">
  <br><br>
  Email: <input type="text" name="email">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
