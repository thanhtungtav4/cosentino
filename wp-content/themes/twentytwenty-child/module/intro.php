<?php
    $youtube = get_field( "ifarm_youtube" );
?>
<section class="i-intros">
    <div class="heading__primary">
        <h2>GIỚI THIỆU</h2>
    </div>
    <div class="intro">
        <div class="intro__video intro__box">
        <?php if(!empty($youtube)) :  ?>
            <?php echo $youtube ?>
        <?php endif; ?>
            </div>
        <div class="intro__content intro__box">
        <div class="intro__content__item">
            <h4><?php the_field('block_intro_ttl') ?></h4>
            <p><?php the_field('block_intro_content') ?></p>
            <?php if(!empty(get_field('link_more'))) :  ?>
                <a href="<?php the_field('link_more') ?>">xem thêm</a>
            <?php endif; ?>
        </div>
        <div class="intro__content__btn">
            <?php if(!empty(get_field('button_first') && !empty(get_field('link_button_fitst')))) :  ?>
                <a class="intro__content__intro-skill" href="<?php the_field('link_button_fitst') ?>" title="<?php the_field('button_first') ?>">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0122 5.57169L10.9252 4.48469C8.77734 2.33681 5.29493 2.33681 3.14705 4.48469C0.999162 6.63258 0.999162 10.115 3.14705 12.2629L11.9859 21.1017L11.9877 21.0999L12.014 21.1262L20.8528 12.2874C23.0007 10.1395 23.0007 6.65711 20.8528 4.50923C18.705 2.36134 15.2226 2.36134 13.0747 4.50923L12.0122 5.57169ZM11.9877 18.2715L16.9239 13.3352L18.3747 11.9342L18.3762 11.9356L19.4386 10.8732C20.8055 9.50635 20.8055 7.29028 19.4386 5.92344C18.0718 4.55661 15.8557 4.55661 14.4889 5.92344L12.0133 8.39904L12.006 8.3918L12.005 8.39287L9.51101 5.89891C8.14417 4.53207 5.92809 4.53207 4.56126 5.89891C3.19442 7.26574 3.19442 9.48182 4.56126 10.8487L7.10068 13.3881L7.10248 13.3863L11.9877 18.2715Z" fill="currentColor" />
                    </svg>
                    <span><?php the_field('button_first') ?></span>
                </a>
            <?php endif; ?>
            <?php if(!empty(get_field('button_second') && !empty(get_field('link_button_second')))) :  ?>
                <a class="intro__content__intro-cosentino" href="<?php the_field('link_button_second') ?>" title="<?php the_field('button_second') ?>">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" fill="currentColor" />
                    </svg>
                    <span><?php the_field('button_second') ?></span>
                </a>
            <?php endif; ?>
        </div>
        </div>
    </div>
</section>