<?php if( have_rows('block_banner') ): ?>
    <div class="c-carousel">
        <div class="c-carousel_inner">
        <?php while( have_rows('block_banner') ): the_row();
            $image = get_sub_field('slider_image');
            $image_webp = get_sub_field('slider_image_webp');
            $image_avif = get_sub_field('slider_image_avif');
            $alt = get_sub_field('tag_alt_image') ? get_sub_field('tag_alt_image') : "";
        ?>
            <div class="c-carousel_item">
                <picture>
                    <?php if(!empty($image_avif)) : ?>
                        <source srcset="<?php echo $image_avif ?>" type="image/avif">
                    <?php endif; ?>
                    <?php if(!empty($image_webp)) : ?>
                        <source srcset="<?php echo $image_webp ?>" type="image/webp">
                    <?php endif; ?>
                    <?php if(!empty($image)) : ?>
                        <img srcset="<?php echo $image ?>" alt="<?php echo $alt ?>" width="100%" height="100%">
                    <?php endif; ?>
                </picture>
                <?php if(!empty(get_sub_field('button_text'))) : ?>
                    <a class="m-btn" href="<?php echo get_sub_field('button_link_to'); ?>" taget="_blank"><?php echo get_sub_field('button_text'); ?></a>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>