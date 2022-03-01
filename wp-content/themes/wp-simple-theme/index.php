<?php get_header();  ?>

<!-- Contenido -->
<div class="container">

    <div class="row mt-4 mb-4">

        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="images/articulo.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </a>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muter"><?php echo get_the_date(); ?> * <?php the_category(', '); ?> * <?php the_author(); ?></small>
                        </div>
                    </div>
                </div>

        <?php endwhile;
        endif; ?>


    </div>
</div>
<!-- Fin Contenido -->

<?php get_footer(); ?>