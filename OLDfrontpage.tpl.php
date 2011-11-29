<!-- Container Start -->
<div id="header" style="position: relative;">
  <div id="top"></div>
</div>

<div class="container_16">

  <!-- Top Back -->

  <div id="top-back"></div>

  <div>
  <!-- Logo -->
    <div class="grid_5 logo">
      <a href="/"  title="fem-fx">
      <img src="<?php echo $path ?>image/theme/logo.png" alt=""/></a>
    </div>

    <!-- Menu -->
    <div class="grid_8 menu">
      <?php echo render($page['menu']) ?>
    </div>


    <!-- Mini Button -->
    <div class="grid_2 nav-button">
    <?php global $user; ?>
    <?php if($user->uid) : ?>
        <a href="/user" id="allpage-signup-top" title="My Profile" class="buton-login-mini"></a>
    <?php else: ?>
        <a href="/user"  id="allpage-login-top"  title="Login/Signup" class="buton-signup-mini"></a>
    <?php endif; ?>
    	<a href="/search" id="allpage-search-top" title="Search" class="buton-search-mini"></a>
    </div>
  </div>


  <!-- Big Message -->
  <div class="grid_11 top-message">
    <h1>Contrary to popular belief, girls can be good at games.</h1>
  </div>

  <!-- Emty Grid -->
  <div class="grid_5">
  </div>


  <!-- Slide Show-->
  <div class="grid_16">
  <div id="slider-ribbon"></div>
  <div id="slider">
    <div id="slide-backs"></div>
    <div id="slides">
      <div class="slides_container">
        <a href="http://fem-fx.com/news/team-fem-fxs-website-launch"><img src="<?php echo $path ?>image/post/slide-1.png" width="919" height="326" alt="Team femFx"  /></a>
      </div>
    </div>
    </div>
  </div>

  <!-- Hot News-->
  <div id="hotnews-style" class="grid_10 hotnews-homepage">
    <h1><img src="<?php echo $path ?>image/theme/hotnews.png" alt=""  /> Hot News</h1>
    <div id="news">
        <?php echo render($page['hotnews']) ?>
    </div>
  </div>
   <!-- Login and Signup-->
  <div class="grid_4" id="login-signup">
  <?php if($user->uid) : ?>
        <a href="/user" id="homepage-login-button" class="green-button"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/login-icon.png" alt="" class="button-icon"  /> My Profile</a>
  <?php else: ?>
       <a href="/user" id="homepage-login-button" class="green-button"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/login-icon.png" alt="" class="button-icon"  /> Login</a>
       <a href="/user" id="homepage-signup-button" class="red-button"><span class="red-right"></span><img src="<?php echo $path ?>image/theme/icon-signup.png" alt="" class="button-icon"  /> Signup</a>
  <?php endif; ?>
  </div>
  


</div>

<!-- Dot-->
<div class="dot"></div>

<!-- Top4 Start-->
<div class="container_16">

  <!-- Go!Music-->
  <div style="margin-left:2px;" class="grid_4 mini-advert">
    <div id="image-hover"><a href="http://twitter.com/#!/TeamFemFx"><img src="<?php echo $path ?>image/theme/spacer.png" alt="" width="220" height="110" /></a></div>
    <img src="<?php echo $path ?>image/post/twitter.jpg" alt="" width="220" height="110"/>
    <h1><span style="color:#e73b12;">Go!</span>Twitter</h1>
    <p>Stay up to date with the latest news in our community and our team. Follow us!^.^.</p>
    <a href="http://twitter.com/#!/TeamFemFx" class="green-button" style=" margin-left:5px;"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/icon-okay.png" alt="" class="button-icon"  /> Follow</a>
  </div>

  <!-- Go!Video-->
  <div class="grid_4 mini-advert">
    <div id="image-hover-two"><a href="http://www.twitch.tv/slagpits"><img src="<?php echo $path ?>image/theme/spacer.png" alt="" width="220" height="110" /></a></div>
    <img src="<?php echo $path ?>image/post/slagspit.jpg" alt="" width="220" height="110"/>
    <h1><span style="color:#809421;">Go!</span>Slags Pit</h1>
    <p>"In The Slag Pits A Few Items Rule The Day, Fun Sc2, Fun eSports and Fun Tech Overall!"</p>
    <a href="http://www.twitch.tv/slagpits" class="green-button" style=" margin-left:5px;"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/icon-video.png" alt="" class="button-icon"  /> Watch</a>
  </div>

  <!-- Go!Picture-->
  <div class="grid_4 mini-advert">
    <div id="image-hover-three"><a href="http://www.facebook.com/pages/Team-Fem-FX/139204676156579"><img src="<?php echo $path ?>image/theme/spacer.png" alt="" width="220" height="110" /></a></div>
    <img src="<?php echo $path ?>image/post/facebook.png" alt="" width="220" height="110"/>
    <h1><span style="color:#259ae0;">Go!</span>Facebook</h1>
    <p>Join us in Facebook! Share with us and be part of the group. Don't forget to "Like" us!:)</p>
    <a href="http://www.facebook.com/pages/Team-Fem-FX/139204676156579" class="green-button" style=" margin-left:5px;"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/icon-picture.png" alt="" class="button-icon"  /> Facebook</a>
  </div>

  <!-- Go!Billboard-->
  <div class="grid_4 mini-advert">
    <div id="image-hover-four"><a href="/stream"><img src="<?php echo $path ?>image/theme/spacer.png" alt="" width="220" height="110" /></a></div>
    <img src="<?php echo $path ?>image/post/stream.jpg" alt="" width="220" height="110"/>
    <h1><span style="color:#fba400;">Go!</span>Stream</h1>
    <p>Here you can find more than just the popular stream channels. Fem-fx proudly supporting girls in esports.</p>
    <a href="/stream" class="green-button" style=" margin-left:5px;"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/icon-video.png" alt="" class="button-icon"  /> Watch</a>
  </div>

</div>

<!-- Dot-->
<div class="dot" style="margin-top:26px;"></div>

<!-- Latest Elements and New Videos Start-->
<div class="container_16">

  <!-- Tab Menu Start -->
  <div style="margin-left:1px; margin-top:-10px;" class="grid_8 latest-elements">
    <h1>Latest Posts</h1>
    News and Information about fem-fx, streams, tournaments, podcasts and more.<br>

    <!-- Tab Title -->
    <div class='tabbed_content'>
      <!-- Tab Content -->
      <div class='slide_content'>
      <div class='tabslider'>

        <?php echo render($page['content_1']) ?>

      </div>
      </div>
      <!-- Content Finish -->
    </div>
    <!-- Tab Finish -->
  </div>
  <!-- Grid End -->

  <!-- New Video Start -->
  <div style="margin-left:9px; margin-top:-10px;" class="grid_8 latest-elements">
    <h1>Featured Video</h1>
    <p>....in the world of Starcraft II</p>
    <div class="new-video">
      <iframe width="460" height="345" src="http://www.youtube.com/embed/9yOw-hYMbDY" frameborder="0" allowfullscreen></iframe>
      <h2>Idra vs MMA</h2>
      <p>Idra quits a potentially won game vs mma...</p>
      <a href="/content/idra-vs-mma" class="green-button" style="float:right; margin-bottom:8px; margin-top:3px;"><span class="green-right"></span>More</a>
      <a href="http://youtu.be/9yOw-hYMbDY" class="green-button" style="float:right; margin-bottom:8px; margin-top:3px;"><span class="green-right"></span><img src="<?php echo $path ?>image/theme/icon-video.png" alt="" class="button-icon"  />Video</a>
    </div>
  </div>
  <!-- End -->
</div>

<!-- Dot-->
<div class="dot" style="margin-top:26px;"></div>

<div id="random-poster-back"></div>
<div class="container_16">
   <!-- Poster Back-->

      <!-- Random Poster Start-->
      <div id="random-poster" class="grid_16">
        <h1>Advertisement</h1>
        <p>Thanks for the support!</p>
        <?php echo render($page['footer_3']) ?>
      </div>
      <!-- Random Poster End-->

  <!-- New Users-->
  <div id="new-users" class="grid_8">
    <h1>New User's</h1>
    <p>Welcome to our newest users ^.^!</p>
      <?php echo render($page['footer_1']) ?>
  </div>

  <!-- New Comments-->
  <div id="new-comments" class="grid_8">
    <h1>New Comment's</h1>
    <?php echo render($page['footer_2']) ?>
  </div>
  
</div>

<!-- Footer Back-->
<div id="footer-back"></div>
<div class="container_16">
  <div id="footer-register" class="grid_8">
    <p>Copyright © 2011 fem-fx.com. All rights reserved. </p>
    <ul>
      <li><a href="/">Home Page</a></li>
      <li><a href="/term-use">Term of Use</a></li>
      <li><a href="/privacy">Privacy Policy</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>

  <div id="footer-social" class="grid_8">
    <ul>
      <li><a href="http://twitter.com/#!/TeamFemFx"><img src="<?php echo $path ?>image/theme/twitter.png" alt="" /></a></li>
      <li><a href="http://www.facebook.com/pages/Team-Fem-FX/139204676156579"><img src="<?php echo $path ?>image/theme/facebook.png" alt="" /></a></li>
      <li><a href="http://fem-fx.com/rss.xml"><img src="<?php echo $path ?>image/theme/rss.png" alt="" /></a></li>
    </ul>
  </div>
</div>