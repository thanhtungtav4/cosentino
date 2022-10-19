<?php if( have_rows('product_rock') ): ?>
    <section class="m-category">
            <h2 class="m-ttl">DÒNG ĐÁ MỚI</h2>
            <ol>
            <?php while( have_rows('product_rock') ): the_row();
                $name = get_sub_field('name');
                $image = get_sub_field('image');
                $link_to = get_sub_field('link_to');
            ?>
                <li>
                    <a href="<?php echo $link_to ?>">
                        <picture>
                            <img loading="lazy" src="<?php echo $image ?>" data-src="<?php echo $image ?>" alt="<?php echo $name ?>" width="255" height="355">
                        </picture>
                        <h3><?php echo $name ?></h3>
                    </a>
                </li>
            <?php endwhile; ?>    
            </ol>
    </section>
<?php endif; ?>    