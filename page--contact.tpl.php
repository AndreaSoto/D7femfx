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
    <div class="grid_8 menu">
      <?php echo render($page['menu']) ?>
    </div>


    <!-- Mini Button -->
    <div class="grid_3 nav-button">
        <?php global $user; ?>
        <?php if($user->uid) : ?>
            <h6>Welcome, <a href="/user"><?php echo $user->name?></a></h6>
            <?php echo $newmsgs ?><a href="/messages" id="allpage-signup-top" title="Messages" class="buton-msg-mini"></a>
        <a href="/user/logout" id="allpage-login-top" title="log out" class="buton-login-mini"></a>
        <?php else: ?>
            <a href="/user"  id="allpage-login-top"  title="Login/Signup" class="buton-signup-mini"></a>
        <?php endif; ?>
    </div>
  </div>

  
  <!-- Big Message -->
  <div class="grid_11 top-message leclear">
    <h1>Apply</h1>
  </div>
  
  <!-- Emty Grid l2HTML NOOOB! -->
  <div class="grid_5">
  </div>
  
  <div class="grid_16 blog-page">
    <h2 class="blog-page-space"></h2> 
  </div>
  
  <!-- Detail -->
  <div class="<?php echo grid_11; ?>">
    
    <?php print $messages; ?>
    <?php if ($tabs): ?>
      <div id="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>

    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

      <p>We are always looking for new people and any help is always very appreciated.
      Before applying please take a minute to read <a href="/about-us">'about us' </a> section.</p>

      See the following positions available and rules:

    <p>
        <strong>Team fem-Fx ground rules</strong></p>
    <ol style="font-weight: bold;">
        <li>
            <strong>Represent our team proudly.</strong></li>
        <li>
            <strong>Use Ventrilo/Skype when you are online to communicate with your team</strong></li>
        <li>
            <strong>Actively participate in our site. </strong></li>
        <li>
            <strong>Be in our bnet channel #Team fem-Fx</strong></li>
    </ol>

    <h6>
        Starcraft II Team</h6>

        <strong>Pro Players:&nbsp;</strong>Fem-FX members that want&nbsp;financial support of Fem-FX.com.<br/>
    <div>
        <em>Requirements:</em></div>
    <ol>
        <li>
            <div>
                Play a <u><strong>minimum of 60</strong></u> 1v1 matches&nbsp;per week on ladder.</div>
        </li>
        <li>
            Participate in at least <u><strong>2</strong></u> tournaments (of any kind) per month.</li>
        <li>
            Platinum + (or be&nbsp;<u><strong>showing*</strong></u> a desire to improve).</li>
        <li>
            <u><strong>Must</strong></u> attend&nbsp;<u><strong>all</strong></u> practices.&nbsp;</li>
        <li>Must be a girl</li>
    </ol>
    <div>
        <strong>Casual Players:&nbsp;</strong>Fem-FX members that do not wish to go&nbsp;pro but are activly playing and want to help and/or be involved in the team.</div>
    <div>
        <em>Requirements</em>:&nbsp;</div>
    <ol>
        <li>
            <div>
                Play a <u><strong>minimum of 30&nbsp;</strong></u>1v1 matches&nbsp;per week on ladder.</div>
        </li>
        <li>
            Participate in at least <u><strong>1</strong></u> <em>amateur or pro&nbsp;level </em>tournament per month. (ie. bunny cup/mouse pad cup)</li>
        <li>
            Gold + (or be&nbsp;<u><strong>showing*</strong></u> a desire to improve).</li>
        <li>
            Must attend at least <strong>one day</strong> of practice per week.&nbsp;</li>
        <li>Must be a girl</li>
    </ol>
    <div>
        <strong>Coach:&nbsp;</strong>Fem-FX member that activly helps with practices and coach&nbsp;players on the 1v1 basics.</div>
    <div>
        <em>Requirements:&nbsp;</em></div>
    <ol>
        <li>
            <div>
                Coach at least&nbsp;1 girl&nbsp;per week.</div>
        </li>
        <li>
            Master +</li>
        <li>
            Must attend to all practices.</li>
    </ol>

    <h6>Editorial Team</h6>
     <div>
	<strong>Writers:&nbsp;</strong>Write&nbsp;the content of the website&nbsp;(news and active participants in the forums)</div>
    <div>
	<em>Requirements:&nbsp;</em></div>
    <ol>
        <li>
            <div>
                Must provide 2 articles&nbsp;per week to the Editor in Chief. The articles can be about the team, highlight team members, starcraft news, patch updates, or other major competition news. The articles must not be plagerized, or you will be banned immediately with no warnings.</div>
        </li>
        <li>
            Stay up to date with the latest news on our team.</li>
    </ol>

      <strong><em>*showing a desire to improve means: You are going above and beyond your minimum requirements, or spending a measureable amount of time improving your play. This will ultimately be judged by the team captain and will be enforced by the administration team.</strong></em>
      <br/>
      <p>
      If you are willing to comply with the above regulations and would still enjoy becoming part of the Fem-Fx team, please fill in the following categories about yourself to ensure your application can be noted.
      </p><strong>
      Introduce yourself:<br/>
      Why would yo like to join?<br/>
      Bnet ID and # / League:<br/>
      Race:<br/>
      Gender:<br/>
      Skype ID:<br/>
      TimeZone:<br/>
      </strong><br/>

      <em>Note: There is a period of 2 months where new applicants will be on trial. This is only to see if they fit the team.</em>

    <?php echo render($page['content']) ?>
  </div>
  
  <!-- Team #1-->
  <div class="grid_5">
    <?php echo render($page['rightside']) ?>

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