<?php
/**
 * Template part for displaying page content in page.php
 * @package custom-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    if ( have_rows('components' )) {

        while( have_rows('components') )
        {
            the_row();
            $layout = get_row_layout();
            $inclusion = get_stylesheet_directory() . DIRECTORY_SEPARATOR . "tpl-partials" . DIRECTORY_SEPARATOR ."{$layout}.php";

            if( file_exists( $inclusion ) )
            {
                include( $inclusion );
            }

        }
    }else{ ?>
        <div class="p-6">
           <div class="container">
             <p class="text-xl">Вы не создали ни одного блока! Перейдите в редактор и сделайте это!</p>
           </div>
        </div>
        <div class="<?php echo (is_front_page()) ? 'mb-10 mt-10 lg:mb-14 lg:mt-16 ':'mb-9 lg:mb-14 pt-4 lg:pt-8 lg:mb-20' ?>">
            <div class="container px-4 mx-auto my-5">
                <h1 class="text-black-100 text-3xl md:text-4xl lg:text-5xl font-medium mb-4 lg:mb-8">
                    <?php echo the_title(); ?>
                </h1>
                <div class="text-black-100 post-content text-lg md:text-xl lg:text-2xl font-light leading-6 md:leading-8">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    <?php } ?>
</article><!-- #post-<?php the_ID(); ?> -->
