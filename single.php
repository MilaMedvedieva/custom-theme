<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package custom-theme
 */

get_header();
?>
        <?php
        if ( have_posts() ) while ( have_posts() ) : the_post();
            $post_id = get_the_ID();
            $post_title = get_the_title();
            $post_content = get_the_content();
        endwhile;
        //хлебные крошки
        //$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); //look laters
        ?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>>">
        <div class="">
            <?php if ( has_post_thumbnail()) : ?>
                <?php  echo the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>
       <div>
           <h1><?php single_post_title(); ?></h1>
           <h3>Single Post</h3>
       </div>
        <div>
            <?php the_content(); ?>
        </div>

        <div>
            <p>Sidebar</p>
            <?php //get_sidebar(); ?>
        </div>
    </article>


<?php
get_footer();
