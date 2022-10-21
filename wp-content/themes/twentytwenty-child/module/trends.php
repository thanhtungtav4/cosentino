<?php
$trendData = get_field('style_trends', front_page_id());
if($trendData) :
?>
<section>
    <div class="heading__primary">
        <h2>Styles &amp; Trends</h2>
    </div>
    <div class="style__inner">
        <?php  foreach($trendData as $key => $item) :
            $style_category_name = $item['style_category_name'];
            $name_style = $item['name_style'];
            ?>
            <?php if($key == 0 ) : ?>
            <div class="style__feature-left">
                <div class="style__cart__item-c">
                    <a href="<?php echo $item['link_to'] ?>" title="feature">
                        <picture>
                        <?php echo wp_get_attachment_image($item['image'], 'big_trend-thumb'); ?>
                        </picture>
                        <h3 class="style__cart__cate"><?php echo $style_category_name ?></h3>
                        <p class="style__cart__content"><?php echo $name_style ?></p>
                    </a>
                </div>
            </div>
            <div class="style__feature-right">
                <div class="style__cart__list">
            <?php endif; ?>
            <?php if($key >=1) :?>
                    <div class="style__cart__item">
                        <a href="<?php echo $item['link_to'] ?>" title="feature">
                            <picture>
                                <?php echo wp_get_attachment_image($item['image'], 'smail_trend-thumb'); ?>
                            </picture>
                            <h3 class="style__cart__cate"><?php echo $style_category_name ?></h3>
                            <p class="style__cart__content"><?php echo $name_style ?></p>
                        </a>
                    </div>
                <?php if($key == 0 ) : ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>