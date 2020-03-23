<?php get_header(); the_post();?>
<main id="content">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
            <div class="article-title title-page"><?php the_title() ?></div>
            <div class="article-image"><?php the_post_thumbnail('full') ?></div>
            <div class="article-info">
                <div class="post-date"><?php the_time('d.m.Y') ?></div>
            </div>
            <div class="article-text">
                <?php the_content() ?>
            </div>
                <div class="article-pagination">
                    <?php if ($prevPost = get_previous_post($in_same_term = true)): ?>
                    <div class="article-pagination__block pagination-prev-left"><a href="<?php echo get_permalink($prevPost->ID) ?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail_url($prevPost, 'thumbnail') ?>" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date"><?php echo get_the_time('d.m.Y', $prevPost) ?></a></div>
                                <div class="preview-article__text"><?php echo get_the_title($prevPost) ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($nextPost = get_next_post($in_same_term = true)): ?>
                    <div class="article-pagination__block pagination-prev-right"><a href="<?php echo get_permalink($nextPost->ID) ?>" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                            <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail_url($nextPost, 'thumbnail') ?>" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                                <div class="preview-article__text"><?php echo get_the_title($nextPost) ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                </div>
                <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</main>
<?php get_footer(); ?>