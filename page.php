<?php

  get_header(); ?>

 <?php

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h2 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
  <h5>Geplaatst door: <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a></h5>
  <p><?php the_content(); ?></p>
    
  </article>  
    <?php  endwhile;
    else : 
      echo '<p>No content found </p>';
    endif;
    ?>

        
  <?php
    get_footer();
?>

</div>