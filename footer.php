<?php
/**
 * Footer Template
 * 
 * @package Bebelume_Theme
 */
?>

<footer class="site-footer bg-success text-white mt-0">
    <div class="container py-4">
        
        <!-- Bloco Sobre Nós (renderizado diretamente) -->
        <div class="row mb-4">
            <div class="col-12">
                <?php
                // Renderiza o bloco Sobre Nós diretamente
                echo do_blocks('<!-- wp:bebelume/sobre-nos /-->');
                ?>
            </div>
        </div>
        
        <!-- Área de widgets clássicos (se houver) -->
        <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
            <div class="row mb-4">
                <div class="col-12">
                    <?php dynamic_sidebar( 'footer-widgets' ); ?>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Menu do Rodapé -->
        <div class="row">
            <div class="col-12">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'container'      => 'nav',
                    'container_class' => 'footer-navigation',
                    'menu_class'     => 'list-inline mb-0',
                    'fallback_cb'    => false,
                ) );
                ?>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-3 pt-3 border-top border-white border-opacity-25">
            <div class="col-12 text-center">
                <p class="mb-0 small opacity-75">
                    &copy; <?php echo date('Y'); ?> Bebelume. Todos os direitos reservados.
                </p>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>