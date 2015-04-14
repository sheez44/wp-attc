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
    while (have_posts() ) : the_post();

    get_template_part('content');  

   endwhile;
    else : 
      echo '<p>No content found </p>';
    endif;
    ?>

        </div>
  <?php
    get_footer();
?>