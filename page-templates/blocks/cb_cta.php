<?php
$logo = 'tr-energy-logo--wo.svg';
$theme = '';
?>
<section class="cta">
    <div class="container-xl text-center" data-aos="fade">
        <img src="<?=get_stylesheet_directory_uri()?>/img/<?=$logo?>"
            alt="">
        <h3><?=get_field('title')?></h3>
        <a href="/contact-us/" class="h5 <?=$theme?>">Book a Free
            Site Survey</a>
        <div class="cta__grid">
            <div class="line"></div>
            <div class="h5">Call Now: <a
                    href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
            </div>
            <div class="line"></div>
        </div>
    </div>
</section>