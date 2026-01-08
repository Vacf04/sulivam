<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<main class="pt-5 pb-5 post-main">
  <div class="container">
    <article>
      <header>
        <h1 class="font-36 mb-4"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()): ?>
        <div class="image-post-container">
          <?php the_post_thumbnail("large"); ?>
        </div>
        <?php endif; ?>
        <div>
          <p class="mt-2 mb-0 fw-bold"><?php echo get_the_date("d/m/Y"); ?></p>
          <p class="mb-1 fw-medium"><?php the_author(); ?></p>
          <?php the_category(); ?>
        </div>
      </header>

      <div>
        <?php the_content(); ?>
      </div>
    </article>
  </div>
</main>

<?php endwhile; else: ?>

<section class="not-found-section">
  <div class="container">
    <h1>Página não encontrada.</h1>
  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>