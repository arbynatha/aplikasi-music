<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Arbynatha Music</title>
  <meta name="title" content="Music Player">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

  <!-- 
    - material icon font
  -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,-25" />

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

  <!-- 
    - #TOP APP BAR
  -->

  <div class="top-bar wrapper">

    <div class="logo wrapper">
      <span class="material-symbols-rounded">graphic_eq</span>

      <h1 class="title-lg">Music Player</h1>
    </div>

    <div class="top-bar-actions">
      <button class="btn-icon" data-playlist-toggler>
        <span class="material-symbols-rounded">queue_music</span>
      </button>
    </div>

  </div>





  <main>
    <article>

      <!-- 
        - #PLAYER
      -->

      <div class="player">
        <div class="container">

          <figure class="music-banner">
            <img src="./assets/images/poster-4.jpg" width="800" height="800" alt="Tomorrow (Farewell) (Master) Album Poster"
              class="img-cover" data-player-banner>
          </figure>

          <div class="music-content">

            <h2 class="headline-sm" data-title>Tomorrow (Farewell)</h2>

            <p class="label-lg label-wrapper wrapper">
              <span data-album>arbynatha01-playlist</span>

              <span data-year>2023</span>
            </p>

            <p class="label-md artist" data-artist>Hideyuki Fukasawa</p>

            <div class="seek-control">

              <div>
                <div class="range-wrapper">
                  <input type="range" step="1" max="60" value="0" class="range" data-range data-seek>

                  <div class="range-fill" data-range-fill></div>
                </div>

                <div class="duration-label wrapper">
                  <span class="label-md" data-running-time>0:00</span>

                  <span class="label-md" data-duration>1:00</span>
                </div>
              </div>

              <div class="volume">
                <button class="btn-icon" data-volume-btn>
                  <span class="material-symbols-rounded">volume_up</span>
                </button>

                <div class="range-wrapper">
                  <input type="range" step="0.05" max="1" value="1" class="range" data-range data-volume>

                  <div class="range-fill" data-range-fill></div>
                </div>
              </div>

            </div>

            <div class="player-control wrapper">

              <button class="btn-icon toggle" data-repeat>
                <span class="material-symbols-rounded default-icon">repeat</span>
                <span class="material-symbols-rounded active-icon">repeat_one</span>
              </button>

              <button class="btn-icon" data-skip-prev>
                <span class="material-symbols-rounded">skip_previous</span>
              </button>

              <button class="btn-icon play" data-play-btn>
                <span class="material-symbols-rounded default-icon">play_arrow</span>
                <span class="material-symbols-rounded active-icon">pause</span>
              </button>

              <button class="btn-icon" data-skip-next>
                <span class="material-symbols-rounded">skip_next</span>
              </button>

              <button class="btn-icon toggle" data-shuffle>
                <span class="material-symbols-rounded">shuffle</span>
              </button>

            </div>

          </div>

        </div>
      </div>





      <!-- 
        - #PLAYLIST
      -->

      <div class="playlist" data-playlist>

        <ul class="music-list" data-music-list></ul>

      </div>

      <div class="overlay" data-playlist-toggler data-overlay></div>

    </article>
  </main>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\aplikasi-music\resources\views/index.blade.php ENDPATH**/ ?>