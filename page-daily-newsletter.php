<?php

/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
/* Start the Loop */
while (have_posts()) :
    the_post();
?>
    <div id="content">
        <div class="d-flex p-4 p-md-5 align-items-center bg-gov-blue bg-gradient" style="height: 12vh; min-height: 100px;">
            <div class="container-lg py-4 py-md-5">
                <h1 class="text-white title"><?php the_title() ?></h1>
            </div>
        </div>
        <div class="bg-secondary-subtle">
            <div class="container-lg p-lg-5 p-4 bg-light-subtle">
                <h2>Learn @ Work Week in your inbox</h2>
                <p>Receive daily updates highlighting the L@WW sessions of the day, along with relevant resources to help reinforce your learning or catch up on sessions you may have missed. It will also include L@WW theme content such as quizzes, opportunities to reflect on the day’s events, and inspiring spotlights of employees from across the BC Public Service.</p>
                <p>Each issue will also be posted on this page so you can refer back at any time.</p>
                <h3>Subscribe today</h3>
                <p>Fill out the subscription form to get the newsletter. You can unsubscribe at any time.</p>
                <a href="https://submit.digital.gov.bc.ca/app/form/submit?f=fd03b54b-84aa-4a05-b5ff-c5536b733f57" class="btn btn-primary">Subscribe to the newsletter</a>
                
            </div>
        </div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content() ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->
    </div>
<?php
endwhile; // End of the loop.
get_footer();
