<?php
$theme = get_template_directory_uri();


?>

<?php get_header(); ?>


<main class="container news projects my-5">
<?php
    if (have_posts()) : 
        while (have_posts()) : the_post(); 
?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= home_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= home_url();   _e('/projetos', 'ihub'); ?>"><?php _e('Projetos', 'ihub'); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="offset-lg-2 col-lg-8 col-12">

           
            <article class="content">


                <header>
                    <h1><?php the_title(); ?></h1>
                    <small>
                        <?php _e('Publicado em', 'ihub'); ?> <?php echo get_the_date('j \d\e F \d\e Y'); ?>
                    </small>
                </header>

                
                <section class="content pt-5">
                    
                    <?php the_content(); ?>
                    
                </section>

                    <?php endwhile; 
                        endif; ?>

                

            </article>

    
            <section class="artigos-relacionados my-5 border-top pt-4">
                <header>
                    <h2><?php _e('Projetos relacionados', 'ihub'); ?></h2>
                </header>
                <section class="artigos-container">
                    <ul class="artigos-list list-unstyled mt-3 row">
                        <?php
                        // Argumentos da consulta para obter os 3 últimos projetos
                        $related_projects_args = array(
                            'post_type' => 'projeto', // Tipo de post personalizado
                            'posts_per_page' => 3, // Número de projetos a serem exibidos
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post__not_in' => array(get_the_ID()), // Excluir o projeto atual
                        );

                        $related_projects_query = new WP_Query($related_projects_args);

                        // Loop para exibir os projetos
                        if ($related_projects_query->have_posts()) :
                            while ($related_projects_query->have_posts()) : $related_projects_query->the_post(); ?>
                                <li class="artigo-item col-lg-4 col-md-6 col-12 pt-2">
                                    <a href="<?php the_permalink(); ?>" class="artigo-link">
                                        <figure>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                                            <?php endif ; ?>
                                        </figure>
                                        <div><?php the_title(); ?></div>    
                                    </a>
                                </li>
                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <li class="artigo-item col-12">
                                <p><?php _e('Nenhum projeto relacionado foi encontrado.', 'ihub'); ?></p>
                            </li>
                        <?php endif; ?>
                    </ul>
                </section>
            </section>



        </div>        
    </div>



</main>




<?php
get_footer(); // Inclui o rodapé do tema
?>