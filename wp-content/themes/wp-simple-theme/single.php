<?php get_header(); ?>
    <!-- Contenido Menu -->
    <div class="container">
        <div class="row">
            <!-- Articulo -->
            <div class="col-12 col-md-9 my-5">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));
                } ?>

                <h2 class="my-3"><?php the_title(); ?></h2>
                <p class="lead"><?php echo get_the_date(); ?></p>
                <div class="text-justify">
                    <p><?php the_content(); ?></p>
                </div>

                <?php endwhile; endif; ?>
            </div>
            <!-- Fin Articulo -->

            <!-- Aside -->
            <div class="col-12 col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!-- Fin Aside -->
        </div>
    </div>
    <!-- Fin Contenido Menu -->

<?php get_footer(); ?>