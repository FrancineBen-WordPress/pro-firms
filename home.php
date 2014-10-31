<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="wrapper">

    <div class="articles clearfix">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.articles -->

  </div> <!-- /.wrapper -->
</div> <!-- /.main -->

<?php get_footer(); ?>