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

   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fp-img'); ?></a>

  <?php if( is_search() || is_archive() || is_front_page() ) { ?>
    <p><?php echo get_the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>">Lees meer&raquo;</a>

  </p> <?php
  } else {
    the_content();
  } ?>

   
  </article>  