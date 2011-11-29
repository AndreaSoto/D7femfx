<div class="user-comments  post-blog-read">
  <?php print $picture ?>

  <?php if ($new): ?>
    <span class="new"><?php print $new ?></span>
  <?php endif; ?>


  <div class="submitted">
    <h6><?php print $submitted; ?></h6>
  </div>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
    <div class="user-signature clearfix">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>
 <div id="comment-links">
      <h6>
          <?php print render($content['links']) ?>
          <?php print '&nbsp;&nbsp;' . $permalink; ?>
      </h6>
  </div>
</div>
<br/>