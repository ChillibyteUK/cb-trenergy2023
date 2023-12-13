<?php
$classes = $block['className'] ?? 'py-5';
?>
<div class="container-xl <?=$classes?>">
    <section class="buttons_block">
<?php
while (have_rows('buttons')) {
    the_row();
    $b = get_sub_field('button');
    ?>
<a href="<?=$b['url']?>" target="<?=$b['target']?>" class="btn btn-primary"><?=$b['title']?></a>
    <?php
}
    ?>
    </section>
</div>