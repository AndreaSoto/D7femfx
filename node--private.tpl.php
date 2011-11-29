<!-- If !$page display a different css class-->
<!-- If !$page display a different css class-->
<?php if (!$page) : ?>
<div class="discounted-item job portfolio-one post-blog leclear">
<div class="portfolio-one-left">
<?php else: ?>
<div class="discounted-item job post-blog-read">
<div class="post-blog-read">
<?php endif; ?>
    <?php print render($content['field_image']);?>
    </div>
    <?php if (!$page) : ?>
        <h1> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
        <h2><?php print $submitted;?> | <?php echo $comment_count; ?> COMMENTS </h2>
    <?php else:
        print $submitted;?> | <?php echo $comment_count; ?> COMMENTS
    <?php endif; ?>
    <p>
    <?php
       hide($content['field_image']);
       hide($content['field_tags']);
       hide($content['links']);
       hide($content['comments']);
       print render($content);
    ?>
    </p>
    <?php if (!$page) : ?>
        <a href="<?php print $node_url; ?>" class="green-button" style="float:left; margin:-10px 0px 0px 4px;">
          <span class="green-right"></span>More</a>
    <?php else:
         echo render($content['field_tags']); print '<br/>';
         echo render($content['comments']);print '<br/>';
    endif; ?>
</div>
        
