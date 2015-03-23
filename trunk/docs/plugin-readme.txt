=== Plugin Name: tsw-custom-profile ===
Documentation/Supplement

Here is the page template code for tsw-custom-profile if you want to use the plugin on another theme.
By downloading this plugin it is not intended for any other themes other than the TSW (Tradesouthwest | @tradesouthwest ).

== Instructions ==
* create file with the content below
* where ever you want the plugin, add the code in section two into that page (or header/footer).
* note the selectors for stylesheet attributes and update in you CSS. (change jqi, row, c12, etc. divs to your theme)

== File Name: content-profile.php ==

            <div class="row" id="jqi-p">
                <div class="c12" id="jqi-profile">
                <?php $args = array( 'post_type' => 'custom_profile', 'posts_per_page' => 12 ); $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article class="c4 profile-container">
                        <figure>
                <?php if( has_post_thumbnail() ) {
                      $attachment_page_url = '';
                      $attachment_page_url = get_attachment_link( get_post_thumbnail_id() ); ?>
                    <a href="<?php echo esc_url( $attachment_page_url ); ?>" class="featured-image"><?php the_post_thumbnail(); ?></a>
                    <?php } else { echo '<div class="no-thumb"></div>'; } ?>
                </figure>
                        <div class="profile-content">
                            <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?> 
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>	
                </div>		
            </div><!-- ends profile row -->

== Callback code ==

            <?php if( ! is_single() ) { ?>
            <?php get_template_part( 'content', 'profile' ); ?>
            <?php } ?>



== ** Tradesouthwest 2015 @tradesouthwest ==