<div id="<?php $page ? '' :  'listing' ?>">
    <div class="discounted-item movie video-playlist">
        <div  class="video-playlist-left"><?php print render($content['field_avatar']); ?></div>
        <h1> <a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
        <?php echo render($content['field_tags']); ?>
       <?php if (!$page) : ?>
        <a class="iframe" href="<?php print $node_url; ?>" title="Watch Stream!!">
            <img src="<?php echo $path;?>image/theme/play.png" alt="" class="video-playlist-right"></a>
        <?php endif; ?>
    </div>
    <?php if ($page) : ?>
            <div id="page">
            <h1> <?php print $title; ?></h1>
            <?php hide($content['comments']); ?>
            <?php
                hide($content['links']);
                print render($content); print '<br/>';
            ?>
            <?php echo render($content['comments']); ?>
            </div>
    <?php endif; ?>
</div>