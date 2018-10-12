<?php get_header(); ?>
<p>Entrou na descricao.</p>
<?php
   if (have_posts()):
       while(have_posts()):
           the_post();
           the_date();
           the_title();
           the_content();
       endwhile;
   endif;
?>
<?php get_footer(); ?>


