<div class="single-container">
  <div class="s">
    <div class="s-browser">
      <div class="s-circle-r"></div>
      <div class="s-circle-y"></div>
      <div class="s-circle-g"></div>
      <div class ="s-title"><?php echo get_the_title(); ?></div>
    </div>
            <?php 
                if (has_post_thumbnail()) {
                    ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="project" class="s-img" />
                    <?php
                } 
            ?>
  </div>

  <div class="s-info">
    <div class="single-title"><?php echo get_the_title(); ?></div>
      <div class="single-content">        
        <?php echo get_the_content(); ?>
      </div>
  </div>
</div>
