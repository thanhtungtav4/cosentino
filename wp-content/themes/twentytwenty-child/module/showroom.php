<section class="showroom">
    <div class="heading__primary">
        <h2>SHOWROOM</h2>
    </div>
    <?php
    $args = array(
        'post_type' => 'show-room',
        'post_status' => array( 'publish' )
    );
    $the_query  = new WP_Query( $args );
    ?>
      <?php if ( $the_query ->have_posts() ) : ?>
        <div class="showroom__wrapper">
            <div class="showroom__list">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="showroom__item">
                        <picture>
                            <img loading="lazy" data-src="<?php the_post_thumbnail_url('showroom-thumb'); ?>" src="<?php the_post_thumbnail_url('showroom-thumb'); ?>" alt="<?php echo the_title() ?>" width="434" height="291">
                        </picture>
                        <div class="showroom__body">
                        <h3><?php echo the_title() ?></h3>
                        <p><?php echo the_excerpt() ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
</section>