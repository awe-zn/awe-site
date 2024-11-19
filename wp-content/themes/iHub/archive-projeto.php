<?php
$theme = get_template_directory_uri();


?>

<?php get_header(); ?>


<main class="container news projects my-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php _e('Projetos', 'ihub'); ?></li>
        </ol>
    </nav>

    <section class="list-news">
        
        <header>
            <h1><?php _e('Projetos desenvolvidos no Smart Metrópolis iHub', 'ihub'); ?></h1>
            <small><?php _e('Uma lista completa de projetos desenvolvidos no nosso iHub.', 'ihub'); ?></small>
        </header>

        <section class="artigos-relacionados my-5 border-top pt-4">
            <section class="artigos-container">
                <ul class="artigos-list list-unstyled mt-3 row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                    <li class="artigo-item col-lg-3 col-md-4 col-12 pt-2">
    
                        <a href="<?php the_permalink(); ?>" class="artigo-link">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure>
                                <?php the_post_thumbnail('medium', array('class' => 'img-fluid mb-3')); ?>
                            </figure>                                
                            <?php endif; ?>                               

                            <div><?php the_title(); ?></div>    
                        </a>
                    </li>
                    <?php endwhile;


                else :
                    echo '<p>Nenhum projeto encontrado.</p>';
                endif;
                ?>
                    <?php for($i = 0; $i < 10; $i++): ?>
                    
                    <?php endfor; ?>
                </ul>
            </section>
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
                        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');

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
    </section>





</main>




    
<?php


get_footer(); // Inclui o rodapé do tema 