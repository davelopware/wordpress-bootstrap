				<div id="homepage-full" role="complementary">
				
					<?php if ( is_active_sidebar( 'homepage-full' ) ) : ?>

						<?php dynamic_sidebar( 'homepage-full' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>