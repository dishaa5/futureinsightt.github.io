<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>

    <div class=""header">
      <h1>Login</h1>
      <form class="" action="loginval.php" method="post">
        <table>
          <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput" value=""></td>
          </tr>
          <tr>

            <td>Password:</td>
            <td><input type="password" name="password" class="textInput" value=""></td>
          </tr>
          <tr>
            <tr>
              <td></td>
              <td><input type="submit" class="btn btn-dark"  name="login_btn" value="Login"></td>
            </tr>

        </table>

      </form>

    </div>

  </body>
</html>
