<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container d-flex flex-column justify-content-center">
            <div class="row justify-content-between align-items-center flex-md-nowrap">
                <div class="content-left col-md-6 mb-4 mb-md-0">
                    <h1 class="we-are text-uppercase fw-bold">
                        somos inquietos e queremos
                    </h1>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/inovar-na-escola-text.svg" alt="inovar-na-escola-text"
                        class="w-sm-auto w-100">
                    <p class="subtitle mb-sm-0 mb-4">
                        Aceleramos habilidades e o acesso ao mercado de trabalho. Juntos ajudamos a escola a ampliar
                        o seu alcance e a transformar vidas.
                    </p>
                </div>
                <figure class="working m-auto m-md-0 col-md-6 col-lg-4 ">
                    <img class=" align-self-end w-100" src="<?php echo get_template_directory_uri() ?>/assets/imgs/working.svg"
                        alt="imagem de trabalho">
                </figure>
            </div>
            <figure class="hero-down-arrow mx-auto position-relative d-flex flex-column">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-low-blue.svg" alt="arrow-low-blue">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-low-yellow.svg" class="position-absolute" alt="arrow-low-yellow">
            </figure>
        </div>
    </section>

    <section class="container_advisors">
        <div class="container d-flex flex-column">

            <section class="top d-flex gap-4 row">
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrows-right.svg" alt="setas para direita ">
                <div class="content_top gap-3 col col-sm-10 col-lg-7 d-flex flex-column gap-3">
                    <h2>
                        Somos <br>
                        <span class="text-wrapper fw-bold">
                            <span id="animated-text" class="animated-text">inovadores</span>
                        </span>
                    </h2>
                    <p>Aceleramos a aprendizagem dos alunos nas disciplinas técnicas e seus soft skills. Focamos no
                        mundo do trabalho e seus desafios.</p>
                    <a target="_blank" href="<?php echo get_template_directory_uri(); ?>/sobre" class="fs-6 fw-bold text-decoration-none">Quer saber mais sobre o que fazemos?
                        <br>#PorDentroDaAWE</a>
                </div>
            </section>

            <section class="container-testimonials d-flex gap-5 align-items-center">

                <div class="container-card-view">
                    <div class="card-testimonials gap-5 d-flex px-5 py-3 rounded-3">
                        <div class="container-img position-relative">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/cesimar_prof_img.png" alt="cesimar_prof_img">
                        </div>
                        <div class="content-card">
                            <p class="title-card">Cesimar Xavier</p>
                            <small class="profession fs-6">
                                _Designer e professor
                            </small>
                            <p class="message fs-6">É preciso criar espaços de conexão entre a escola e o mercado de
                                trabalho. A Agência Web Escolar é isso. Ela fortalece essas relações e enriquece o
                                repertório dos jovens que estão imersos na complexidade e nos desafios do mundo
                                atual.</p>
                        </div>
                    </div>
                </div>

                <div class="container-card-view">
                    <div class="card-testimonials gap-5 d-flex px-5 py-3 rounded-3">
                        <div class="container-img position-relative">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/baesse_prof_img.png" alt="baesse_prof_img">
                        </div>
                        <div class="content-card">
                            <p class="title-card">Pedro Baesse</p>
                            <small class="profession fs-6">
                                _Evangelista de software livre e professor
                            </small>
                            <p class="message fs-6">Acredito no software livre e na democratização do ensino. Esse é
                                o caminho para uma sociedade verdadeiramente evoluída.</p>
                        </div>
                    </div>
                </div>

                <div class="container-card-view">
                    <div class="card-testimonials gap-5 d-flex px-5 py-3 rounded-3">
                        <div class="container-img position-relative">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/andreza_prof_img.png" alt="andreza_prof_img">
                        </div>
                        <div class="content-card">
                            <p class="title-card">Andreza Souza</p>
                            <small class="profession fs-6">
                                _Prof. Doutora em Educação das Galáxias e já foi duas vezes na lua
                            </small>
                            <p class="message fs-6">Educar é transformar no contexto da luta e com o pé no chão.</p>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    </section>

    <section class="our-activities">
        <div class="container ">
            <div class="row flex-column container-trends">
                <article class="content-trends col col-sm-10 col-lg-7">
                    <small class="fs-6">
                        _em nossas atividades
                    </small>
                    <p class="title-trends fs-1 mb-4">Pesquisamos e aplicamos <span>tendências</span> os nossos
                        projetos.</p>
                    <p class="subtitle-trends">
                        O mercado é muito dinâmico, e nós também. O desafio é algo que nos movimenta, nos energiza,
                        por isso gostamos e buscamos experimentar o que está nos #TopTrends e aplicamos aqui.
                    </p>
                </article>
                <div class="container-arrow-right-blue">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue.svg" alt="setas azuis para direita">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue.svg" alt="setas azuis para direita">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue.svg" alt="setas azuis para direita">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue.svg" alt="setas azuis para direita">
                </div>
                <div class="container-trends d-flex flex-column position-relative">
                    <div class="trends position-sticky z-1 row flex-sm-nowrap d-flex justify-content-between align-items-center">
                        <div class="content-trend col-sm-6">
                            <small class="tag fs-6">#que tal desenvolver sua próxima página conosco?</small>
                            <p class="content-title fw-bold fs-2">Projetamos para web</p>
                            <p class="content-subtitle py-3">Projetamos e desenvolvemos páginas para web ou somente
                                a
                                interface e suas interações. Se você tem uma demanda de website ou apenas uma
                                interface para web ou mobile, podemos ajudá-lo.</p>
                            <a href="#" class="to-talk text-decoration-none fs-6 fw-bold">Vamos conversar sobre
                                isto?</a>
                        </div>
                        <figure class=" col col-sm-6">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/imgs/web-projects.svg" alt="web-projects">
                        </figure>
                    </div>
                    <div class="trends position-sticky z-2 row flex-sm-nowrap d-flex justify-content-between align-items-center flex-sm-row-reverse">
                        <div class="content-trend col-sm-6">
                            <small class="tag fs-6">#do que você precisa?</small>
                            <p class="content-title fw-bold fs-2">Fazemos código outsourcing</p>
                            <p class="content-subtitle py-3">Desenvolvemos códigos sob demanda e codificamos em
                                algumas
                                linguagens de programação que estão em alta no mercado. Buscamos aliar o que tá em
                                alta e o que podemos desenvolver na escola, com apoio dos professores e mentores.
                            </p>
                            <a href="#" class="to-talk text-decoration-none fs-6 fw-bold">Vamos conversar sobre
                                isto?</a>
                        </div>
                        <figure class=" col col-sm-6">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/imgs/outsourcing-img.svg" alt="outsourcing" class="w-100">
                        </figure>
                    </div>
                    <div class="trends position-sticky z-3 row flex-sm-nowrap d-flex align-items-center justify-content-between">
                        <div class="content-trend col-sm-6">
                            <small class="tag fs-6">#que habilidade é importante para você?</small>
                            <p class="content-title fw-bold fs-2">Ampliamos habilidades</p>
                            <p class="content-subtitle py-3">Nem todos sabem em um nível profissional. Reconhecemos
                                isso
                                e estamos sempre desenvolvendo #workshops para alavancar algumas habilidades
                                importantes. Não é apenas para os membros da equipe, mas também para nossos
                                clientes, parceiros e comunidade. <br> <br> #ux design #facilitação em design
                                #design
                                thinking #pesquisa em ux </p>
                            <a href="#" class="to-talk text-decoration-none fs-6 fw-bold">Ficou interessado?</a>
                        </div>
                        <figure class=" col col-sm-6">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/imgs/image-team-skills.svg" alt="image-team-skills">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-projects">
        <div class="container d-flex flex-column">
            <div class="content-our-project">
                <h3 class="mb-3">Conheça nossos projetos</h3>
                <small class="subtitle-our-projects">#estamos desenvolvendo a todo vapor</small>
            </div>
            <div class="row overflow-x-scroll flex-nowrap">
                <?php
                // Configura os argumentos para a consulta WP_Query
                $args = array(
                    'post_type' => 'projetos',  // Nome do custom post type
                    'posts_per_page' => 4,     // Número de posts a serem exibidos
                    'order' => 'DESC',          // Ordem dos posts (DESC para mais recentes)
                );

                // Cria a consulta
                $projetos_query = new WP_Query($args);

                // Inicia o loop para exibir os posts
                if ($projetos_query->have_posts()) :
                    echo '<div class="projetos-grid row">'; // Container para o grid de projetos
                    while ($projetos_query->have_posts()) : $projetos_query->the_post(); ?>

                        <div class="project col-3 d-flex flex-column gap-3">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/rectangle.png" alt="placeholder">
                            <?php endif; ?>

                            <div class="content-text-project">
                                <p class="title-project fw-bold mb-2"><?php the_title(); ?></p>
                                <p class="description-project"><?php the_excerpt(); ?></p>
                            </div>
                            <a target="_blank" href="<?php the_permalink(); ?>" class="normal-text">Acesse o projeto</a>
                        </div>

                <?php endwhile;
                    echo '</div>'; // Fim do container do grid de projetos
                    wp_reset_postdata(); // Restaura os dados do post original
                else :
                    echo '<p>Nenhum projeto encontrado.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="follow-news">
        <div class="container">
            <small>FIQUE POR DENTRO</small>
            <h3 class="mt-1 mb-3 fw-bold">Aqui as novidades não param</h3>
            <p>Acompanhe o que estamos fazendo e não perca nenhum detalhe.</p>
        </div>
    </section>

    <section class="section-news">
        <div class="container">
            <div class="row gap-4 flex-sm-nowrap">
                <div class="main-news col col-sm-5 d-flex flex-column gap-3">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/thumb.svg" alt="rectangle">
                    <div class="content-text-project">
                        <small class="title-news mb-3">Publicado em 20.11.2021</small>
                        <p class="description-news fw-semibold">Delegação da AWE vai ao Paraguai apresentar o
                            resultado do projeto MapGas. Os alunos Daniel e Jadson representaram o IFRN e fizeram
                            bonito.</p>
                    </div>
                    <a target="_blank" href="#" class="">Continue lendo</a>
                </div>
                <section class="box-news d-flex flex-column gap-4 col col-sm-7">
                    <?php
                    $news_query = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    ]);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                            <div class="news pb-4">
                                <small class="mb-2 d-inline-block">Publicado <?php the_time('d.m.Y'); ?> </small>
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none d-block"><?php the_title(); ?></a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Nenhuma notícia encontrada.</p>';
                    endif;
                    ?>
                </section>
            </div>
            <button class="text-uppercase d-flex align-items-center mt-4 fw-bold btn-1 ms-auto" id="noticias-button">Acesse mais notícias <img
                    src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue-dark.svg" alt="arrow-right-blue"></button>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row flex-column d-flex">
                <div class="title col col-sm-6 d-flex flex-column">
                    <small>_saca só esse</small>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/time-de-feras-text.svg" alt="time-de-feras-text" class="mb-3 mt-1">
                    <p class="subtitle">Aqui ficamos felizes quando “perdemos” um membro da nossa equipe. Isso quer
                        dizer que o mercado ganhou um grande profissional.</p>
                </div>
                <div class="box-card-team d-flex gap-4 overflow-x-scroll flex-nowrap">
                    <figure class="card-team p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/clayton-renan-design.png"
                            alt="clayton-renan-img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Clayton Rennan</p>
                            <small class="fs-6">Designer</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/eric-yuri-img.png" alt="eric-yuri-img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Eric Yuri</p>
                            <small class="fs-6">Programador</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/gabriel-pessoa-img.png"
                            alt="Gabriel Pessoa img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Gabriel Pessoa</p>
                            <small class="fs-6">Programador</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/luiz-fernando-img.png" alt="Luiz Fernando img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Luiz Fernando</p>
                            <small class="fs-6">Designer</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/filipi-rafael-img.png" alt="filipi-rafael-img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Filipi Rafael</p>
                            <small class="fs-6">Programador</small>
                        </figcaption>
                    </figure>
                </div>
                <a class="btn-2 text-decoration-none text-uppercase d-flex align-items-center mt-4 fw-bold px-4 py-3 rounded-3 gap-4 me-auto w-auto" href="./equipe">conhecer
                    time completo
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue-lighter.svg" alt="arrow-right-blue"></a>
            </div>
        </div>
    </section>

    <section class="team-mentors">
        <div class="container">
            <div class="row flex-column d-flex gap-5">
                <div class="title col col-sm-6 d-flex flex-column gap-3">
                    <h3>_nossos mentores</h3>
                    <p class="subtitle">A visão de quem tá no mercado é essencial para alavancar o quê e como
                        aprendemos na escola. Temos a sorte de contar com mentores em diversas áreas que nos ajudam
                        a fazer a diferença.</p>
                </div>
                <div class="box-card-team-mentors flex-nowrap row d-flex justify-content-between gap-4">
                    <figure class="card-team col-3 p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/clayton-rennan-mentor-img.svg"
                            alt="clayton-renan-img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Clayton Rennan</p>
                            <small class="fs-6">Designer JR</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team col-3 p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/marcus-vinicius-mentor-img.svg"
                            alt="marcus-vinicius-mentor-img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Eric Yuri</p>
                            <small class="fs-6">Programador</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team col-3 p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/kadja-aleska-mentor-img.svg"
                            alt="kadja-aleska-mentor-img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Gabriel Pessoa</p>
                            <small class="fs-6">Programador</small>
                        </figcaption>
                    </figure>
                    <figure class="card-team col-3 p-3 d-flex flex-column gap-3">
                        <img class="rounded-3" src="<?php echo get_template_directory_uri() ?>/assets/imgs/otavio-barbosa-mentor-img.svg"
                            alt="Luiz Fernando img">
                        <figcaption class="content-card-team">
                            <p class="name-member fw-bold mb-1">Luiz Fernando</p>
                            <small class="fs-6">Designer</small>
                        </figcaption>
                    </figure>
                </div>
                <button class="btn-1 text-uppercase d-flex align-items-center mt-4 fw-bold me-sm-auto w-auto">Vem fazer parte
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/arrow-right-blue-dark.svg" alt="arrow-right-blue" class="ms-sm-0 ms-auto"></button>
            </div>
        </div>
    </section>
    <script>
        const estilo = document.createElement("style");
        estilo.textContent = ".container_advisors .container-testimonials .container-card-view .card-testimonials .container-img::after{background-image:url('<?php echo get_template_directory_uri(); ?>/assets/imgs/pingo.svg');}", document.head.appendChild(estilo);
        document.getElementById("noticias-button").addEventListener("click", function() {
            window.location.href = "<?php echo get_template_directory_uri(); ?>/noticias";
        });
    </script>
</main>

<?php get_footer(); ?>