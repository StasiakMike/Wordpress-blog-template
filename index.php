<?php get_header(); ?>
				    
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
                                    <footer>

                                        <ul class="stats">
                                        <?php                                                 
                                            $categories = get_the_category();
                                            $separator = ' ';
                                            $output = '';
                                            if ( ! empty( $categories ) ) {
                                                foreach( $categories as $category ) {
                                                    $output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>' . $separator;
                                                }
                                                echo trim( $output, $separator );
                                            }
                                        ?>
                                                
                                        </ul>
                                    </footer>
                                </article>
                                
                            <?php endwhile; ?>

                        <?php endif; ?>

						<!-- Pagination -->
							<ul class="actions pagination">
                                <?php if( get_previous_posts_link() ) : ?>
                                    <li><?php previous_posts_link(); ?></li>
                                <?php endif; ?>

                                <?php if( get_next_posts_link() ) : ?>
                                    <li><?php next_posts_link(); ?></li>
                                <?php endif; ?>
							</ul>

					</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

