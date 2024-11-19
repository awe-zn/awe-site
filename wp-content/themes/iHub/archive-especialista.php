<?php
$theme = get_template_directory_uri();


?>

<?php get_header(); ?>




<main class="container news projects my-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php _e('Especialistas', 'ihub'); ?></li>
        </ol>
    </nav>

    <section class="list-news">
        
        <header class="row">
            <h1><?php _e('Conheça os nossos especialistas', 'ihub'); ?></h1>
            <small class="col-lg-8 fw-medium text-secondary-emphasis"><?php _e('Nosso time é composto por investigadores e especialistas qualificados em diversas áreas, centrados no avanço e implementação de tecnologias para cidades inteligentes, construindo para um futuro mais sustentável, inovador e conectado.', 'ihub'); ?></small>
        </header>




<?php 

/** Verificando inicialmente se existem especialistas cadastrados. Em caso negativo a seção não será renderizada. */

// Query para buscar os especialistas
$args = array(
    'post_type' => 'especialista', // Nome do Custom Post Type
    'posts_per_page' => -1, // Quantos especialistas exibir (-1 para todos)
    'orderby' => 'title', // Ordenar por título (nome do especialista)
    'order' => 'ASC', // Ordem crescente
);

$especialistas_query = new WP_Query($args);

// Loop para exibir os especialistas
if ($especialistas_query->have_posts()) :

?>



        <section class="artigos-relacionados my-5 border-top pt-4">
            <section class="artigos-container">
                <ul class="artigos-list list-unstyled mt-3 row">
                <?php

                    while ($especialistas_query->have_posts()) : $especialistas_query->the_post();
                        // Recuperar os campos personalizados
                        $especialista_area = get_post_meta(get_the_ID(), '_especialista_area', true);
                        $especialista_nome = get_post_meta(get_the_ID(), '_especialista_nome', true);
                        $especialista_foto = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>


                    <li class="artigo-item col-lg-3 col-md-4 col-sm-6 col-12 pt-2">
    
                        <?php if ($especialista_foto) : ?>
                            <figure>
                                <img src="<?= esc_url($especialista_foto); ?>" alt="<?= esc_attr($especialista_nome); ?>" class="img-fluid">
                            </figure>
                        <?php endif; ?>                           

                        <h5 class="especialista-nome fw-bold"><?= esc_html($especialista_nome); ?></h5>
                        <p class="especialista-area fw-normal"><?= esc_html($especialista_area); ?></p>
                        
                    </li>
                    <?php endwhile;
                    wp_reset_postdata();


                ?>

                </ul>
            </section>
            <!-- Paginação -->
            <nav class="border-top pt-5">
                <ul class="pagination">
                    <?php
                    global $wp_query;
                    $big = 999999999; // Um número grande para substituir no link

                    $pages = paginate_links(array(
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $wp_query->max_num_pages,
                        'mid_size'  => 2,
                        'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
                        'next_text' => '<i class="fa-solid fa-arrow-right"></i>',
                        'type'      => 'array',
                    ));

                    if (is_array($pages)) {
                        foreach ($pages as $page) {
                            // Adiciona a classe "active" à página atual
                            $active_class = strpos($page, 'current') !== false ? ' active' : '';
                            echo '<li class="page-item' . $active_class . '">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
                        }
                    }
                    ?>
                </ul>
            </nav>


        </section>

<?php 
        // finalizada a verificação

        endif;

?>


        
    </section>
</main>



<?php
    get_footer(); // Inclui o rodapé do tema
?>