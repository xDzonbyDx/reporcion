<?php

$marquee = "Welcome to your page!!!";
$Color1 = "rgb(100,0,0)";
$Color2 = "rgb(0,100,0)";
$Text = "rgb(150,150,150)";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Home.CSS">
    <link rel="stylesheet" href="Require/CSS/Nav.CSS">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <title>Home</title>
  </head>
  <body>
    <?php require_once("Require/BodyColorEMPTY.PHP");?>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>

<div class=" white center">

      <h2 class="h2_y_h3">HOME</h2>

      <br>

      <div class="Feed">
        <?php require_once("Require/BodyFeedEMPTY.PHP");?>
        <br>
            <ul>
              <li>
                <section class="searchList">
                	<form action="" method="" >
                		<input type="search" placeholder="What are you looking for?" > <button>Search</button>

                	</form>
                </section> </li>
                <li>
                <article><h2>Say something!</h2><br>
                    <textarea class="Post_comment" width="100%" height="400px"> </textarea>
                </article>
              </li>
              <br>
              <br>
              <li>
                <article class="Posts_Title">
                  <?php require_once("Require/BodyCommentsEMPTY.PHP");?> New in IAM?<br>
                    <div  class="Posts_text">First of all, thanks you for checking our page... </div>
                </article>
              </li>
              <br>
              <br>
                <li><article class="Posts_Title">Become a premium user with just 4.99$ per month!!
                        <div  class="Posts_text">You will get a lot of aventages, like...</div>
                </article></li>
              <br>
              <br>
                <li><article class="Posts_Title">@GuysCancel Is now my friend!!
                        <div  class="Posts_text">Say something about it...</div>
                </article></li>
                <br>
                <br>
                  <li><article class="Posts_Title">What do you think about my logo? <img src="TPizzaLogo.PNG" alt="Pizza">
                          <div  class="Posts_text">Hi, im the creator of this little franchise and...</div>
                </article></li>
                <br>
                <br>
            </ul>
        </div>
      </div>


</body>
<footer>
    Do ya' need help?
    <br> <a href="Support.HTML">CONTACT SUPPORT HERE </a>
    <br> <a href="FAQ.PHP">SEE THE FAQ HERE </a>
    <p><marquee> Why are you still here?</marquee></p>
</footer>
</html>
