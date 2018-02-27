<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <header></header>
    <!-- Think about this and change as needed. -->
    <section>
      <div class="container">
        <!-- Start the loop -->
        <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
          <div class="row">
            <div class="col">
              <p>Content here.</p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

<?php get_footer(); ?>
