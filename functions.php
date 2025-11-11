<?php
/**
 * Bebelume Theme - Functions
 * 
 * @package Bebelume_Theme
 * @since 1.0.0
 */

// Evita acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

// Define constantes do tema
define('BEBELUME_VERSION', '1.0.0');
define('BEBELUME_THEME_DIR', get_template_directory());
define('BEBELUME_THEME_URI', get_template_directory_uri());

/**
 * Configuração inicial do tema
 */
function bebelume_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a logo personalizado
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Registra menu de navegação
    register_nav_menus(array(
        'footer-menu' => __('Menu do Rodapé', 'bebelume-theme'),
    ));
}
add_action('after_setup_theme', 'bebelume_setup');

/**
 * Inclui arquivo de enqueue
 */
require_once BEBELUME_THEME_DIR . '/inc/enqueue.php';

/**
 * Registra blocos Gutenberg
 */
require_once BEBELUME_THEME_DIR . '/inc/register-blocks.php';