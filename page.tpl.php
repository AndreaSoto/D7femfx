<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24641900-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Container Start -->
<!-- Top Login Bar -->
<ol id="navigation">
    <?php global $user; ?>
    <?php if($user->uid) : ?>
      <li id="nick" class="account first">
	    <a href="/user">Hello  <strong><?php echo $user->name?></a></strong>
      </li>
	  <li id="divider">
		<span class="divider"></span>
	  </li>
	  <li id="msgs">
        <?php echo $newmsgs ?><a href="/messages" title="Messages"><?php echo $count;?> Messages</a>
      </li>
	  <li id="divider">
		<span class="divider"></span>
	  </li>
	  <li id="login/logout" style="margin-right:5px;" class="logout last">
	    <a href="/user/logout" title="log out">log out</a>
	  </li>
	<?php else: ?>
	  <li id="login/logout">
	    <a href="/user/login" title="Login">Login </a>or<a href="/user/register" title="Register" >Register </a>
	  </li>
	<?php endif; ?>
</ol>
<!-- End Top Login Bar -->

<div id="header" style="position: relative;">
  <div id="top"></div>
</div>

<div class="container_16">
  
  <!-- Top Back -->
  
  <div id="top-back-two"></div>
  
  <div>
  <!-- Logo -->
    <div class="grid_5 logo">
     <a href="/"  title="fem-fx">
      <img src="<?php echo $path ?>image/theme/logo.png" alt=""/></a>
    </div>
    
    <!-- Menu -->
    <div class="grid_11 menu">
      <?php echo render($page['menu']) ?>

  </div>

  
  <!-- Big Message -->
  <div class="grid_11 top-message leclear">
    <h1><?php echo $title ?></h1>
  </div>
  
  
  <!-- Emty Grid l2HTML NOOOB! -->
  <div class="grid_5">
  </div>
  
  <div class="grid_16 blog-page">
    <h2 class="blog-page-space"></h2> 
  </div>
  
  <!-- Detail -->
  <div <?php if (render($page['rightside'])): ?>class="grid_11"<?php else: ?>class="grid_16" <?php endif; ?>>

    <?php print $messages; ?>
    <?php if (!render($page['rightside'])): print $breadcrumb; endif; ?>
    <?php if ($tabs): ?>
      <div id="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>

    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php echo render($page['content']) ?>
  </div>
  
  <!-- Team #1-->
  <div class="grid_5">
    <?php echo render($page['rightside']) ?>

  </div>
</div>
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
</div>
<!-- Footer Back-->
<div id="footer-back"></div>
<div class="container_16">
  <div id="footer-register" class="grid_8">
    <p>Copright © 2011 fem-fx.com. All rights reserved. </p>
    <ul>
      <li><a href="/">Home Page</a></li>
      <li><a href="/term-use">Term of Use</a></li>
       <li><a href="/privacy">Privacy Policy</a></li>
       <li><a href="/copyright">Copyrights</a></li>
      <li><a href="/contact-us">Sponsor Us</a></li>
      <li><a href="/contact-us">Contact Us</a></li>
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