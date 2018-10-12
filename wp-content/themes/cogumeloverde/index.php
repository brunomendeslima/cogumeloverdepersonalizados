<?php get_header(); ?>
<div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php
    $args = array('post_type' => 'produto');
    $loop = new WP_Query($args);
    if ($loop->have_posts()):
        ?>
        <div class="row">  
            <?php
            while ($loop->have_posts()):
                ?>
                
                <div class="caneca col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <?php
                            $loop->the_post();
                        ?>
                        <a href="<?= the_permalink(); ?>">
                            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Caneca Personalizada">
                        </a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?= the_title(); ?></a>
                        </h4>
                        <h5>R$ 25,00</h5>
                        <p class="card-text"><?= the_content(); ?></p>
                        </div>
                        <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;
            ?>
        </div>
        <?php
    endif;
    ?>        
</div>    

<?php get_footer(); ?>