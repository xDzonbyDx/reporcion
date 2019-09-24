<?php $marquee = "Thats me!!!" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Myself.CSS">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>
<div class="Body white center">

      <h2 class="h2_y_h3">MY POSTS</h2>

      <br>

      <div class="Posts_Feed">
        <br>
            <ul>
                <li> <p class="Posts_comment" >
                  <strong>@TeamConcy</strong>... Thats you!</p>
                    <img src="Gnome.jpg" alt="Your photo" width="100%" height="400px">
                  </li>

                <li>
                <article class="Posts_comment"><h2>Do you want to say something?</h2><br>
                    <textarea class="Post_comment" width="300px" height="300px"> type here!!</textarea>
                </article>
              </li>
              <br>
              <br>
              <li>
                <article class="Posts_Title">HIIIIII<br>
                    <div  class="Posts_text">Im new here, I dont know what can I do, what should I do now? </div>
                </article>
              </li>
              <br>
              <br>
                <li><article class="Posts_Title">THE PREMIUM SUSCRIPTION IS A SCAM!!
                        <div  class="Posts_text">GIVE MY MONEY BACK, YOU DIDNT GAVE M...</div>
                </article></li>
              <br>
              <br>
                <li><article class="Posts_Title">Hi @GuysCancel!!
                        <div  class="Posts_text">Are you new in this place...</div>
                </article></li>
                <br>
                <br>
                <li>You dont have any other post
                        <div  class="Posts_text center">What if we post something else?</div>
                </li>
                <br>
                <br>
            </ul>
        </div>
      </div>

  <footer>
      Do ya' need help?
      <br> <a href="Support.HTML">CONTACT SUPPORT HERE </a>
      <br> <a href="FAQ.HTML">SEE THE FAQ HERE </a>
      <p><marquee> Why are you still here?</marquee></p>
  </footer>
</body>
</html>
