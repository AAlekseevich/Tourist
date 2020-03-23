<?php get_header(); ?>
    <main id="content">
        <div class="main-content">
            <div class="content-wrapper">
                <?php if (have_posts()) : the_post() ?>
                    <div class="content">
                        <h1 class="title-page"><?php the_title() ?></h1>
                        <?php the_content() ?>
                    </div>
                <?php endif; ?>
                <?php get_sidebar(); ?>
            </div>
        </div>
        </div>
    </main>
<?php get_footer(); ?>