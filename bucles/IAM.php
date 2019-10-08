<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signupstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo|Righteous&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>

    <header>
      SING UP
    </header>
    <div class="container">
    <h1>I AM</h1>
    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationTooltip01">First name</label>
        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Last name</label>
        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
        <div class="valid-tooltip">
          Looks good!
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
          </div>
          <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
          <div class="invalid-tooltip">
            Please choose a unique and valid username.
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
</div>
<div class="Inicio">
  <p>
 Do you have an account? <a href="loginIAM.php">Log In</a>
</p>

</div>

  </body>
</html>
