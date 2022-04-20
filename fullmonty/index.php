<?php
  function lightboxMarkup($groupName, $dir){
    $files = glob($dir.'/*.{jpeg,jpg,png}', GLOB_BRACE);
    echo "<div class='lightbox-image-container' id='$groupName'>";
    foreach ($files as $file) {
      echo "<a href='$file' class='lightbox-image' data-lightbox='$groupName' rel='$groupName'></a>";
    }
    echo '</div>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>fullmonty</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Open+Sans:400,700" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link href="js/lightbox2/css/lightbox.css" rel="stylesheet">
  <link rel="stylesheet" href="js/swipebox/src/css/swipebox.css">
	<link rel="stylesheet" href="css/main.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png?v=2">
  <link rel="icon" type="image/png" href="favicon-32x32.png?v=2" sizes="32x32">
  <link rel="icon" type="image/png" href="favicon-16x16.png?v=2" sizes="16x16">
  <link rel="manifest" href="manifest.json">
  <meta name="theme-color" content="#ffffff">
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
 <!--  <script type="text/javascript" src="js/lightbox2/js/lightbox.js"></script> -->
  <script src="js/swipebox/src/js/jquery.swipebox.min.js"></script>
  <script src="js/sticky.min.js"></script>

</head>
<body>
	<div class="wrapper">
    	<div class="section" id="section-1">
            <div class="background-overlay"></div>
            <div class="content">
                  <img src="images/svgs/redx_sign.svg" alt="Fullmonty Logo" width="268" height="230">
                  <img src="images/svgs/complete_logo.svg" width="246" height="46">
            </div>
      </div>

      <div class="section" id="section-2">
            <div class="content">
              <h2>Why ?<span class="highlight small"></span></h2>
              <img class="symbol" src="images/svgs/logo_black_large.svg" width="64" height="64">
              <h1>Believe<span class="highlight large"></span></h1>
              <p class="explain">We believe everything we do, should be driven by passion. Every goal is achievable when marked with precision and hard work. If you believe in something just go for it, and let all your energies drive you to achieve it 
As we say it "Go FULLMONTY."</p>
              <img class="bottom-logo left" width="156" height="29" src="images/svgs/complete_logo.svg" alt="fullmonty">
              <img class="bottom-logo right" width="32" height="32" src="images/svgs/logo_black_large.svg" alt="fullmonty">
            </div>
      </div>
        
        
       <div class="section" id="section-3">
            <div class="content">
                <h2>Who ?<span class="highlight small"></span></h2>
                <img class="symbol" src="images/svgs/ON_RED_logo_white_large.svg" width="64" height="64">
                <h1>Work<span class="highlight large"></span></h1>
                <p class="explain">We would love to work with people who share similar belief as us; as well as people who don’t because they are the ones who keep us pushing to get the best out and hope to be acknowledged for our belief and ideas.
And of course, we love the feeling of being tested all the time ;)</p>
                <nav id="portfolio-cat">
                    <a href="#brand" title="Brand"><img src="images/svgs/branding.svg" height="138" width="138"><span>Brand</span></a>
                    <a href="#web" title="Web"><img src="images/svgs/website.svg" height="138" width="138"><span>Web</span></a>
                    <a href="#mobile" title="Mobile"><img src="images/svgs/mobile.svg" height="138" width="138"><span>Mobile</span></a>
                </nav>
              <img class="bottom-logo left" width="156" height="29" src="images/svgs/ON_RED_complete_logo.svg" alt="fullmonty">
              <img class="bottom-logo right" width="32" height="32" src="images/svgs/ON_RED_logo_white_large.svg" alt="fullmonty">
            </div>
      </div>

      <div class="section" id="section-4">
          <div class="content">
              <div class="symbol"><img width="64" height="64" src="images/svgs/logo_black_large.svg"></div>
              <nav id="portfolio-nav">
                    <a href="#brand" title="Brand">Brand</a>
                    <a href="#web" title="Web">Web</a>
                    <a href="#mobile" style="border-right:none;" title="Mobile">Mobile</a>
              </nav>
              <div class="panel active" id="brand">
                  <img class="label" height="110" width="110" src="images/svgs/branding.svg">
                  <div class="work-samples">
                      <div class="sample"><img title="Flow" data-target="#flow-group" src="images/work/thumbnails/thumb_branding/flow_hover.svg" height="180" width="180"></div>
                      <div class="sample"><img title="Route16" data-target="#route16-group" src="images/work/thumbnails/thumb_branding/route16_hover.svg" height="180" width="180"></div>
                      <div class="sample"><img title="South Beach" data-target="#sbeach-group" src="images/work/thumbnails/thumb_branding/southbeach_hover.svg" height="180" width="180"></div>
                  </div>

                  <?php lightboxMarkup('flow-group','images/work/full-view/branding/flow'); ?>
                  <?php lightboxMarkup('route16-group','images/work/full-view/branding/route16'); ?>
                  <?php lightboxMarkup('sbeach-group','images/work/full-view/branding/south_beach'); ?>

              </div>
              <div class="panel" id="web">
                  <img class="label" height="110" width="110" src="images/svgs/website.svg">
                  <div class="work-samples">
                     <div class="sample"> <img title="GQ" data-target="#gq-group" src="images/work/thumbnails/thumb_web/GQ_hover.jpg" height="180" width="180"></div>
                      <div class="sample"><img title="HCAH" data-target="#HCAH-group" src="images/work/thumbnails/thumb_web/HCAH_hover.jpg" height="180" width="180"></div>
                      <div class="sample"><img title="Manipal Digital" data-target="#manipal-group" src="images/work/thumbnails/thumb_web/Manipal_Digital_hover.jpg" height="180" width="180"></div>
                      <div class="sample"><img title="Plant a Tree" data-target="#synapse-group" src="images/work/thumbnails/thumb_web/Synapse_hover.jpg" height="180" width="180"></div>
                     <div class="sample"><img title="SnapDeal Nike" data-target="#snapdeal-group" src="images/work/thumbnails/thumb_web/Snapdeal_Nike_hover.jpg" height="180" width="180"></div>
                     <div class="sample"><img title="Synapse" data-target="#tree-group" src="images/work/thumbnails/thumb_web/Plant_a_Tree_hover.jpg" height="180" width="180"></div>

                  </div>

                  <?php lightboxMarkup('gq-group','images/work/full-view/web/GQ'); ?>
                  <?php lightboxMarkup('HCAH-group','images/work/full-view/web/HCAH'); ?>
                  <?php lightboxMarkup('manipal-group','images/work/full-view/web/Manipal_Digital'); ?>
                  <?php lightboxMarkup('synapse-group','images/work/full-view/web/Plant_a_Tree'); ?>
                  <?php lightboxMarkup('snapdeal-group','images/work/full-view/web/SnapDeal_Nike'); ?>
                  <?php lightboxMarkup('tree-group','images/work/full-view/web/Synapse'); ?>

              </div>
              <div class="panel" id="mobile">
                    <img class="label" height="110" width="110" src="images/svgs/mobile.svg">
                  <div class="work-samples">
                      <div class="sample"><img  title="Burrp" src="images/work/thumbnails/thumb_mobile/burrp_hover.jpg" height="180" width="180" data-target="#burrp-group"></div>
                      <div class="sample"><img title="Topper" src="images/work/thumbnails/thumb_mobile/topper_hover.jpg" height="180" width="180" data-target="#topper-group"></div>
                      <div style="cursor: progress;" class="sample"><img src="images/svgs/coming soon.svg" height="180" width="180"></div>
                  </div>

                  <?php lightboxMarkup('burrp-group','images/work/full-view/mobile/Burrp'); ?>
                  <?php lightboxMarkup('topper-group','images/work/full-view/mobile/Topper'); ?>

              </div>
              <img class="bottom-logo left" width="156" height="29" src="images/svgs/complete_logo.svg" alt="fullmonty">
              <img class="bottom-logo right" width="32" height="32" src="images/svgs/logo_black_large.svg" alt="fullmonty">
          </div>
      </div>

      <div class="section" id="section-5">
          <div class="content">
              <h2>What ?<span class="highlight small"></span></h2>
              <div class="symbol"><img width="64" height="64" src="images/svgs/ON_BLACK_logo_white_large.svg"></div>
              <h1>Connect<span class="highlight large"></span></h1>
              <p class="explain">We are open to critics and praise. Tell us about your views and ideas; if you feel that we can add value to your ideas, let us connect and chat. Looking forward to hear from you.</p>
              <form id="contact-form" method="POST" action="https://formspree.io/visualmodality@gmail.com">
                <input class="u-full-width" name="name" type="text" placeholder="name" required>
                <input class="u-full-width" name="email" type="email" placeholder="email" required>
                <textarea name="message" class="u-full-width" placeholder="write to us" required></textarea>
                <input type="submit" value="Send" name="send" class="button">
              </form>
              <img class="bottom-logo left" width="156" height="29" src="images/svgs/complete_logo_onblack-01.svg" alt="fullmonty">
              <img class="bottom-logo right" width="32" height="32" src="images/svgs/ON_BLACK_logo_white_large.svg" alt="fullmonty">
          </div>
      </div>

      <div class="section" id="section-6">
          <div class="content">
              <h2>Where?<span class="highlight small"></span></h2>
              <img class="symbol" width="64" height="64" src="images/svgs/logo_black_large.svg" alt="fullmonty">
              <p class="call"><span style="margin-right:15px">call : </span> +91 9765566780 </p>
              <div id="map"></div>
              <img class="bottom-logo left" width="156" height="29" src="images/svgs/complete_logo.svg" alt="fullmonty">
              <img class="bottom-logo right" width="32" height="32" src="images/svgs/logo_black_large.svg" alt="fullmonty">
          </div>
       </div>

    </div>
	
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<footer><p>	&copy; 2017 fullmonty, Inc. All rights reserved.</p></footer>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0j7yXCJK7BW1GQB6wZ_8fUTD2_TbEQls&callback=initMap">
    </script>
   <script type="text/javascript" src="js/main.js"></script>
</body>
</html>