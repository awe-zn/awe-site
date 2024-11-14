<?php
/**
 * Rodapé padrão do tema
 *
 * Este arquivo é responsável por exibir o rodapé do site.
 *
 * @package SmartMetropolisiHub
 */
?>



<footer class="footer">
    
        <h4><?php _e('Smart Metrópolis iHub', 'ihub'); ?></h4>
        <p><?php _e('Instituto Metrópole Digital', 'ihub'); ?></p>
        <div class="social-icons my-3">
        <?php
            // Definindo o array com as URLs das redes sociais
            $social_links = array(
                'linkedin'  => get_option('smihub_linkedin'),
                'twitter'   => get_option('smihub_twitter'),
                'instagram' => get_option('smihub_instagram'),
                'youtube'   => get_option('smihub_youtube'),
                'maps'      => get_option('smihub_maps')
            );

            // Ícones das redes sociais (assumindo que você está usando FontAwesome)
            $social_icons = array(
                'linkedin'  => 'fa-brands fa-linkedin',
                'twitter'   => 'fa-brands fa-twitter',
                'instagram' => 'fa-brands fa-instagram',
                'youtube'   => 'fa-brands fa-youtube',
                'maps'      => 'fa-solid fa-location-dot'
            );

            // Loop para renderizar os links
            foreach ($social_links as $key => $link) {
                if (!empty($link)) { // Renderizar apenas se o link não estiver vazio
                    echo '<a href="' . esc_url($link) . '" target="_blank" title="' . ucfirst($key) . '">';
                    echo '<i class="' . esc_attr($social_icons[$key]) . '"></i>';
                    echo '</a>';
                }
            }
            ?>
        

        <address class="footer-address">
            <span class="d-block"><?php _e('UNIVERSIDADE FEDERAL DO RIO GRANDE DO NORTE', 'ihub'); ?></span>
            <span class="d-block"><?php _e('Instituto Metrópole Digital', 'ihub'); ?></span>
            <p>
                Av. Senador Salgado Filho, nº 3000 - CEP 59078-900<br>
                Universidade Federal do Rio Grande do Norte<br>
                Natal - Rio Grande do Norte - Brasil
            </p>
        </address>
    
</footer>









    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a5a0c0d304.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Scripts do Owl Carousel -->
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1.5
                    },
                    500: {
                        items: 2.1
                    },
                    700: {
                        items: 3.1
                    },
                    1200: {
                        items: 4.5
                    }
                }
            });
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>