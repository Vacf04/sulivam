<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="pt-5 pb-5 carousel-section">
  <div id="mainCarousel" class="carousel slide pb-3 px-4" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active rounded">
        <img src="<?php echo  get_template_directory_uri() ?>/img/placeholder.jpg" alt="Primeiro Slide">
      </div>

      <div class="carousel-item rounded">
        <img src="<?php echo get_template_directory_uri() ?>/img/placeholder.jpg" alt="Segundo Slide">
      </div>

      <div class="carousel-item rounded">
        <img src="<?php echo  get_template_directory_uri() ?>/img/placeholder.jpg" alt="Terceiro Slide">
      </div>

      <div class="carousel-item rounded">
        <img src="<?php echo  get_template_directory_uri() ?>/img/placeholder.jpg" alt="Quarto Slide">
      </div>

      <button class="carousel-control-prev carousel-control" type="button" data-bs-target="#mainCarousel"
        data-bs-slide="prev">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
          <path
            d="M579-480 285-774q-15-15-14.5-35.5T286-845q15-15 35.5-15t35.5 15l307 308q12 12 18 27t6 30q0 15-6 30t-18 27L356-115q-15 15-35 14.5T286-116q-15-15-15-35.5t15-35.5l293-293Z" />
        </svg>
      </button>
      <button class="carousel-control-next carousel-control" type="button" data-bs-target="#mainCarousel"
        data-bs-slide="next">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
          <path
            d="M579-480 285-774q-15-15-14.5-35.5T286-845q15-15 35.5-15t35.5 15l307 308q12 12 18 27t6 30q0 15-6 30t-18 27L356-115q-15 15-35 14.5T286-116q-15-15-15-35.5t15-35.5l293-293Z" />
        </svg>
      </button>
    </div>
  </div>

  <div class="carrossel-buttons w-100 d-flex justify-content-center mt-3 gap-2">
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active-button"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3"></button>
  </div>
</section>

<section id="quemsomos" class="pb-5 pt-5">
  <div class="container">
    <h1 class="font-36 mb-5">Quem somos</h1>
    <div class="quemsomos-content row gap-5">
      <div class="quemsomos-image-container rounded col-12 col-md">
        <img src="<?php echo  get_template_directory_uri() ?>/img/placeholder.jpg" alt="Quem somos imagem">
      </div>
      <div class="quemsomos-text-content col-12 col-md-7">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua</p>
        <p class="mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.</p>
        <p class="mt-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur.</p>
        <p class="mt-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</section>


<?php endwhile; else: endif; ?>

<?php get_footer(); ?>