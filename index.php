<?php
/**
 * The main template file
 *
 * @package custom-theme
 */

get_header();
?>

	<main id="primary" class="site-main">
        <h1 class="text-sm text-center">ага - це архив</h1>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			//	get_template_part( 'content-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();

		else :

		//	get_template_part( 'content-parts/content', 'none' );

		endif;
		?>
        <section>
            <h1 class="w-100 text-center text-5xl"><?php single_post_title(); ?></h1>
        </section>
        <section class="pageb articles-list">
            <div class="container">
                <div class="grid grid-cols-4 gap-4">
                    <?php
                    if (have_posts()) {
                        // Start the Loop.
                        while (have_posts()) {
                            the_post();
                            get_template_part('content-parts/content', get_post_format());
                        }
                    } else {
                        get_template_part('content-parts/content', 'none');
                    }
                    ?>
                </div>
            </div>
        </section>
	</main>

<?php
get_sidebar();
get_footer();
