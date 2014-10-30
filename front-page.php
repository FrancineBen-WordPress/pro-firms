<?php get_header();  ?>

<div class="front">
  <?php global $post; ?>
  <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600,1000), false) ?>
<div class="hero" style="background:url(<?php echo $src[0];?>) no-repeat center center; background-size: cover">
</div>

  <div class="wrapper clearfix">


    <div class="content">
      
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>