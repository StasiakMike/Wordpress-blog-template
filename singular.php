<?php

get_header(); ?>

<!-- Main -->
<div id="main">

    <?php if ( have_posts() ) : ?>

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="meta">
                        <time class="published"><?php the_date(); ?></time>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                    <a href="<?php echo the_permalink(); ?>" class="image featured">
                    <?php the_post_thumbnail(); ?>
                    </a>
                <?php } ?>

                <?php the_content(); ?>
            </article>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>