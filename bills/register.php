<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="user.css">
</head>

<body>
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="First Name" name="fname" required/>
      <input type="text" placeholder="Last Name" name="lname" required/>
      <input type="text" placeholder="meterID" name="meterID" required/>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>