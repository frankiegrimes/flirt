  <!--- HEAD  -->

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flirt</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>

<body>

  <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  </div>

  <!--- NAVIGATION  -->

  <nav class="top-bar" id="example-menu">

    <div class="top-bar-left hide-for-small-only">
      <a href="index.html"><span class="logo">FLIRT</span></a>
    </div>

    <div class="top-bar-right">
      <ul class="vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
         <li><a href="stuck.html">Das Stück</a></li>
        <li><a href="team.html">Das Team</a></li>
        <li><a href="beispiele.html">Beispiele</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
        <li><a href="wach.html">WACH?</a></li>
      </ul>
    </div>
  </nav>
   
   <!--- LANDING PAGE  -->

  <section class="eyes-video">
      <video autoplay preload loop muted poster="assets/img/poster.png" id="video_bg">
        <source src="assets/video/eyes.webm" type="video/webm">
        <source src="assets/video/eyes.mp4" type="video/mp4">
      </video>
      <div class="videohue"></div>

      <div class="grid-x">
        <div class="cell">
          <h1 class="text-center">FLIRT</h1>
        </div>
      </div>

     <div class="grid-x align-center align-middle">
        <div class="small-12 cell">
          <a href="#info-video" rel="" id="down-btn">
            <img src="assets/img/down.png">
          </a>
        </div>
      </div>
       
  </section>

      <!--- INFORMATION VIDEO  -->
      <section id="info-video">
            <div class="responsive-embed widescreen">
                    <video id="info-vid" controls src="assets/video/info-video.mp4" muted>
                      
                    </video>
                    <div class="grid-x vid-controls">
               
                      <div class="small-12 cell">
                        <a id="replay-btn">
                          <img src="assets/img/replay.png">
                        </a>

                      </div>
                    
                    <div class="small-12 cell">
                      <a id="play-btn">
                          <img src="assets/img/play.png">
                        </a>
                    </div>
                  </div>
         
           </div>
         </section>

    <!--- WEBCAM SECTION  -->

    <section class="upload-section" id="anchor">

             
  
      <div class="callout" style="display: block;">
            <div class="grix-x grid-padding-x">
               <div class="small-12 cell">
                   <h3 class="text-center"><strong>ALLGEMEINER FEHLER</strong><br> Sorry! Da ist etwas schief gelaufen. Bitte nochmal versuchen.</h3>
                 </div>
                  <div class="small-12 cell align-center back-btn">
                   <a href="index.html#upload-form">
                     <img src="assets/img/back.png">
                   </a>
                 </div>
             </div>

          </div>

</section>
  <!--- FOOTER -->

  <footer>
      <div class="footer-light">
        <div class="grix-x grid-padding-x">
          <div class="small-12 cell">
             <p class="text-center">Gefördert von:</p>
         </div>
       </div>
       
        <div class="grid-x grid-padding-x footer-logos">

          <div class="small-12 medium-2 medium-offset-1 cell">
     
          <img src="assets/img/logo-1.png">
          
          </div>
          <div class="small-12 medium-2 cell">
            
              <img src="assets/img/logo-2.png">
          
          </div>
          <div class="small-12 medium-2 cell">
            
            <img src="assets/img/logo-3.png">
        
          </div>
          <div class="small-12 medium-2 cell">
            
            <img src="assets/img/logo-4.png">
      
          </div>
          <div class="small-12 medium-2 cell">
         
          <img src="assets/img/logo-5.png">
          
          </div>

        </div>

       
        <div class="grix-x grid-padding-x">
          <div class="small-12">
             <p class="text-center">In Koproduktion mit:</p>
         </div>
       </div>
       <div class="grix-x grid-padding-x align-center fft">
       <div class="small-2 small-offset-1 cell">
            
              <img src="assets/img/fft.png">
          
          </div>
          <div class="small-2 cell">
                
                  <img src="assets/img/TStrahl.png">
              
              </div>
      </div>
      </div>
    <div class="footer-menu">
      <div class="grid-x">
        <div class="cell">
        <ul class="small-vertical medium-horizontal menu align-center">
         <li><a href="stuck.html">Das Stück</a></li>
        <li><a href="team.html">Das Team</a></li>
        <li><a href="beispiele.html">Beispiele</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
        <li><a href="wach.html">WACH?</a></li>
        </div>
      </div>
    </div>
    <div class="footer-dark">
      <div class="grid-x">
        <div class="small-6 cell">
          <p>Site by Frankie Grimes</p>
        </div>
        <div class="small-6 cell">
          <p>©Flirt Performace 2017</p>
        </div>
      </div>
      </div>
  </footer>

  <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/what-input/dist/what-input.js"></script>
  <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
  <script src="js/min/app-min.js"></script>

</body>
</html>
