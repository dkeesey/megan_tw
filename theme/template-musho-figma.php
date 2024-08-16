<?php
/*
Template Name: Musho-wp-loop-Template
*/

get_header('musho'); ?>

<section id="primary" class="site-content">
    <main id="main" class="scroll-auto sm:p-4" role="main">


			<?php /* Start the Loop */
   while (have_posts()):
   	the_post();

   	get_template_part('template-parts/content/content', 'page');

   	// If comments are open, or we have at least one comment, load
   	// the comment template.
   	if (comments_open() || get_comments_number()) {
   		comments_template();
   	}
   endwhile;
// End of the loop.
?>


    </main><!-- #main -->
</section><!-- #primary -->

<?php get_footer('musho');
