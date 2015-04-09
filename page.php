<?php

  get_header(); ?>

  <div class="container"> <?php

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h2 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
  <h5>Geplaatst door: <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a></h5>
  <p><?php the_content(); ?></p>
    
  </article>  
    <?php  endwhile;
    else : 
      echo '<p>No content found </p>';
    endif;
    ?>

        </div>
  <?php
    get_footer();
?>