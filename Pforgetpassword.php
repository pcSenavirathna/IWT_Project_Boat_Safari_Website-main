<!DOCTYPE html>
<html>
  <head>
    <title>
      Forget Paswword
    </title>

    <link rel="Stylesheet" href="Css/Pforgetpassword.css">
  </head>
  <body>
    
  <div class="box">
    <h2>Send to code E-mail</h2>

    <form method="post" action="php/Pforgetpassword.forget.php">
      <div class="user-box">
       <input type="email" name="email" required>
        <label>E-mail ID</label>
      </div>
      <a>
        <input type="submit" name="submit" value="Send code E-mail">
      </a>
    </form>
  </div>
  </body>
</html>