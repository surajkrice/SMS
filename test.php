<!DOCTYPE html>
<html>
<head>
  <title>User login and registeration</title>
  <link rel="Stylesheet" href="Stylesheet.css" type="text/css">
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css">

</head>

<div class="conatiner">
  <div class="login-box">
  <div class="row">
    <div class="col-md-6 login-left">
      <h2> Login Here </h2>
      <form action="validation.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login </button>
        </form>
      </div>

      <div class="col-md-6 login-right">
        <h2> Register Here </h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
              <button type="submit" class="btn btn-primary"> Register </button>
          </form>
        </div>

      </div>

</body>
</body>
</html>
