<?php
$rockData = get_field('type_rock', front_page_id());
if($rockData) :
?>
<section>
    <div class="heading__primary">
        <h2>Latest releases</h2>
    </div>
    <div class="tabs-latest">
        <?php  foreach($rockData as $key => $item) :?>
            <li class="tab-latest <?php $key == 0 ? print 'current' : '' ?>" data-tab="tabx-<?php echo $key ?>"><?php echo $item['type_name_rock'] ?></li>
        <?php endforeach; ?>
    </div>
    <div class="tabs-latest__inner">
    <?php  foreach($rockData as $key => $item) :?>
        <div class="tab-latest-content <?php $key == 0 ? print 'current' : '' ?>" id="tabx-<?php echo $key ?>">
            <div class="releases__box">
                <div class="releases__box__left">
                    <?php if(!empty($item['image_big_left'])) : ?>
                        <a href="<?php echo $item['link_image_big_left']?>">
                            <picture>
                                <img src="<?php echo $item['image_big_left']?>" data-src="<?php echo $item['image_big_left']?>" alt="carousel" width="100%" height="100%">
                            </picture>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="releases__box__right">
                    <?php if(!empty($item['image_big_right'])) : ?>
                        <a href="<?php echo $item['link_image_big_right']?>">
                            <picture>
                                <img src="<?php echo $item['image_big_right']?>" data-src="<?php echo $item['image_big_right']?>" alt="carousel" width="100%" height="100%">
                            </picture>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
