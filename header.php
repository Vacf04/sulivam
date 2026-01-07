<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sulivam Softwares" />
  <title>Sulivam Softwares</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header mt-4">
    <div class="container d-flex flex-column align-items-center gap-3">
      <a href="/" class="d-block"><img src="<?php echo get_template_directory_uri(); ?>/img/sulivam.svg"
          alt="Sulivam" /></a>
      <?php
						$args = array(
							'menu' =>
        'Header', 'theme_location' => 'menu-principal', 'container' => false
        ); wp_nav_menu( $args ); ?>
    </div>
  </header>
</body>

</html>