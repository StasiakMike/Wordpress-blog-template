				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() . '/images/logo4.png' ?>" alt="" /></a>
								<header>
									<h2><?php bloginfo( 'name' ); ?></h2>
									<p><?php bloginfo( 'description' ); ?></p>
								</header>
							</section>

                        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar' ); ?>
                        <?php endif; ?>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy;  <a href="http://mvdbsoftware.eu">Mike Stasiak & Mvdb Software Solutions</a></p>
								<p class="copyright">&copy;  <a href="https://freepik.com/">Some pics used from freepik.com </a></p>
							</section>

					</section>