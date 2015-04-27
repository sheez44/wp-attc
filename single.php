<?php
  get_header();	
?>
  <div class="container"> 
    <?php

    if (have_posts() ) :
      while (have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  	<h2 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	</h2>
    <h5 class="post-info">Geplaatst door: <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a> op <?php the_time('j F Y'); ?>   |
      <?php 

      $categories = get_the_category();
      $seperator = ", ";
      $output = '';

      if($categories) {

        foreach($categories as $category) {
          $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator;
        }

        echo trim($output, $seperator);
      }

      ?>
    </h5>

    <?php the_post_thumbnail('single-blog-image') ?>
    

  	<p><?php the_content(); ?></p>
      
    </article>  

      
      <?php  endwhile;
      else : 
        echo '<p>No content found </p>';
      endif;
      ?>

    <div class="post-navigation">
    <?php previous_post('&laquo; &laquo; %', '', 'yes'); ?>
|   <?php next_post('% &raquo; &raquo; ', '', 'yes'); ?> </div>


  
  </div> <!-- container -->

  <?php get_sidebar(); ?>

<?php

  get_footer();
?>