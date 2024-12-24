<html>
<head>
  <title>Registration Form using PHP and JavaScript</title>
</head>
<body>
  <div>
    <form method="post" action="">
      <h2>Registration Form</h2>

      Name: <input type="text" name="Name" placeholder="Name" /><br><br>
      Mobile No: <input type="text" name="mob" maxlength="10" placeholder="Mobile No" /><br><br>
      Email: <input type="email" name="email" placeholder="Email" /><br><br>
      Username: <input type="text" name="user" placeholder="Username" /><br><br>
      Password: <input type="password" name="password" placeholder="Password" /><br><br>

      <input type="submit" value="Submit" name="submit" /><br><br>
    </form>
  </div>

  <?php
  if (isset($_POST['submit'])) {
      $name = $_POST['Name'];
      $email = $_POST['email'];
      $mob = $_POST['mob'];
      $user = $_POST['user'];
      $password = $_POST['password'];

      if (empty($name)) {
          echo "<script>alert('Enter Name !!');</script>";
      } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
          echo "<script>alert('Enter Valid Name !!');</script>";
      } else if (empty($email)) {
          echo "<script>alert('Enter Email !!');</script>";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<script>alert('Enter Valid Email !!');</script>";
      } else if (empty($mob)) {
          echo "<script>alert('Enter Mobile No !!');</script>";
      } else if (!is_numeric($mob)) {
          echo "<script>alert('Enter Valid Mobile No !!');</script>";
      } else if (strlen($mob) != 10) {
          echo "<script>alert('Enter Valid Mobile No !!');</script>";
      } else if (empty($user)) {
          echo "<script>alert('Enter Username !!');</script>";
      } else if (empty($password)) {
          echo "<script>alert('Enter Password !!');</script>";
      } else if (strlen($password) < 8) {
          echo "<script>alert('Password must contain 8 characters !!');</script>";
      } else {
          echo "<script>alert('Registration Successful !');</script>";
      }
  }
  ?>
</body>
</html>

