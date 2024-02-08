<!DOCTYPE html>
<html>
  <head>
    <title>
      confirmation code
    </title>

    <link rel="Stylesheet" href="Css/Pconfirm.css">
  </head>
  <body>
    
  <div class="box">
    <h2>Enter verify code</h2>

    <form method="post" action="php/Potpvalid.php">
      <div class="user-box">
       <input type="text" name="otp" required>
        <label>varify code : </label>
      </div>
      <a>
        <input type="submit" name="button" value="Submit">
      </a>
    </form>
  </div>
  </body>
</html>