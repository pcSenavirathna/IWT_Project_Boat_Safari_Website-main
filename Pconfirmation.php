<!DOCTYPE html>
<html>
  <head>
    <title>
      Confirm Password
    </title>

    <link rel="Stylesheet" href="Css/Pforgetpassword.css">
  </head>
  <body>
    
  <div class="box">
    <h2>Enter New password</h2>

    <form method="post" action="php/PnewPassword.php">
      <div class="user-box">
       <input type="password" name="password" required>
        <label>New Password</label>
      </div>
      <div class="user-box">
       <input type="password" name="confirmpassword" required>
        <label>Confirm Password</label>
      </div>
      <a>
        <input type="submit" name="verify" value="Verify Password">
      </a>
    </form>
  </div>
  </body>
</html>