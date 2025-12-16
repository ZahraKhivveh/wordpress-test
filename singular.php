<?php get_header(); ?>
<hr>

 <h1> <?php the_title(); ?></h1>
 <?php the_content(); ?>

 <?php $categories = get_the_category();
 if($categories){
    foreach($categories as $category){
        echo $category -> name . "" ;
    }
 }
 ?>
 <hr>
    <?php $tags = get_the_tags(); ?>
    <?php if ($tags) { ?>
        <p>Tags:
        <?php foreach ($tags as $tag) { ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
        <?php } ?>
    <?php } ?>
 
<hr>
<?php get_footer(); ?>