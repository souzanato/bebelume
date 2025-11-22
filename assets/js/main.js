/**
 * Bebelume Theme - Main JavaScript
 * 
 * @package Bebelume_Theme
 * @since 1.0.0
 */

(function($) {
    'use strict';

    /**
     * Gerenciamento do Spinner de Loading
     */
    function initSpinner() {
        // Função para esconder o spinner
        function hideSpinner() {
            var spinner = document.getElementById('page-spinner');
            if (spinner) {
                spinner.classList.add('hidden');
                
                // Remove o elemento do DOM após a transição
                setTimeout(function() {
                    spinner.remove();
                }, 500);
            }
        }
        
        // Aguarda o carregamento completo do DOM e todos os recursos
        if (document.readyState === 'complete') {
            // Se já estiver carregado, esconde imediatamente
            hideSpinner();
        } else {
            // Aguarda o evento de load (DOM + imagens + CSS + scripts)
            window.addEventListener('load', hideSpinner);
        }
    }

    /**
     * Quando o documento estiver pronto
     */
    $(document).ready(function() {
        
        // Inicializa o spinner
        initSpinner();
        
        // Inicializa outras funcionalidades
        bebelumeInit();
        
    });

    /**
     * Inicialização do tema
     */
    function bebelumeInit() {
        handleAndarHover();
        handleKeyboardNavigation();
        addLoadingAnimation();
    }

    /**
     * Efeitos de hover nos andares
     */
    function handleAndarHover() {
        $('.andar-link').on('mouseenter', function() {
            $(this).closest('.bebelume-section').addClass('andar-hover');
        });

        $('.andar-link').on('mouseleave', function() {
            $(this).closest('.bebelume-section').removeClass('andar-hover');
        });
    }

    /**
     * Navegação por teclado (acessibilidade)
     */
    function handleKeyboardNavigation() {
        $('.andar-link').on('keydown', function(e) {
            // Enter ou Espaço
            if (e.which === 13 || e.which === 32) {
                e.preventDefault();
                window.location.href = $(this).attr('href');
            }
        });
    }

    /**
     * Animação de loading ao clicar nos andares
     */
    function addLoadingAnimation() {
        $('.andar-link').on('click', function() {
            $(this).addClass('andar-loading');
        });
    }

    /**
     * Smooth scroll (caso precise no futuro)
     */
    function smoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
    }

    /**
     * Detecta se é dispositivo touch
     */
    function isTouchDevice() {
        return ('ontouchstart' in window) || 
               (navigator.maxTouchPoints > 0) || 
               (navigator.msMaxTouchPoints > 0);
    }

    /**
     * Ajusta comportamento para dispositivos touch
     */
    if (isTouchDevice()) {
        $('body').addClass('touch-device');
    }

})(jQuery);