<?php get_header(); ?>
    <div id="content" class="two-thirds">
        <?php while (have_posts()) : the_post(); ?>
            <article class="<?php post_class(); ?>" id="<?php the_ID(); ?>">

                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'compass'), the_title_attribute('echo=0')); ?>" rel="bookmark">Tytul strony lub postu</a></h2>

                <img src="images/featured-image.jpg" class="size-large">

                <section class="entry-meta">
                    <p>Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
                </section>

                <section class="entry-content">
                    <?php the_content(); ?>
                </section>

                <section class="entry-meta">
                    <?php if(count(get_the_category())) : ?>
                        <span class="cat-links">
					Categories: <?php echo get_the_category_list(','); ?>
				</span>
                    <?php endif; ?>
                </section>

            </article>
        <?php endwhile; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>