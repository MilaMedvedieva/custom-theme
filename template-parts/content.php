<?php
/**
 * Template part for displaying loop posts
 *
 * @package custom-theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>> <?php // контэйнер с классами и id ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
    <div class="meta">
        <p>Опубликовано: <?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></p> <?php // дата и время создания ?>
        <p>Автор:  <?php the_author_posts_link(); ?></p>
        <p>Категории: <?php the_category(',') ?></p> <?php // ссылки на категории в которых опубликован пост, через зпт ?>
        <?php the_tags('<p>Тэги: ', ',', '</p>'); // ссылки на тэги поста ?>
    </div>
    <div>
        <?php if ( has_post_thumbnail() ) { ?>
            <figure class="col-sm-3">
                <picture>
                    <a href="<?php the_permalink(); ?>" class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </picture>
            </figure>
        <?php } ?>
        <div>
            <?php
            $content = get_the_content();
            echo wp_trim_words($content, 20, '...'); ?>
        </div>
    </div>
</article>
