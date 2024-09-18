<?php
/**
 * The header for our theme
 * @package custom-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php wp_head(); global $SVG;?>

    <?php
        if (function_exists('get_field')) {
            $options_header_code = get_field('header_code', 'options');
            $header_logo = get_field('logotip', 'options');
            $header_link = get_field('knopka', 'options');
            $general_phone = get_field('telefon', 'options');
        }
        if (!empty($options_header_code)) {
            echo $options_header_code;
        }
    ?>

</head>

<body <?php body_class('antialiased bg-light-100 font-normal font-inter leading-loose '); ?>>

    <header class="sticky bg-light-100 py-1 xl:py-3.5 w-full top-0 font-normal backdrop-blur-2xl z-50">
        <div class="relative text-sm xl:text-base text-black font-semibold">
            <div class="container">
                <div class="flex items-center">
                        <div class="w-[65px] xl:w-[100px]">
                            <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                                <img src="<?= $header_logo["url"] ?>" alt="<?= $header_logo["alt"] ?>">
                            </a>
                        </div>
                        <div class="w-full flex items-center justify-end">
                            <nav class="hidden lg:block mr-2 xl:mr-20 ml-4">
                                <?php header_nav(); ?>
                            </nav>
                            <div class="hidden sm:flex items-center flex-none">
                                <?php if(!empty($general_phone)):?>
                                    <a class="flex items-center mr-5" href="tel:<?= $general_phone;?>"><span class="mr-1"><?= $SVG['icon-heart'] ?></span><?= $general_phone;?></a>
                                <?php endif;?>
                                <?php if(!empty($header_link)):?>
                                    <a href="<?= $header_link['url'];?>" target="<?= $header_link['target'];?>" class="btn-primary"><span class="mr-1"><?= $SVG['icon-phone'] ?></span> <?= $header_link['title'];?> </a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="lg:hidden ml-auto w-auto">
                            <div class="hamburger hamburger--squeeze">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <nav class="absolute menu-mobile hidden flex-col w-full text-gray-900">
            <div class="bg-light-100 top-0 p-6 overflow-x-auto h-[70vh]">
                <div><?php header_nav(); ?></div>
                <div class="flex flex-wrap border-t-2 pt-5 justify-center items-center flex-none">
                    <?php if(!empty($general_phone)):?>
                        <a class="flex items-center mr-5" href="tel:<?= $general_phone;?>"><span class="mr-1"><?= $SVG['icon-heart'] ?></span><?= $general_phone;?></a>
                    <?php endif;?>
                    <?php if(!empty($header_link)):?>
                        <a href="<?= $header_link['url'];?>" target="<?= $header_link['target'];?>" class="btn-primary"><span class="mr-1"><?= $SVG['icon-phone'] ?></span> <?= $header_link['title'];?> </a>
                    <?php endif;?>
                </div>
            </div>
        </nav>
    </header>
