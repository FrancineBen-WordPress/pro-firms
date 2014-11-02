<?php

get_header();  ?>

<?php global $post; ?>
<?php if (has_post_thumbnail($post->ID)): ?>
  <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600,1000), false) ?>
<div class="hero" style="background:url(<?php echo $src[0];?>) no-repeat center center; background-size: cover"></div>
<div class="main">
<?php else: ?>
  <div class="main">
<?php endif; ?>
<div class="team">
  <div class="wrapper clearfix">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>