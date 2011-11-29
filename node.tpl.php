<div class="grid_10">
      <div class="portfolio-one-left">
            <?php print render($content['field_image']);?>
            </div>
      <h1> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
      <p>
           <?php
               hide($content['field_image']);
               hide($content['field_tags']);
               hide($content['links']);
               print render($content);
            ?>
      </p>
</div>
