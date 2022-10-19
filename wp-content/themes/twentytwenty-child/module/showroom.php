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
                        <source srcset="https://sieuthida.vn/wp-content/uploads/2020/05/kho-phan-tr%E1%BB%8Dng-tu%E1%BB%87.jpg" type="image/avif">
                        <source srcset="https://sieuthida.vn/wp-content/uploads/2020/05/kho-phan-tr%E1%BB%8Dng-tu%E1%BB%87.jpg" type="image/webp">
                        <img src="https://sieuthida.vn/wp-content/uploads/2020/05/kho-phan-tr%E1%BB%8Dng-tu%E1%BB%87.jpg" data-src="https://sieuthida.vn/wp-content/uploads/2020/05/kho-phan-tr%E1%BB%8Dng-tu%E1%BB%87.jpg" alt="carousel" width="100%" height="100%">
                        </picture>
                        <div class="showroom__body">
                        <h3>KHO PHAN TRỌNG TUỆ</h3>
                        <p>Đ/c: Km số 2 Phan Trọng Tuệ, Thanh Trì, Hà Nội. Diện tích > 6.000m2. Hơn nghìn mẫu đá Granite, Marble, Thạch Anh, Nhân tạo hot nhất hiện nay, liên tục cập nhật các mẫu mới</p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
</section>