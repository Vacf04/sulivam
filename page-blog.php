<?php
// Template Name: Blog
get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<main>
  <section class="blog-page-section section-padding">
    <h1 class="font-36 text-center mb-4">Blog</h1>
    <form method="GET" action="" class="d-flex justify-content-center align-items-center">
      <input type="text" name="search" id="search" placeholder="Digite aqui sua busca..." value="<?php echo isset($_GET["search"])
            ? esc_attr($_GET["search"])
            : ""; ?>">
      <button class="btn h-100"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
          width="24px" fill="#333">
          <path
            d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
        </svg></button>
    </form>
    <div class="container">
      <div class="blog-page-grid">
        <div class="row">
          <?php
          $paged = get_query_var("paged") ? get_query_var("paged") : 1;

          $search = isset($_GET["search"])
              ? sanitize_text_field($_GET["search"])
              : "";
          $categorie_slug = isset($_GET["category"])
              ? sanitize_text_field($_GET["category"])
              : "";

          $queryRecentPosts = new WP_Query([
              "post_type" => "post",
              "posts_per_page" => 12,
              "order" => "DESC",
              "orderby" => "date",
              "paged" => $paged,
              "s" => $search,
              "category_name" => $categorie_slug,
          ]);
          ?>
          <?php if ($queryRecentPosts->have_posts()):
              while ($queryRecentPosts->have_posts()):
                  $queryRecentPosts->the_post(); ?>
          <article class="col-12 <?php if ($queryRecentPosts->post_count < 4) {
                echo "col-md";
            } else {
                echo "col-md-3";
            } ?> text-center post-card mb-5">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()): ?>
              <div class="image-post-container-card">
                <?php the_post_thumbnail("medium_large"); ?>
                <div class="category font-14"><?php
                $categories = get_the_category();
                echo esc_html($categories[0]->name);
                ?></div>
              </div>
            </a>
            <?php endif; ?>
            <p class="fw-bold font-14 mb-0"><?php echo get_the_date(
                "d/m/Y"
            ); ?></p>
            <h3 class="font-16 mt-1 mb-1 title"><?php the_title(); ?></h3>
            <p class="font-14 fw-medium mb-2"><?php the_author(); ?></p>
            <p class="text-start font-14 description mb-2"><?php echo wp_trim_words(
                get_the_excerpt(),
                15,
                "..."
            ); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="d-flex align-items-center  justify-content-center"><svg
                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#333">
                <path
                  d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
              </svg>Saiba mais</a>
          </article>

          <?php
              endwhile;
          else:
               ?>
          <h2>Nenhum post encontrado para a busca "<?php echo esc_html(
              $search
          ); ?>".</h2>
          <?php
          endif; ?>

          <?php wp_reset_postdata(); ?>
        </div>
        <aside>
          <?php $mainCategories = get_categories([
              "orderby" => "name",
              "order" => "ASC",
              "hide_empty" => 1,
              "parent" => 0,
          ]); ?>
          <?php foreach ($mainCategories as $categorie) {
              echo '<h4 class="font-16">' .
                  esc_html($categorie->name) .
                  "</h4>";
              $childrenCategories = get_categories([
                  "parent" => $categorie->term_id,
                  "hide_empty" => 0,
              ]);
              foreach ($childrenCategories as $childrenCategorie) {
                  $base_url = get_permalink();
                  $filter_link = add_query_arg(
                      "category",
                      $childrenCategorie->slug,
                      $base_url
                  );
                  echo '<a href="' .
                      $filter_link .
                      '" class="font-14">' .
                      esc_html($childrenCategorie->name) .
                      "</a>";
              }
          } ?>
        </aside>
      </div>
      <?php
      $total_pages = $queryRecentPosts->max_num_pages;
      if ($total_pages > 1) { ?>
      <div class="pagination">
        <?php if ($paged > 1) {
            echo '<a href="' . get_pagenum_link(1) . '">Primeiro</a>';
        } ?>
        <?php echo paginate_links([
            "total" => $total_pages,
            "current" => $paged,
            "prev_text" => "Anterior",
            "next_text" => "Próximo",
        ]); ?>

        <?php if ($paged < $total_pages) {
            echo '<a href="' . get_pagenum_link($total_pages) . '">Último</a>';
        } ?>

        <?php }
      ?>
      </div>
    </div>
  </section>
</main>

<?php
    endwhile;
else:
endif; ?>

<?php get_footer(); ?>