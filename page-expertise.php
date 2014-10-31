<?php get_header();  ?>

<div class="main">
  <div class="wrapper clearfix contact">

    <div class="content">
      
<?php

// Get the page as an Object
$expertise_page =  get_page_by_title('Expertise');

  $mypages = get_pages( array( 
    'child_of' => $expertise_page->ID, 
    'sort_column' => 'post_date', 
    'sort_order' => 'desc' )
  );


  foreach( $mypages as $page ) {    
    $content = $page->post_content;
    if ( ! $page) // Check for empty page
      continue;
    $content = apply_filters( 'the_content', $content );
  ?>
    <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
    <div class="entry"><?php echo $content; ?></div>
  <?php
  } 
?>

    </div> <!-- /.content -->

    <?php //get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>