<?php
$UserTag  = NULL;
$UserName = NULL;
$Email    = NULL;
$Password = NULL;
$Color1   = NULL;
$Color2   = NULL;

//buscafallas
$ErrorsEmail    = [];
$ErrorsUserName = [];
$ErrorsUserTag  = [];
$ErrorsPassword = [];

if ($_GET) {

    {if (filter_var($_GET["Email"],FILTER_VALIDATE_EMAIL))
      {$ErrorsEmail[] = ["This is not an Email"] ;};};

    {if (strlen($_GET["Password"]) ==0)
      {$ErrorsPassword[] = ["This field is empty"] ;};};

    {if (strlen($_GET["UserName"]) ==0)
      {$ErrorsUserName[] = ["This field is empty"] ;};};

    {if (strlen($_GET["UserTag"]) ==0)
      {$ErrorsUserTag[] = ["This field is empty"] ;}}};



if ($_GET) {
  $UserTag  = $_GET["UserTag"];
  $UserName = $_GET["UserName"];
  $Email    = $_GET["Email"];
  $Password = $_GET["Password"];
  $Color1   = $_GET["Color1"];
  $Color2   = $_GET["Color2"];
};

//header("Location:Home.php");exit;
//session_start();

$marquee = "Do you have an account? It seems like you dont";


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
    <title>Register</title>
  </head>
  <body>
    <?php require_once("Require/BodyColorEMPTY.PHP");?>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>
    <div class="container">
      <div class="center"><h1 class="center form">Register</h1>
        <a href="Login.PHP"><button type="submit" class="btn btn-primary center">I Regret, I Already have an account</button> </a>
      </div>
        <br> <br>

    <form class="form" method="GET" action="Register.PHP">
      <div class="form-row alignPad">
        <div class="form-group col-md-6">



          <label for="inputEmail4">Account Tag (Your user ID)</label>
          <input type="text" class="form-control" name="UserTag" placeholder="Once you create your account. IT WONT BE CHANGED BACK" required maxlength="25" value="<?php echo $UserTag;?>">
        </div>
        <div class="form-group col-md-6">



          <label for="inputPassword4">Username</label>
          <input type="text" class="form-control" name="UserName" placeholder="You can change it in any moment" required  value="<?php echo $UserName;?>">
        </div>
      </div>

      <div class="form-group col-md-12 alignPad">



          <label for="inputAddress">Email</label>
          <input type="email" class="form-control" name="Email" placeholder="John123@gmail.com" required  value="<?php echo $Email;?>">
      </div>

      <div class="form-group col-md-12 alignPad">



            <label for="inputCity">Password</label>
            <input type="password" class="form-control" name="Password" placeholder="Password" required min="8" value="<?php echo $Password;?>">
      </div>

        <div class="form-group col-md-6 alignPad">
          <div class="form-group">
            <div class="form-check">
              <h1><input class="form-check-input" type="checkbox" name="gridCheck">
              <label class="form-check-label" for="gridCheck"> Remember me</label> </h1>
            </div>
          </div>
        </div> <button type="submit" class="btn btn-primary">Register</button>
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
