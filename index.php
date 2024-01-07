<?php get_header(); ?>

<div class="container mx-auto mt-10 mb-8">

<div class="mx-auto max-w-screen-md font-bold text-3xl">
  <?php  
    if (is_search()) {
      echo "<h1>Search Results for '" . get_search_query() . "'</h1>";
    }
  ?>
</div>

<?php 
    if ( is_home() || is_search() || is_archive() )  {
        // Default loop for search and archive pages
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_format() );
            endwhile;
        endif;
    }
    ?>

</div>

<div class="mx-auto max-w-screen-md text-center">
  <?php the_posts_pagination(array(
    'mid_size'  => 1,
  )); ?>
</div>

<?php 
get_footer();