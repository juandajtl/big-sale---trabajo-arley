<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>SignUp</title>
</head>
<body>

<?php if (!empty($message)) : ?>
  <p> <?= $message ?></p>
<?php endif; ?>

<h1 class="title">SignUp</h1>
<a class="login" href="login.php">Login</a>

<form class="post" action="signup.php" method="POST">
  <input class="email" name="email" type="text" placeholder="Enter your email">
  <input class="password" name="password" type="password" placeholder="Enter your Password">
  <input class="password2" name="confirm_password" type="password" placeholder="Confirm Password">
  <input class="submit" type="submit" value="Submit">
</form>
</body>  
</head>
</html>