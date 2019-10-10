<?php $marquee = "Log in to post stuff";

$Color1 = "green";
$Color2 = "yellow";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/RegLog.CSS">
    <link rel="stylesheet" href="Require/CSS/Nav.CSS">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <?php require_once("Require/BodyColorEMPTY.PHP");?>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>
    <div class="container">
    <form class="form">
      <div class="center"><h1 class="center form">Login</h1>
        <a href="Register.PHP"><button class="btn btn-primary center aregister" type="submit" action="Register.PHP">
          <style>
          .aregister{text-decoration: none;
            color: white;
            transition: 0.2s}

          .aregister:hover {color:black}
        </style>
        I Regret, I dont have an account </button></a>

      </div>
        <br> <br>

      <div class="form-row alignPad">
        <div class="form-group col-md-6">
          <label for="inputEmail4">User</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Your username, email or usertag">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
        <div class="form-group col-md-4 alignPad">
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck"> Remember me </label>
            </div>
          </div> <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

    <br>
  <footer>
      Do ya' need help?
      <br> <a href="Support.HTML">CONTACT SUPPORT HERE </a>
      <br> <a href="FAQ.PHP">SEE THE FAQ HERE </a>
      <p><marquee> Why are you still here?</marquee></p>
  </footer>
</body>
</html>
