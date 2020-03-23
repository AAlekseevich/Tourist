<?php /* Template Name: news */ ?>
<?php get_header(); ?>
    <main id="content">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="content">
                    <h1 class="title-page">Последние новости</h1>
                    <div class="posts-list">
                        <?php if(have_posts()) :
                            $query = new WP_Query( array( 'category_name' => 'news' ) ); ?>
                            <?php while ($query->have_posts()) : $query->the_post() ?>
                                <div class="post-wrap">
                                    <div class="post-thumbnail"><?php the_post_thumbnail('thumbnail') ?></div>
                                    <div class="post-content">
                                        <div class="post-content__post-info">
                                            <div class="post-date"><?php echo the_time( 'd.m.Y' )?></div>
                                        </div>
                                        <div class="post-content__post-text">
                                            <div class="post-title">
                                                <?php echo the_title(); ?>
                                            </div>
                                            <p>
                                                <?php echo the_excerpt()?>
                                            </p>
                                        </div>
                                        <div class="post-content__post-control"><a href="<?php echo get_post_permalink() ?>" class="btn-read-post">Читать далее >></a></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php else : ?>
                            <p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="pagenavi-post-wrap">
                        <?php
                        echo paginate_links(
                            array(
                                'prev_next' => true,
                                'prev_text' => '<i class="icon icon-angle-double-left"></i>',
                                'next_text' => '<i class="icon icon-angle-double-right"></i>',
                            )
                        );
                        ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>