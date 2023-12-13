<?php
$classes = $block['className'] ?? 'py-5';
?>
<section class="testimonials <?=$classes?>">
    <div class="container-xl">
        <div class="testimonials__slider">
            <?php
            while (have_rows('testimonials')) {
                the_row();
                ?>
                <div class="testimonials__testimonial">
                    <div class="testimonials__body mx-auto">
                        <div class="testimonials__content mb-2"><?=get_sub_field('testimonial')?></div>
                        <div class="testimonials__cite">
                            <div><strong><?=get_sub_field('attribution')?></strong></div>
                            <div><?=get_sub_field('location')?></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
jQuery(function($){
    $('.testimonials__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: true,
        cssEase: 'linear',
        fade: true,
        arrows: false,
        dots: true,
    });
});
</script>
    <?php
}, 9999);