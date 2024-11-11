<?php get_header(); ?>

    <main class="container py-5">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article class="post">
                    <h1 class="post-title "><?php the_title(); ?></h1>
                    <small class="post-date">Publicado em <?php the_time('d.m.Y'); ?></small>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            echo '<h3>Desculpe, o post não foi encontrado.</h3>';
        endif;
        ?>
    </main>

<?php get_footer(); ?>