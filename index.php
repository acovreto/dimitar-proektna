<?php
// session_start();
include('server.php');



// if (isset($_POST['submit']) && !isset($_SESSION['username'])) {
//   echo "<script>alert('You must be signed to write comments! Please sign in!')</script>";
// }
// if (isset($_SESSION['username'])) {

//   if (isset($_POST['submit'])) {
//     $text = strip_tags($_POST['text']);
//     if (empty($text)) {
//       array_push($errors, "Empty comment!");
//     }
//     $author = $_SESSION['username'];

//     $query = "INSERT INTO comments(author,text )
//   VALUES('$author', '$text')";
//     mysqli_query($db, $query);
//   }
//   unset($author);
//   unset($_POST['text']);
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>League Of Legends Made For True Gamers!</title>
  <meta name="title" content="League Of Legends Made For True Gamers!">


  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/logoo.png" type="image/x-icon">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-bg.png">
  <script type="text/javascript" src='https://cdn.tiny.cloud/1/gsaziawy84a3oa8r3uomugy3oidh3zagw62wj981hcbv05eu/tinymce/7/tinymce.min.js' referrerpolicy="origin">
  </script>
  <script type="text/javascript">
    tinymce.init({
      selector: '#comment',
      width: 800,
      height: 200,
      plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'help'
      ],
      toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
      menu: {
        favs: {
          title: 'My Favorites',
          items: 'code visualaid | searchreplace | emoticons'
        }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css'
    });
  </script>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header active" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/lol.png" width="110" height="53" alt="unigine home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>home</a>
          </li>

          <li class="navbar-item">
            <a href="#tournament" class="navbar-link" data-nav-link>tournament</a>
          </li>

          <li class="navbar-item">
            <a href="#news" class="navbar-link" data-nav-link>news</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>contact</a>
          </li>

        </ul>
      </nav>


      <?php
      if (isset($_SESSION['username'])) {
        echo "<a href='sign-out.php'  class='btn' data-btn>SIGN OUT</a>";
        echo "<button class='btn'>Welcome " .  $_SESSION['username'] . "</button>";
      } else {
        echo "<a href='sign-in.php'  class='btn' data-btn> SIGN IN</a>";
      }

      ?>
      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <div class="hero has-before" id="home">
        <div class="container">

          <p class="section-subtitle">Enjoy The Game</p>

          <h1 class="h1 title hero-title">League of Legends Made For <br> True Gamers!</h1>

          <a href="https://signup.leagueoflegends.com/en-us/signup/redownload" target="_blank" class="btn" data-btn>Join Us</a>

          <div class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="850" height="414" alt="hero banner" class="w-100">

            <img src="./assets/images/hero-banner-bg.png" alt="" class="hero-banner-bg">
          </div>

        </div>
      </div>





      <!-- 
        - #UPCOMING
      -->

      <section class="section upcoming" aria-labelledby="upcoming-label" id="tournament">
        <div class="container">

          <p class="section-subtitle" id="upcoming-label" data-reveal="bottom">
            Upcoming Matches
          </p>

          <h2 class="h2 section-title" data-reveal="bottom">
            Battles Extreme <br> Masters <span class="span">Tournament</span>
          </h2>

          <p class="section-text" data-reveal="bottom">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ol class="upcoming-list">

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="./assets/images/t1.png" width="86" height="81" loading="lazy" alt="Purple Death Cadets" class="card-banner">

                <h3 class="h3 card-title">SK Telecom T1</h3>

                <div class="card-meta"><a href="https://lolesports.com/teams/t1" target="_blank">Team Members</a></div>

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="10:00">10:00</time>

                <time class="date" datetime="2022-05-25">25TH May 2024</time>

                <div class="social-wrapper">
                  <a href="https://www.youtube.com/watch?v=brF22NJVeWc" target="_blank" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="https://m.twitch.tv/videos/1975322068" target="_blank" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div>
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="./assets/images/jdg.png" width="86" height="81" loading="lazy" alt="Trigger Brain Squad" class="card-banner">

                <h3 class="h3 card-title">JD Gaming</h3>

                <div class="card-meta"><a href="https://lolesports.com/teams/jd-gaming" target="_blank">Team Members</a></div>

              </div>

            </li>

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="./assets/images/fnc.png" width="86" height="81" loading="lazy" alt="The Black Hat Hackers" class="card-banner">

                <h3 class="h3 card-title">Fnatic</h3>

                <div class="card-meta"><a href="https://lolesports.com/teams/fnatic" target="_blank">Team Members</a></div>

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="12:30">12:30</time>

                <time class="date" datetime="2024-01-10">10TH Jan 2024</time>

                <div class="social-wrapper">
                  <a href="https://www.youtube.com/watch?v=yIvsqgRxDW4" target="_blank" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="https://www.twitch.tv/videos/223997739" target="_blank" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div>
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="./assets/images/g2.png" width="86" height="81" loading="lazy" alt="Your Worst Nightmare" class="card-banner">

                <h3 class="h3 card-title">G2 Esports</h3>

                <div class="card-meta"><a href="https://lolesports.com/teams/g2-esports" target="_blank">Team Members</a></div>

              </div>

            </li>

            <li class="upcoming-item">

              <div class="upcoming-card left has-before" data-reveal="left">

                <img src="./assets/images/blg.png" width="86" height="81" loading="lazy" alt="Witches And Quizards" class="card-banner">

                <h3 class="h3 card-title">Bilibili Gaming</h3>

                <div class="card-meta"><a href="https://lolesports.com/teams/bilibili-gaming" target="_blank">Team Members</a></div>

              </div>

              <div class="upcoming-time" data-reveal="bottom">
                <time class="time" datetime="04:20">04:20</time>

                <time class="date" datetime="2024-12-15">15th Dec 2024</time>

                <div class="social-wrapper">
                  <a href="https://www.youtube.com/watch?v=V0DeION9JLk" target="_blank" class="social-link">
                    <ion-icon name="logo-youtube"></ion-icon>
                  </a>

                  <a href="https://www.twitch.tv/videos/1967327479" target="_blank" class="social-link">
                    <ion-icon name="logo-twitch"></ion-icon>
                  </a>
                </div>
              </div>

              <div class="upcoming-card right has-before" data-reveal="right">

                <img src="./assets/images/geng.png" width="86" height="81" loading="lazy" alt="Resting Bitch Faces" class="card-banner">

                <h3 class="h3 card-title">Gen.G</h3>

                <div class="card-meta"><a href="https://lolesports.com/teams/geng" target="_blank">Team Members</a></div>

              </div>

            </li>

          </ol>

        </div>
      </section>





      <!-- 
        - #NEWS
      -->

      <section class="section news" aria-label="our latest news" id="news">
        <div class="container">

          <p class="section-subtitle" data-reveal="bottom">What's On Our Mind</p>

          <h2 class="h2 section-title" data-reveal="bottom">
            News And <span class="span">Headlines</span>
          </h2>

          <p class="section-text" data-reveal="bottom">
            Our success in creating business solutions is due in large part to our talented and highly committed team.
          </p>

          <ul class="news-list">

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/14.4.jpg" width="600" height="400" loading="lazy" alt="Innovative Business All Over The World." class="img-cover">
                </figure>

                <div class="card-content">

                  <!-- <a href="#" class="card-tag">Business</a> -->

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Feb 21 2024</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text">Dide Bale</p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">PATCH 14.4 NOTES</a>
                  </h3>

                  <p class="card-text">
                    In this week's patch we have quite a few feels-good-to-play quality of life updates for some gameplay systems and champions.
                  </p>

                  <a href="https://www.leagueoflegends.com/en-gb/news/game-updates/patch-14-4-notes/#patch-patch-highlights" target="_blank" class="link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/14.2.jpg" width="600" height="400" loading="lazy" alt="How To Start Initiating An Startup In Few Days." class="img-cover">
                </figure>

                <div class="card-content">

                  <!-- <a href="#" class="card-tag">Startup</a> -->

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Feb 07 2024</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text">Dide Bale</p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">PATCH 14.3 NOTES</a>
                  </h3>

                  <p class="card-text">
                    In this week’s patch, we’re continuing to make follow-up adjustments for champions and items that were affected by the itemization overhaul.
                  </p>

                  <a href="https://www.leagueoflegends.com/en-gb/news/game-updates/patch-14-3-notes/" target="_blank" class="link has-before">Read More</a>

                </div>

              </div>
            </li>

            <li data-reveal="bottom">
              <div class="news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="./assets/images/14.3.jpg" width="600" height="400" loading="lazy" alt="Financial Experts Support Help You To Find Out." class="img-cover">
                </figure>

                <div class="card-content">

                  <!-- <a href="#" class="card-tag">Finance</a> -->

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="card-meta-text" datetime="2022-01-01">Jan 26 2024</time>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                      <p class="card-meta-text">Dide Bale</p>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">PATCH 14.2 NOTES</a>
                  </h3>

                  <p class="card-text">
                    In this week's patch we’re looking to address some of the champions that the 14.1 changes hit hardest.
                  </p>

                  <a href="https://www.leagueoflegends.com/en-gb/news/game-updates/patch-14-2-notes/" target="_blank" class="link has-before">Read More</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/lol.png" width="150" height="73" loading="lazy" alt="Unigine logo">
          </a>

          <p class="footer-text">
            League of Legends is a team-based strategy game where two teams of five powerful champions face off to destroy the other’s base.
          </p>

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/leagueoflegends/" target="_blank" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://twitter.com/LeagueOfLegends" target="_blank" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/_dimoskiii/" target="_blank" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@leagueoflegends" target="_blank" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Usefull Links</p>

          <ul>

            <li>
              <a href="https://lolesports.com/en" target="_blank" class="footer-link">Esports</a>
            </li>

            <li>
              <a href="https://www.leagueoflegends.com/en-gb/champions/" target="_blank" class="footer-link">Champions</a>
            </li>

            <li>
              <a href="https://www.riotgames.com/en" target="_blank" class="footer-link">Riot Games</a>
            </li>

            <li>
              <a href="https://support.riotgames.com/hc/en-us" target="_blank" class="footer-link">Riot Support</a>
            </li>

            <li>
              <a href="https://authenticate.riotgames.com/?client_id=prod-xsso-leagueoflegends&code_challenge=DaX4jRWuWT4Z8--tDEE35j_m-s4giuDo7RISThFkSOU&method=riot_identity&platform=web&redirect_uri=https%3A%2F%2Fauth.riotgames.com%2Fauthorize%3Fclient_id%3Dprod-xsso-leagueoflegends%26code_challenge%3DDaX4jRWuWT4Z8--tDEE35j_m-s4giuDo7RISThFkSOU%26code_challenge_method%3DS256%26redirect_uri%3Dhttps%253A%252F%252Fxsso.leagueoflegends.com%252Fredirect%26response_type%3Dcode%26scope%3Dopenid%2520account%2520email%26state%3De844a3c7929097aa2390d0d1fd&security_profile=low" target="_blank" class="footer-link">Sign In</a>
            </li>

            <li>
              <a href="https://signup.leagueoflegends.com/en-gb/signup/index#/" target="_blank" class="footer-link">Sign Up</a>
            </li>


          </ul>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after" id="contact">Contact Us</p>

          <div class="contact-item">
            <span class="span">Location:</span>

            <address class="contact-link">
              Kuratica
            </address>
          </div>

          <div class="contact-item">
            <span class="span">Email:</span>

            <a href="mailto:kuratica@gmail.com" class="contact-link">kuratica@gmail.com</a>
          </div>

          <div class="contact-item">
            <span class="span">Phone:</span>

            <a href="tel:+389 2 986 9154" class="contact-link">+389 2 986 9154</a>
          </div>

        </div>

        <div class="footer-list">

          <p class="title footer-list-title has-after">Newsletter Signup</p>

          <form action="./sendmail.php" method="post" class="footer-form">
            <input type="email" name="email" required placeholder="Your Email" autocomplete="off" class="input-field">

            <button type="submit" name="sendmail" value="sendmail" class="btn" data-btn>Subscribe Now</button>
          </form>
          <?php include "error.php"; ?>
        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 Dide Bale
        </p>

      </div>
    </div>
    <div class="container mt-3" id="comments">

      <form action="coment.php" method="post">
        <div class="mb-3 mt-3">
          <label for="comment">Comments:</label>

          <textarea class="form-control bg-primary" rows="1" id="comment" name="text" placeholder="Write a comment..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
      </form>
      <?php include('error.php'); ?>
      <?php
      $sql = "SELECT id, author, text FROM comments ORDER BY id DESC";
      $result = mysqli_query($db, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          echo " Author: " . $row["author"] . "<br>Comment: " . $row["text"] . "<br><br>";
        }
      } else {
        echo "No comments";
      }
      mysqli_close($db);
      ?>
    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - #CUSTOM CURSOR
  -->

  <div class="cursor" data-cursor></div>





  <!-- 
    - custom js link
    
  -->

  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>