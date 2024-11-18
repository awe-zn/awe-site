<?php
/**
 * Cabeçalho padrão do tema
 *
 * Este arquivo é responsável por exibir o cabeçalho do site.
 *
 * @package SmartMetróplisiHub
 */

$theme = get_template_directory_uri();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->

    <meta charset="<?php bloginfo( 'charset' ); ?>" />  
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Título da página -->
    <title>
        <?php
        if (is_home() || is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } elseif (is_single() || is_page()) {
            wp_title('');
            echo ' | ';
            bloginfo('name');
        } elseif (is_category()) {
            single_cat_title();
            echo ' | ';
            bloginfo('name');
        } elseif (is_tag()) {
            single_tag_title();
            echo ' | ';
            bloginfo('name');
        } elseif (is_search()) {
            echo 'Resultados da pesquisa por: ' . get_search_query();
            echo ' | ';
            bloginfo('name');
        } elseif (is_404()) {
            echo 'Página não encontrada';
            echo ' | ';
            bloginfo('name');
        } else {
            wp_title('');
            echo ' | ';
            bloginfo('name');
        }
        ?>
    </title>
    <?php /**
    <meta name="apple-mobile-web-app-title" content="Smart Metrópolis Fiware iHub - Transformando Cidades Inteligentes com FIWARE">
    <meta name="application-name" content="Smart Metrópolis Fiware iHub">
    <meta name="msapplication-TileColor" content="#F2B025">
    <meta name="theme-color" content="#F2B025">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="description" content="O Smart Metrópolis FIWARE iHub é focado em impulsionar cidades inteligentes com soluções inovadoras e sustentáveis com a expertise do Smart Metrópolis" />
    <link rel="canonical" href="<?= home_url(); ?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Smart Metrópolis Fiware iHub - Transformando Cidades Inteligentes com FIWARE" />
    <meta property="og:description" content="O Smart Metrópolis FIWARE iHub é focado em impulsionar cidades inteligentes com soluções inovadoras e sustentáveis com a expertise do Smart Metrópolis" />
    <meta property="og:url" content="<?= home_url(); ?>" />
    <meta property="og:site_name" content="Smart Metrópolis Fiware iHub - Transformando Cidades Inteligentes com FIWARE" />
    */
    // Obter o ID do logo customizado
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo_url = 0;
    // Verificar se há um logo definido
    if ($custom_logo_id) {
        // Pegar a URL da imagem do logo
        $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

    }
    ?>
    <meta property="og:image" content="<?php if ( $logo_url ) {  echo $logo_url[0]; } else { echo $theme . "/assets/img/logo.png"; } ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="665" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $theme ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= $theme ?>/style.css">
    <link rel="stylesheet" href="<?= $theme ?>/assets/css/news.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
    <?php wp_body_open(); ?>
	
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <?php /*<!--
                   * 
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
            <a class="navbar-brand" href="<?= home_url(); ?>">
                <img src="<?= $theme ?>/assets/img/logo.png" alt="Smart Metropolis FIWARE iHub">
            </a> */ ?>
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo  get_bloginfo( 'name' ) ;
                }
                ?>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fa-xl"></i>
                <i class="fa-solid fa-xmark fa-xl d-none"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
<?php
                    /*
                    <li class="nav-item">
                        <a class="nav-link" href="page.php">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects-archive.php">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news-archive.php">Notícias</a>
                    </li>        
                    */
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => false,
            'items_wrap' => '%3$s', // Remove o <ul> adicional que wp_nav_menu() normalmente adiciona
            'depth' => 1, // Garante que apenas um nível de menu seja exibido
            'fallback_cb' => false, // Evita que wp_page_menu() seja usado como fallback
        ));

					/** removendo para incluir menus gerados pelo plugin Polylang
					<li class="nav-item lang-context">
                        <a class="nav-link lang me-1 active" title="Língua portuguesa ativada" href="#">PT</a>  
                        <a class="nav-link lang" title="Active english language" href="#">EN</a>
                    </li>
*/
        ?>
                    
                </ul>
            </div>
        </div>
        <!-- Background inferior -->
        <div class="navbar-container"></div>
    </nav>