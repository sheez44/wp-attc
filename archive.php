<?php

  get_header();	

  if (have_posts() ) : 

    ?>

  <h2 class="archive-title"><?php 

    if(is_category() ) {
      single_cat_title();
    } elseif (is_tag() ) {
      singe_tag_title();
    } elseif (is_author() ) {
      the_post();
      echo 'Berichten van auteur: ' . get_the_author();
    } elseif (is_day() ) {
      echo 'Alle berichten van ' . get_the_date();
    } elseif (is_month() ) {
      echo 'Alle berichten van ' . get_the_date('F Y');
    } elseif (is_year() ) {
      echo 'Alle berichten uit ' . get_the_date('Y');
    } else {
      echo 'Archief';
    }

 ?>
  </h2>

  <div class="container">
  <?php
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

	<p><?php the_excerpt(); ?></p>
    
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