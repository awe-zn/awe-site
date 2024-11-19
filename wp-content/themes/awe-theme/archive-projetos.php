<?php get_header(); ?>

<main>
    <div class="container-breadcrumb mb-5 py-3">
        <div class="container">
            <small>você está aqui</small>
            <div class="breadcrumb d-flex gap-2">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>

    <section class="container-projects">
        <div class="container">
            <div class="title-container-projects mb-5">
                <p class="text-uppercase fs-6">nosos projetos</p>
                <h2 class="fs-1 color-semantic-primary-blue-main">Alguns dos nossos projetos</h2>
            </div>
            <div class="container-cards-projects d-flex flex-column gap-4 mb-5 mb-sm-0">
                <div class="row row-gap-4">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="project col col-sm-4 col-lg-3 d-flex flex-column gap-3">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <!-- Imagem placeholder caso não haja thumbnail definida -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/rectangle.png" alt="Imagem padrão">
                                <?php endif; ?>

                                <div class="content-text-project">
                                    <p class="title-project fw-bold mb-2"><?php the_title(); ?></p>
                                    <p class="description-project fs-6"><?php echo get_the_excerpt(); ?></p>
                                </div>

                                <a href="<?php the_permalink(); ?>">Acesse o projeto</a>
                            </div>
                        <?php endwhile;
                    else : ?>
                        <p>Nenhum projeto encontrado.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>