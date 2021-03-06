<!doctype html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Victor Dubbeld</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="style.css">


</head>

<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Hello.</h4>
            <p class="text-muted">Browse my site & feel free to check out my past work! Contact me for any inquiries!
            </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="https://github.com/vicdubbeld" target="_blank" class="text-white">GitHub</a></li>
              <li><a href="https://www.linkedin.com/in/victor-dubbeld-85017017a/" target="_blank"
                  class="text-white">LinkedIn</a></li>
              <li><a href="#" class="text-white">Email me
                  <form class="contact-form" action="contactform.php" method="post">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="mail" placeholder="Your e-mail">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="Message"></textarea>
                    <button type="submit" name="submit">Send Mail</button>
                  </form>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <!-- put logo here -->
          <strong>Victor.</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main role="main">
    <div class="jumbotron jumbotron-fluid">

      <div class="container">
        <h1 class="display-4">Web Developer.</h1>
        <p class="lead">
          Let's build together.
        </p>
      </div>
    </div>


    <div class="album py-5 bg-light">
      <div class="container">
        <h1 class="work">Projects</h1>
        <div class="row">


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" id="liri-card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>LIRI Project</title>
                <a href="https://github.com/vicdubbeld/liri-node-app" target="_blank">
                  <!-- <rect width="100%" height="100%"/> -->
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">LIRI</text>
              </svg>




            </div>
            <div class="card-body">
              <p class="card-text">Use of Node.js with Spotify API to search songs via command line</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" id="giftune-card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>GifTune</title>
                <a href="https://the-knights-of-the-round-table.github.io/GifTunes/" target="_blank">
                  <!-- <rect width="100%" height="100%" fill="#55595c" /> -->
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">GifTune</text>
              </svg>




            </div>
            <div class="card-body">
              <p class="card-text">Web app that utilizes Giphy and Spotify API</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" id="train-card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>When's the next train?</title>
                <a href="https://vicdubbeld.github.io/train-activity/" target="_blank">
                  <!-- <rect width="100%" height="100%" fill="#55595c" /> -->
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">When's the next train?</text>
              </svg>




            </div>
            <div class="card-body">
              <p class="card-text">Utilizing Firebase database, this web app allows you to see when the next train is
                and stores info in Firebase.</p>
              <div class="d-flex justify-content-between align-items-center">

              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" id="trivia-card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Trivia Game</title>
                <a href="https://vicdubbeld.github.io/TriviaGame/" target="_blank">
                  <!-- <rect width="100%" height="100%" fill="#55595c" /> -->
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                    Trivia Game</text>
              </svg>



            </div>
            <div class="card-body">
              <p class="card-text">Take this timed quiz to test your rubber-band knowledge!</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm" id="mushroom-card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>.js Mushroom Game</title>
                <a href="https://vicdubbeld.github.io/unit-4-game/" target="_blank">
                  <!-- <rect width="100%" height="100%" fill="#55595c" /> -->
                  <text x="50%" y="50%" fill="#eceeef" dy=".3em">.js
                    Mushroom Game</text>
              </svg>


            </div>
            <div class="card-body">
              <p class="card-text">Play this mushroom game to test your logic!</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                <title>Psychic Game</title>
                <a href="https://vicdubbeld.github.io/psychic-game/" target="_blank">
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Psychic
                    Game</text>
              </svg>


            </div>
            <div class="card-body">
              <p class="card-text">Try and guess what letter the computer is thinking of!</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <!-- <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a
          href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p> -->
    </div>
  </footer>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <!-- <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
  <!-- <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
    crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>