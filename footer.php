<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl pb-4">
        <div class="row">
            <div class="col-md-3">
                <div class="mt-2 mb-4 text-center text-md-start">
                    <img src="<?=get_stylesheet_directory_uri()?>/img/tr-energy-logo--wo.svg"
                        class="footer__logo" alt="" width=300 height=60>
                    <div class="social-links">
                        <?=do_shortcode('[social_fb_icon]')?>
                        <?=do_shortcode('[social_ig_icon]')?>
                        <?=do_shortcode('[social_tw_icon]')?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="footer__heading">Contact Us</div>
                <ul class="fa-ul mb-4">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span> <a
                            href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span> <a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span> <a
                            href="<?=get_field('gmb_link','options')?>" target="_blank"><?=get_field('contact_address', 'options')?></a>
                    </li>
                </ul>
            </div>
            <!-- div class="col-md-3">
                <div class="footer__heading">Locations</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
            </div -->
            <div class="col-md-4">
                <div class="footer__heading">Navigation</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container py-2">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-md-8 text-center text-md-start">
                &copy; <?=date('Y')?> TR Energy Ltd. Registered in England, no. 123456789
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-end flex-wrap gap-3">
                <span><a href="/privacy-policy/">Privacy</a> & <a href="/cookie-policy/">Cookies</a></span> |
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<a href="/contact/" class="btn btn-landing">Book a Free Site Survey</a>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
<script>
const button = document.querySelector('.btn-landing');
const footerTop = document.querySelector('#footer-top');

const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0
};

const callback = (entries, observer) => {
  const entry = entries[0]; // We're only observing one target

  if (entry.isIntersecting || entry.intersectionRatio > 0) {
    // When the 'footer-top' element is in view
    button.style.opacity = 0;
  } else {
    // When the 'footer-top' element is not in view
    button.style.opacity = 1;
  }
};

const observer = new IntersectionObserver(callback, options);

observer.observe(footerTop);
</script>
</body>

</html>