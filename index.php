<?php get_header(); ?>
<hr>

 <h1> <?php echo get_the_title(); ?></h1>
 <?php echo get_the_content(); ?>
 <p><?php echo get_the_author(); ?> </p>
 <?php echo get_the_date("d/m/Y"); ?>

<hr>
<?php get_footer(); ?>