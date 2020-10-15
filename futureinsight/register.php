<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="register.css">
  </head>
  <body>
    <div class=""header">
      <h1>Register</h1>
      <form class="" action="registerinfo.php" method="post">
        <table>
          <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput" value=""></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput" value=""></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput" value=""></td>
          </tr>
          <tr>
            <td>Confirm password:</td>
            <td><input type="password" name="password2" class="textInput" value=""></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="register_btn" value="Register"></td>
          </tr>
        </table>

      </form>

    </div>


  </body>
</html>
