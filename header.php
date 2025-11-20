<?php
/**
 * Template Header - Topo Amarelo com Botão ENTRAR
 * 
 * @package Bebelume_Theme
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Bebelume",
        "legalName": "Bebelume",
        "url": "https://bebelume.com.br",
        "logo": "https://bebelume.com.br/wp-content/uploads/2025/11/cropped-logo-bebelume-play.png",
        "description": "Portal Bebelume: filmes, séries, jogos e arte para a primeira infância. Conteúdos criativos para famílias, escolas e educadores.",
        "sameAs": [
        "https://www.instagram.com/bebelume/",
        "https://www.youtube.com/c/bebelume",
        "https://www.facebook.com/BEBELUME/"
        ]
      }
		</script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header header-infantil py-3 position-relative overflow-hidden">
  <div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">

      <!-- Logo -->
      <div class="navbar-brand m-0">
        <?php if (has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none text-dark fw-bold fs-4">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
      </div>

      <!-- Elementos decorativos -->
      <div class="header-decorations d-none d-md-flex flex-grow-1 justify-content-center position-relative">

      </div>

      <!-- Botão ENTRAR -->
      <div>
        <a href="#" 
           class="btn-disabled btn btn-light px-4 py-2 rounded-pill fw-bold position-relative btn-entrar">
          ☀️ ENTRAR (Em breve)
          
        </a>
      </div>
    </div>
  </div>
  <div class="wave"></div>
</header>
