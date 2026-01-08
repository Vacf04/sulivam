<?php
// Template Name: Termos de Uso
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main>
  <section class="pt-5 pb-5">
    <div class="container">
      <h1 class="font-36 text-center mb-3"><?php the_title() ?></h1>
      <div class="mt-5"><?php the_content() ?></div>
    </div>
  </section>
</main>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>