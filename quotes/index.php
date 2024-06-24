<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Quotes, Motivasi, dan Diary Love</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Stylesheet for carousel -->
    <style>
       
    </style>
</head>
<body>
  <div id="loader">
    <img src="loader.png" alt="Loading Image" id="loading-image">
  </div>
    <div id="content" style="display: none;">
    <header>
        <nav>
            <ul>
                <li><a href="kutipan/index.html">Kutipan</a></li>
                <li><a href="motivasi/index.html">Motivasi</a></li>
                <li><a href="diary/index.html">Diary Love</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Selamat Datang</h1>
        <p>Kamu dapat membaca Random Quote disini. Tentunya tanpa Gangguan Iklan</p>

        <!-- Slideshow container -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <a href="kutipan/index.html"><img src="gambar/kutipan.jpg" style="width:100%"></a>
              <div class="text">Kutipan</div>
            </div>
          
            <div class="mySlides fade">
              <a href="motivasi/index.html"><img src="gambar/motivasi.jpg" style="width:100%"></a>
              <div class="text">Motivasi</div>
            </div>
          
            <div class="mySlides fade">
              <a href="diary/index.html"><img src="gambar/diary.jpg" style="width:100%"></a>
              <div class="text">Diary</div>
            </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
    </div>
    </main>

  <script src="scripts/loader.js">
      
      </script>
</body>
</html>
