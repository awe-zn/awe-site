<?php
$theme = get_template_directory_uri();
?>

<?php get_header(); ?>


    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="hero-content col-lg-7 col-md-12">
                    <div class="text-uppercase text-hat"><?php _e('Soluções Inteligentes', 'ihub'); ?></div>
                    <h1 class="display-hero"><?php _e('Transformando Cidades Inteligentes com FIWARE', 'ihub'); ?></h1>
                    <p><?php _e('Criando soluções inovadoras para um futuro sustentável e conectado.', 'ihub'); ?></p>
                    <a href="#" class="hero-btn"><?php _e('Faça parte desse movimento', 'ihub'); ?></a>
                </div>
            </div>
            <div class="hero-image">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </section>



    <section class="py-5 mt-5 section-servicos">
        <div class="container py-3">
            <h2 class="mb-5 section-title"><?php _e('Principais serviços do Smart Metrópolis iHub', 'ihub'); ?></h2>
            <div class="row g-4 card-service-section justify-content-center">
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="service-card">
                        <figure><img src="<?= $theme ?>/assets/img/icons/partnership.svg" alt="Consultoria Especializada em FIWARE"></figure>
                        <h5><?php _e('Consultoria Especializada em FIWARE', 'ihub'); ?></h5>
                        <p><?php _e('Consultoria para ajudar empresas e governos a implementar soluções FIWARE em projetos de cidades inteligentes.', 'ihub'); ?></p>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="service-card">
                        <figure><img src="<?= $theme ?>/assets/img/icons/training.svg" alt="Treinamentos e Certificações em FIWARE"></figure>
                        <h5><?php _e('Treinamentos e Certificações em FIWARE', 'ihub'); ?></h5>
                        <p><?php _e('Cursos de formação que abrangem desde conceitos básicos à técnicas avançadas, preparados por nossos experientes instrutores.', 'ihub'); ?></p>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="service-card">
                        <figure><img src="<?= $theme ?>/assets/img/icons/lab.svg" alt="Infraestrutura de Demonstração e Testes"></figure>
                        <h5><?php _e('Infraestrutura de Demonstração e Testes', 'ihub'); ?></h5>
                        <p><?php _e('Laboratórios de pesquisa e espaços de coworking são equipados com recursos de ponta, incluindo datacenter e supercomputador.', 'ihub'); ?></p>
                    </div>
                </div>
                <div class="col-10 col-md-6 col-lg-3">
                    <div class="service-card">
                        <figure><img src="<?= $theme ?>/assets/img/icons/business-mentor.svg" alt="Desenvolvimento de Soluções Inteligentes"></figure>
                        <h5><?php _e('Desenvolvimento de Soluções Inteligentes', 'ihub'); ?></h5>
                        <p><?php _e('Nossos projetos incluem desde prototipagem até a implementação de tecnologias avançadas como blockchain e IoT.', 'ihub'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="py-5 mb-5 section-sobre">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 section-content">
                    <div class="section-title text-uppercase"><?php _e('QUEM SOMOS', 'ihub'); ?></div>
                    <h2 class="mb-5"><?php _e('O Smart Metrópolis FIWARE iHub é focado em impulsionar cidades inteligentes com soluções inovadoras e sustentáveis com a expertise do Smart Metrópolis', 'ihub'); ?></h2>
                    <div class="logos">
                        <img src="<?= $theme ?>/assets/img/logo-fiware.svg" alt="FIWARE Logo">
                        <img src="<?= $theme ?>/assets/img/ihub.svg" alt="FIWARE iHubs Logo">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 pt-5 offset-lg-1">
                    <p><?php _e('Os FIWARE iHubs são centros de inovação focados em soluções digitais para a economia digital, promovendo cooperação e inovação regional. O Smart Metrópolis iHub, em parceria com FIWARE, transforma cidades inteligentes com soluções inovadoras e sustentáveis. Oferecemos consultoria, treinamento, infraestrutura de testes e desenvolvimento de soluções.', 'ihub'); ?></p>
                    <p class="highlight-text"><?php _e('Entre em contato para descobrir como nossas soluções podem transformar sua cidade!', 'ihub'); ?></p>
                </div>
            </div>
        </div>
    </section>






<?php 

    // Query para buscar os parceiros
    $args = array(
        'post_type' => 'parceiro',
        'posts_per_page' => -1, // Exibe todos os parceiros
        'orderby' => 'title', // Ordena os parceiros pelo título (nome)
        'order' => 'ASC', // Ordem crescente
    );

    $parceiros_query = new WP_Query($args);


    if ($parceiros_query->have_posts()) :

?>

    <section class="partners-section mt-5">
    <div class="container-fluid pb-5">
        <h2 class="mb-4"><?php _e('SEJA UM DOS NOSSOS PARCEIROS', 'ihub'); ?></h2>
        <div class="row justify-content-center">
            <?php
            
                while ($parceiros_query->have_posts()) : $parceiros_query->the_post();
                    $parceiro_nome = get_the_title(); // Nome do parceiro
                    $parceiro_logo = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // URL da logo
                    $parceiro_link = get_post_meta(get_the_ID(), '_parceiro_link', true); // Campo personalizado para o link do parceiro
                
            ?>
                    <div class="col-auto">
                        <?php if ($parceiro_logo) : ?>
                            <?php if ($parceiro_link) : ?>
                                <a href="<?= esc_url($parceiro_link); ?>" target="_blank">
                                    <img src="<?= esc_url($parceiro_logo); ?>" alt="<?= esc_attr($parceiro_nome); ?>" class="img-fluid">
                                </a>
                            <?php else : ?>
                                <img src="<?= esc_url($parceiro_logo); ?>" alt="<?= esc_attr($parceiro_nome); ?>" class="img-fluid">
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


<?php endif; ?>




    <section class="projects-section">
        <div class="container">
            <div class="row">
                <div class="text-hat blue"><?php _e('PROJETOS', 'ihub'); ?></div>
                <h2 class="section-title"><?php _e('Confira nossos projetos realizados recentemente.', 'ihub'); ?></h2>
            </div>

            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                <?php
                $categories = array('consultoria', 'consultancy', 'treinamentos', 'trainings', 'infraestrutura', 'infrastructure', 'desenvolvimento', 'development');
                $active_class = 'active';
                $tab_content = '';

                foreach ($categories as $category_slug) {
                    $category = get_category_by_slug($category_slug);

                    // Consulta para buscar os projetos dessa categoria
                    $args = array(
                        'post_type' => 'projeto',
                        'posts_per_page' => 4,
                        'category_name' => $category_slug,
                    );
                    $projects_query = new WP_Query($args);

                    if ($projects_query->have_posts()) :
                        // Exibir a aba da categoria
                        echo '<li class="nav-item" role="presentation">';
                        echo '<button class="nav-link ' . $active_class . '" id="' . $category_slug . '-tab" data-bs-toggle="pill" data-bs-target="#' . $category_slug . '" type="button" role="tab" aria-controls="' . $category_slug . '" aria-selected="true">' . $category->name . '</button>';
                        echo '</li>';

                        // Construir o conteúdo das tabs
                        $tab_content .= '<div class="tab-pane fade show ' . $active_class . '" id="' . $category_slug . '" role="tabpanel" aria-labelledby="' . $category_slug . '-tab">';
                        $tab_content .= '<div class="row">';
                        
                        while ($projects_query->have_posts()) : $projects_query->the_post();
                            $tab_content .= '<div class="col-10 col-lg-3 col-md-6">';
                            $tab_content .= '<a href="' . get_permalink() . '" class="project-card">';
                            if (has_post_thumbnail()) {
                                $tab_content .= '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" alt="' . get_the_title() . '">';
                            } else {
                               // $tab_content .= '<img src="' . get_template_directory_uri() . '/assets/img/projetos/img.png" alt="Imagem padrão">';
                            }
                            $tab_content .= '<h5>' . get_the_title() . '</h5>';
                            $tab_content .= '<p style="font-size: .9rem">' . wp_trim_words(get_the_excerpt(), 35, '...') . '</p>';
                            $tab_content .= '</a>';
                            $tab_content .= '</div>';
                        endwhile;

                        $tab_content .= '</div>'; // Fechar .row
                        $tab_content .= '</div>'; // Fechar .tab-pane

                        // Resetar a query
                        wp_reset_postdata();

                        // Alterar a classe ativa apenas para a primeira aba
                        $active_class = '';
                    endif;
                }
                ?>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <?php echo $tab_content; ?>
            </div>

            <a href="<?= home_url(); ?>/projetos" class="view-all-projects"><?php _e('Conheça todos os projetos', 'ihub'); ?> <i class="fa-solid fa-arrow-up-right-from-square ms-4"></i></a>
        </div>
    </section>



    <section class="news-section">
        <div class="container">
            <h2 class="section-title mb-5"><?php _e('Notícias do Smart Metrópolis iHub', 'ihub'); ?></h2>
            <div class="row">
                <?php
                // Argumento para buscar a notícia destacada
                $featured_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'meta_query' => array(
                        array(
                            'key' => '_is_featured',
                            'value' => '1',
                            'compare' => '='
                        )
                    )
                );

                $featured_query = new WP_Query($featured_args);

                // Se há uma notícia marcada como destaque
                if ($featured_query->have_posts()) {
                    $featured_query->the_post();
                } else {
                    // Se nenhuma notícia foi marcada como destaque, usar a última notícia
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $featured_query = new WP_Query($args);
                    $featured_query->the_post();
                }

                // Obter a primeira tag
                $post_tags = get_the_tags();
                $first_tag = $post_tags ? $post_tags[0]->name : null;

                // Exibir a notícia destacada
                ?>
                <a href="<?php the_permalink(); ?>" class="col-lg-7 col-md-12 main-news">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                        </figure>
                    <?php endif; ?>
                    <div class="date-label">
                        <?php echo get_the_date(); ?>
                        <?php if ($first_tag) : ?>
                            <span class="badge"><?php echo esc_html($first_tag); ?></span>
                        <?php endif; ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                </a>

                <?php
                // Obter as últimas 5 notícias, excluindo a destacada
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'post__not_in' => array(get_the_ID()), // Excluir a notícia destacada
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $news_query = new WP_Query($args);

                if ($news_query->have_posts()) :
                ?>
                    <div class="col-lg-5 side-news">
                        <?php
                        while ($news_query->have_posts()) : $news_query->the_post();

                            // Obter a primeira tag para as notícias laterais
                            $post_tags = get_the_tags();
                            $first_tag = $post_tags ? $post_tags[0]->name : null;
                        ?>
                            <a href="<?php the_permalink(); ?>" class="mb-4 row">
                                <div class="col-4">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure>
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                        </figure>
                                    <?php endif; ?>
                                </div>
                                <div class="col-8">
                                    <div class="date-label">
                                        <?php echo get_the_date(); ?>
                                        <?php if ($first_tag) : ?>
                                            <span class="badge"><?php echo esc_html($first_tag); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="action-section text-end">
                <a href="<?= home_url(); ?>/category<?php _e('/noticias', 'ihub'); ?>" class="view-all-news btn-secondary text-center d-md-inline-block d-sm-block" title="<?php _e('Clique para ter acesso às notícias', 'ihub'); ?>"><?php _e('Todas as notícias', 'ihub'); ?><i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>



<?php 

/** Verificando inicialmente se existem especialistas cadastrados. Em caso negativo a seção não será renderizada. */

// Query para buscar os especialistas
$args = array(
    'post_type' => 'especialista', // Nome do Custom Post Type
    'posts_per_page' => 10, // Quantos especialistas exibir (-1 para todos)
    'orderby' => 'title', // Ordenar por título (nome do especialista)
    'order' => 'ASC', // Ordem crescente
);

$especialistas_query = new WP_Query($args);

// Loop para exibir os especialistas
if ($especialistas_query->have_posts()) :

?>


<section class="experts-section py-5">
    <div class="container py-5">
        <h2 class="section-title"><?php _e('Especialistas em diversas áreas', 'ihub'); ?></h2>
        <a href="<?= home_url(__('/pt/especialistas', 'ihub')); ?>" class="view-all mb-4"><?php _e('Conheça nossa equipe', 'ihub'); ?><i class="fa-solid fa-arrow-right ms-2"></i></a>
        <div class="owl-carousel owl-theme" style="margin: 0 -10px">
            <?php

                //loop de carregamento de especialistas
                while ($especialistas_query->have_posts()) : $especialistas_query->the_post();
                    // Recuperar os campos personalizados
                    $especialista_area = get_post_meta(get_the_ID(), '_especialista_area', true);
                    $especialista_nome = get_post_meta(get_the_ID(), '_especialista_nome', true);
                    $especialista_foto = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            ?>
                    <div class="item">
                        <?php if ($especialista_foto) : ?>
                            <img src="<?= esc_url($especialista_foto); ?>" alt="<?= esc_attr($especialista_nome); ?>">
                        <?php endif; ?>
                        <p><?= esc_html($especialista_area); ?></p>
                        <h5><?= esc_html($especialista_nome); ?></h5>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php 
        // finalizada a verificação

            endif;

?>


    
<?php get_footer(); ?>