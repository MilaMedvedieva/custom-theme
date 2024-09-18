<?php
/**
 * The template for displaying the footer
 *
 * @package custom-theme
 */
    global $SVG;


    if (function_exists('get_field')) {
        $options_footer_code = get_field('footer_code', 'options');
        $footer_logo = get_field('logotip_footer', 'options');
        $links_in_footer = get_field('link_in_footer', 'options');
        $social_media = get_field('social_media', 'options');
    }


?>
    <footer class="py-5 xl:py-10 bg-black-800 text-center font-base text-light-100 font-semibold">
        <div class="container">
            <div class="pb-3.5 xl:pb-7">

                <div class="w-[4.5rem] mx-auto">
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?= $footer_logo["url"] ?>" alt="<?= $footer_logo["alt"] ?>">
                    </a>
                </div>
            </div>
            <div class="pt-3.5 xl:pt-7 pb-3.5 xl:pb-7">
                <?php footer_nav(); ?>
            </div>
            <div class="pt-3.5 xl:pt-7 pb-6 xl:pb-12">
                <?php if(!empty($social_media)):?>
                    <ul class="flex justify-center">
                        <?php foreach( $social_media as $key => $link ): ?>
                            <li class="px-3">
                                <a class="bg-black-100 hover:bg-red-100 flex items-center w-8 h-8 p-2 rounded-full transition duration-300" href="<?= $link["link"]["url"]; ?>" target="<?=$link["link"]["target"]; ?>">
                                    <?php
                                        if( $link["name"] === 'telegram'){
                                            echo $SVG['icon-telegram'];
                                        }elseif ($link["name"] == 'vk') {
                                            echo $SVG['icon-vk'];
                                        }elseif ($link["name"] == 'youtube') {
                                            echo $SVG['icon-youtube'];
                                        }elseif ($link["name"] == 'odnoklasniki') {
                                            echo $SVG['icon-odnoklasniki'];
                                        }elseif ($link["name"] == 'watsapp') {
                                            echo $SVG['icon-viber'];
                                        }
                                    ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif;?>
            </div>
            <div class="block sm:flex justify-between">
                <span class="text-light-150 text-sm font-normal">ИП Овчаренко Андрей Сергеевич</span>
                <div class="text-light-150 text-xs">
                    <?php if(!empty($links_in_footer)):?>
                        <ul class="*:inline-block *:px-2 *:border-r *:border-light-200 [&>*:last-child]:border-r-0">
                        <?php foreach( $links_in_footer as $key => $link ): ?>
                            <li><a href="<?= $link["link"]["url"]; ?>" target="<?=$link["link"]["target"]; ?>"><?= $link["link"]["title"]; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<?php
    if (!empty($options_footer_code)) {
        echo $options_footer_code;
    }
?>

    </body>
</html>
