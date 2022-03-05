<?php get_header(); ?>

<!-- Contenido Menu -->
<div class="container my-4">

    <?php if(have_posts()) : while( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <div class="text-justify">
        <p>
            <?php the_content(); ?>
        </p>
    </div>

    <?php endwhile; endif; ?>

</div>
<!-- Fin Contenido Menu -->

<?php get_footer(); ?>
