<?php get_header(); ?>

    <main class="container-single mb-5">
        <div class="container-breadcrumb mb-5 py-3">
            <div class="container">
                <small>você está aqui</small>
                <div class="breadcrumb d-flex gap-3">
                    <?php custom_breadcrumbs();?>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article class="post row flex-column gap-5 align-items-center">
                        <section class="title col-lg-10 col">
                            <h1 class="post-title"><?php the_title(); ?></h1>
                            <small class="post-date">Publicado em <?php the_time('d.m.Y'); ?></small>
                        </section>
                        <div class="post-content d-flex flex-column gap-5 col-lg-9 col medium-text">
                            <?php the_content(); ?>
                        </div>
                    </article>
            <?php
                endwhile;
            else :
                echo '<h3>Desculpe, o post não foi encontrado.</h3>';
            endif;
            ?>
        </div>
    </main>

<?php get_footer(); ?>