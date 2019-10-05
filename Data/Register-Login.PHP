<?php $marquee = "It seems like you are not logged yet" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/RegLog.CSS">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <title>Register Login</title>
  </head>
  <body>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>
    <br>
    <p class="texto" for="Action">What do you want to do</p>
      <a href="Register.PHP"><button type="button" class="btn btn-primary btn-lg btn-block">REGISTER</button></a>
        <br>
      <a href="Login.PHP"><button type="button" class="btn btn-secondary btn-lg btn-block">LOGIN</button></a>
    <br> <br> <br>
  <footer>
      Do ya' need help?
      <br> <a href="Support.HTML">CONTACT SUPPORT HERE </a>
      <br> <a href="FAQ.PHP">SEE THE FAQ HERE </a>
      <p><marquee> Why are you still here?</marquee></p>
  </footer>
</body>
</html>
