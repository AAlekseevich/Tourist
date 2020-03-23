<div class="sidebar">
    <?php if( $tags = get_terms(array('taxonomy' => 'post_tag'))) : ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <ul class="tags-list">
                <?php foreach ($tags as $tag) : ?>
                <li class="tags-list__item"><a href="<?php echo get_term_link($tag->term_id) ?>" class="tags-list__item__link"><?php echo $tag->name ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($category = get_terms(array(
        'taxonomy' => 'category',
        'exclude' => '1, 21, 22',
        'hierarchical' => '1',
        'orderby' => 'id',
        'parent' => '0',
    ))) : ?>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php foreach ($category as $cat) : ?>
                <li class="category-list__item"><a href="<?php echo get_term_link($cat->term_id) ?>" class="category-list__item__link"><?php echo $cat->name ?></a>
                    <?php if($childCategory = get_terms(array(
                        'taxonomy' => 'category',
                        'exclude' => '1, 21, 22',
                        'child_of' => $cat->term_id,
                        'hide_empty' => '0',
                    ))) : ?>
                    <?php foreach ($childCategory as $chicdCat) : ?>
                        <ul class="category-list__inner">
                            <li class="category-list__item"><a href="<?php echo get_term_link($chicdCat->term_id)?>" class="category-list__item__link"><?php echo $chicdCat->name ?></a></li>
                        </ul>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Календарь</div>
        <div class="sidebar-item__content">
            <?php echo get_calendar(); ?>
        </div>
    </div>
</div>