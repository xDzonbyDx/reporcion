<?php $marquee = "Remember to read before asking something!";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/FAQ.CSS">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <title>FAQ - I AM</title>
  </head>
  <body>
    <?php require_once("Require/Nav.PHP");?>
    <?php require_once("Require/Header.PHP") ;?>
<div class="Body white center">

      <h2>Frequently Asked Questions</h2>

      <br>

      <div class="Feed">
        <br>
                <article class="Question">Q: Why is this website existing?<br>
                    <div  class="Answer"><strong>R:</strong> I AM was created as an "exam" to become a programmer</div>
                </article>

              <br>
              <article class="Question">Q: Who is the developer?
                        <div  class="Answer">A: It was developed by a team of 4 web proggramers, their names will be revealed soon. Stay tuned!</div>
                </article>

              <br>

              <article class="Question">Q: How does the @tag system works?
                        <div  class="Answer">A: Every user can have a name and an ID, the name can be changed if you want, but the @tag cant.<br>
                                            If you tag "Richard" with his name, you will tag everyone called Richard!!<br>
                                            If you tag "@Richard", you will be targeting one Richard in specific!!</div>
                </article>
                <br>

              <article class="Question">Q: What do you mean with "Premium Suscription"?
                        <div  class="Answer">A: In a future, the site will have a premium feature. You will unlock:<br>
                                              <ul>
                                                <li>More colours for your background, letters and profile.</li>
                                                <li>More fonts for your letters.</li>
                                                <li>You will unlock an exclusive logo for every month you have with premium, they will be unic and exclusive</li>
                                                <li>And More!!</li></div>
                </article>

              <br>

            <article class="Question">Q: How can I add friends?
                      <div  class="Answer">A: You can add friends if
                                    <ul><li>You go to the profile of your upcoming friend and then clicking "Add as a friend".</li>
                                        <li>Search it and then adding it.</li>
                                          </div>
              </article>
            <br>
        </div>
      </div>
      <br><h2 class="center"><a href="Home.HTML">Are you ready to post?</a></h2>
      <br>
  <footer>
      Do ya' need help?
      <br> <a href="Support.HTML">CONTACT SUPPORT HERE </a>
      <br> <a href="FAQ.HTML">SEE THE FAQ HER... Oh wait, you are now here... </a>
      <p><marquee> Why are you still here?</marquee></p>
  </footer>
</body>
</html>
