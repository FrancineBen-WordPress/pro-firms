<?php get_header();  ?>

<div class="main">
  <div class="wrapper clearfix contact">

    <div class="content">
      
    <?php 

      $expr = array(
        'child_of' => $post->ID,
        'title_li' => ''
      );

    ?>

      <?php wp_list_pages($expr); ?>
      
      <?php 
        $expertiseQuery = new WP_Query(
          array(
            'post_parent' => 18
            // 'pagename' => 'Expertise/Tax Law'
          )
        ); ?>

      <?php // Start the loop ?>
      <?php if ( $expertiseQuery->have_posts() ) while ( $expertiseQuery->have_posts() ) : $expertiseQuery->the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <?php wp_reset_postdata(); ?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>