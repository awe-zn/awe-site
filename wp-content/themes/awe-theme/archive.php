<?php get_header(); ?>

<menu class="bg-gray-adn-white-white">
    <section class="content-area">
        <main class="site-main">
            <?php if (have_posts()) : ?>
                <header class="archive-header">
                    <h1 class="archive-title">
                        <?php
                        // Exibe o título do arquivo com base no contexto
                        if (is_category()) {
                            single_cat_title();
                        } elseif (is_tag()) {
                            single_tag_title();
                        } elseif (is_author()) {
                            the_post();
                            echo 'Artigos de ' . get_the_author();
                            rewind_posts();
                        } elseif (is_day()) {
                            echo 'Arquivos de ' . get_the_date();
                        } elseif (is_month()) {
                            echo 'Arquivos de ' . get_the_date('F Y');
                        } elseif (is_year()) {
                            echo 'Arquivos de ' . get_the_date('Y');
                        } else {
                            echo 'Arquivos';
                        }
                        ?>
                    </h1>
                    <?php if (category_description()) : ?>
                        <div class="archive-description"><?php echo category_description(); ?></div>
                    <?php endif; ?>
                </header>

                <?php
                // Início do Loop do WordPress
                while (have_posts()) : the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <span class="posted-on">Publicado em <?php echo get_the_date(); ?></span>
                            </div>
                        </header>

                        <div class="entry-summary">
                            <?php the_excerpt(); // Exibe um resumo da postagem 
                            ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <div class="pagination">
                    <?php
                    // Exibe a navegação de paginação
                    the_posts_pagination([
                        'prev_text' => '« Anterior',
                        'next_text' => 'Próximo »',
                    ]);
                    ?>
                </div>

            <?php else : ?>
                <p>Nenhuma postagem encontrada.</p>
            <?php endif; ?>
        </main>
    </section>
</menu>

<?php get_footer(); ?>