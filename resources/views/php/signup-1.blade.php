<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <h2>Create a New Account</h2>
  <span>Already A Member? <a href="login.html">Login</a></span>
  <form>
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="fname" placeholder="First Name" required>
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lname" placeholder="Last Name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <input type="submit" value="Sign Up">
    </div>
  </form>
</body>
</html>



