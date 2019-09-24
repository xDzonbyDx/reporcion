<?php $marquee = "Lets create a new profile!!!"?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/RegLog.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo|Righteous&display=swap" rel="stylesheet">
    <title>Register</title>
  </head>
  <body>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>
    <div class="container">
    <form class="form">

      <div class="form-row alignPad">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="John123@gmail.com">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>

      <div class="form-group alignPad">
          <label for="inputAddress">Adress</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Calle 123">
      </div>

      <div class="form-group col-md-6 alignPad">
            <label for="inputCity">Country</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Argentina">
      </div>

        <div>
            <div class="alignPad">
              <label for="inputUsuario ">Username</label>
              <input class="_2hvTZ pexuQ zyHYP" aria-label="Nombre de usuario" aria-required="true" autocapitalize="off" autocorrect="off" maxlength="30" name="username" type="text" value="">
            </div>
        </div>

        <div class="form-group col-md-4 alignPad">
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck"> Remember me </label>
            </div>
          </div> <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>

<br>
<footer>
    Do ya' need help?
    <br> <a href="Support.HTML">CONTACT SUPPORT HERE </a>
    <br> <a href="FAQ.HTML">SEE THE FAQ HERE </a>
    <p><marquee> Why are you still here?</marquee></p>
</footer>
  </body>
</html>
