<?php get_header() ?>
<?php
    if(have_posts()):
        while(have_posts()):
            the_post();    
?>
<h1><?= the_title(); ?></h1>
<p><?= the_content(); ?></p>
<?php
        endwhile;
    endif;
?>

<?php if(is_page('entre-em-contato')): ?>       
<form>
    <p>Aqui vai um formulário</p>
</form>
<?php endif; ?>

<?php get_footer() ?>


