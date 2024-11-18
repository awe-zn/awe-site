<?php get_header(); ?>
<main class="mb-5 pb-5">
    <div class="container-breadcrumb mb-5 py-3">
        <div class="container">
            <small>você está aqui</small>
            <div class="breadcrumb d-flex gap-2">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>

    <article class="container-noticias">
        <div class="container">
            <div class="title-container-noticias mb-5">
                <p class="text-uppercase fs-6">noso blog</p>
                <h2 class="fs-1 color-semantic-primary-blue-main">Notícias</h2>
            </div>
            <div class="filter mb-5">
                <p class="text-uppercase mb-3">filtrar por categorias</p>
                <nav>
                    <ul class="filter-equipe-awe nav nav-pills column-gap-2 mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="link-filter-awe nav-link lato max-content fs-medium fw-medium spaced active text-uppercase" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">últimas notícias</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="link-filter-awe nav-link lato max-content fs-medium fw-medium spaced text-uppercase" id="pills-ui-design-tab" data-bs-toggle="pill" data-bs-target="#pills-ui-design" type="button" role="tab" aria-controls="pills-ui-design" aria-selected="false">mais notícias</button>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="container-cards-noticias-top d-flex flex-column gap-4 mb-5 mb-sm-0">
                <div class="row row-gap-4">
                    <?php
                    $query = new WP_Query(array(
                        'posts_per_page' => 3
                    ));

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post(); ?>

                            <div class="noticia col col-sm-4 col-lg-4 d-flex flex-column gap-2">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <!-- Imagem placeholder caso não haja thumbnail definida -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/rectangle.png" alt="Imagem padrão">
                                <?php endif; ?>
                                    <p class="date-noticia">Publicado em <?php echo get_the_date('d/m/Y'); ?></p>
                                    <h4 class="title-noticia fw-bold mb-2"><?php the_title(); ?></h4>
                                    <p class="description-noticia fs-6 excerpt-limited"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">Acesse o projeto</a>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); // Restaura os dados originais da consulta
                    else : ?>
                        <p>Nenhum projeto encontrado.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container-cards-noticias-bottom d-flex flex-column gap-4 mb-5 mb-sm-0">
                <h3 class="color-semantic-primary-blue-main text-uppercase">outras notícias</h3>
                <div class="row row-gap-4">
                    <?php
                    // Consulta para pegar os posts a partir do quarto
                    $query = new WP_Query(array(
                        'posts_per_page' => 3, // Número de posts que você quer exibir após o terceiro
                        'offset' => 3 // Define o número de posts a serem ignorados (as três primeiras notícias)
                    ));

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post(); ?>

                            <div class="noticia col col-sm-6 col-lg-3 d-flex flex-column gap-3">
                                    <p class="date-noticia">Publicado em <?php echo get_the_date('d/m/Y'); ?></p>
                                    <h4 class="title-noticia fw-bold mb-2"><?php the_title(); ?></h4>
                                    <p class="description-noticia fs-6 excerpt-limited"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">Acesse o projeto</a>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); // Restaura os dados originais da consulta
                    else : ?>
                        <p>Nenhuma notícia encontrada</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>