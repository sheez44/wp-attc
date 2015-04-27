<?php

  get_header();	?>

  <div class="container"> <?php

  if (have_posts() ) : ?>

    <h2 class="search__header">Zoekresultaten voor: <?php the_search_query(); ?></h2>

  <?php
    while (have_posts() ) : the_post(); 

      get_template_part('content', get_post_format() );  

  endwhile;
    else : 
      echo '<p>No content found </p>';
    endif;
    ?>

  </div>

  <?php get_sidebar(); ?>
  <?php
    get_footer();
?>