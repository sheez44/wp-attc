<?php

  get_header();	?>
  <div class="header--background"></div>
  
  <h1 class="welcome--info">Welkom op de website van ATTC '77</h1>

      <?php
// get sticky posts from DB
$sticky = get_option('sticky_posts');
// check if there are any
if (!empty($sticky)) {
    // optional: sort the newest IDs first
    rsort($sticky);
    // override the query
    $args = array(
        'posts_per_page' => 1,
        'post__in' => $sticky,
        'ignore_sticky_posts' => 1

    );
    query_posts($args);
    // the loop
    while (have_posts()) {
         the_post();
         // your code
         get_template_part('content', get_post_format() );  
    }
}
// https://codex.wordpress.org/Sticky_Posts
      ?>   

  <!-- END OF TOP SECTION -->
  <h2 class="news__header">Laatste nieuws:</h2>
  <div class="container"> 

    <?php

      if (have_posts() ) :
        while (have_posts() ) : the_post(); 

       endwhile;
        else : 
          echo '<p>No content found </p>';
      endif;

      // custom loop starts here

      $tabNews = new WP_Query('category_name=nieuws&posts_per_page=3&ignore_sticky_posts=true');

      if ($tabNews->have_posts() ) :
        while ($tabNews->have_posts() ) : $tabNews->the_post(); 
        get_template_part('content', get_post_format() );  

        endwhile;

        else : 
          echo '<p>No content found </p>';

      endif;
      ?>   
  </div>

  

  <?php get_sidebar(); ?>

  <div class="bottom--container">

    <!-- CLUBBLAD -->
    <div class="clubblad bottom__section">
      <div id="box">

        <div id="overlay">
          <a target="_blank" href="downloads/clubblad/maart_2015.pdf" id="clubblad__download">Download</a>
        </div>

      </div>
    </div>

    <!-- DOWNLOADS -->
    <div class="bottom__section bottom__section--downloads">
      <h3>Downloads</h3>

    </div>

    <!-- CONTACT -->
    <div class="tab-panels bottom__section bottom__section--contact">
      <ul class="tabs">
        <li rel="panel1" class="active">Routebeschrijving</li>
        <li rel="panel2">Contact</li>
      </ul>
      <div id="panel1" class="panel active">
        <a href="https://www.google.com/maps/place/kantine+ATTC+%27%2777/@51.507929,5.641242,16z/data=!4m2!3m1!1s0x0:0xccec4b04dc58b3e5?hl=en-US"><img src="<?php bloginfo('template_url'); ?> /img/informatie/google_maps.png" alt="google maps"></a>
      </div>
      <div id="panel2" class="panel contact">
        <h3>Contact</h3>
        <p>Tafeltennishal ATTC '77</p>
        <p>Jan van Rixtelstraat 30</p>
        <p>5735 GA AARLE-RIXTEL</p>
        <p>06-22176068</p>
      </div>
    </div>

  </div>

  <?php
    get_footer();
?>