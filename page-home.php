<?php
// Template Name: Home
get_header(); ?>

<main>
  <section class="section-padding carousel-section">
    <div id="mainCarousel" class="carousel slide pb-3 px-4" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Primeiro Slide">
        </div>

        <div class="carousel-item rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Segundo Slide">
        </div>

        <div class="carousel-item rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Terceiro Slide">
        </div>

        <div class="carousel-item rounded">
          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Quarto Slide">
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

  <section id="quemsomos" class="section-padding">
    <div class="container">
      <h1 class="font-36 mb-5">Quem somos</h1>
      <div class="quemsomos-content row gap-5">
        <div class="quemsomos-image-container rounded col-12 col-md">
          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" alt="Quem somos imagem">
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

  <section class="blog-section" class="section-padding">
    <div class="container">
      <header class="d-flex justify-content-between mb-5">
        <h2 class="font-36">Blog</h2>
        <a href="/blog" class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#333">
            <path
              d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
          </svg>Ver mais</a>
      </header>
      <div class="row gap-5">
        <?php $queryRecentPosts = new WP_Query([
            "post_type" => "post",
            "posts_per_page" => 4,
            "order" => "DESC",
            "orderby" => "date",
        ]); ?>
        <?php if ($queryRecentPosts->have_posts()):
            while ($queryRecentPosts->have_posts()):
                $queryRecentPosts->the_post(); ?>

        <article class="col-12 col-md text-center post-card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
            <div class="image-post-container-card">
              <?php the_post_thumbnail("medium_large"); ?>
              <div class="category font-14"><?php
              $categories = get_the_category();
              echo $categories[0]->name;
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
        endif; 
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <section id="faq" class="section-padding">
    <div class="container">
      <h2 class="font-36 mb-5">Dúvidas frequentes - FAQ</h2>
      <ul>
        <li class="pergunta mb-1 rounded p-1 d-flex align-items-center justify-content-between  active fw-bold">Lorem
          ipsum dolor
          sit
          amet, consectetur adipisicing elit? <svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta active">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim
          veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1 mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">Duis
          aute irure dolor in reprehenderit in voluptate velit esse
          cillum
          dolore
          eu fugiat
          nulla
          pariatur. Excepteur sint occaecat cupidatat non? <svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit? <svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">Duis
          aute irure dolor in reprehenderit in voluptate velit esse
          cillum
          dolore
          eu fugiat
          nulla
          pariatur. Excepteur sint occaecat cupidatat non? <svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit? <svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">Duis
          aute irure dolor in reprehenderit in voluptate velit esse
          cillum
          dolore
          eu fugiat
          nulla
          pariatur. Excepteur sint occaecat cupidatat non? <svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit? <svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">Duis
          aute irure dolor in reprehenderit in voluptate velit esse
          cillum
          dolore
          eu fugiat
          nulla
          pariatur. Excepteur sint occaecat cupidatat non? <svg xmlns="http://www.w3.org/2000/svg" height="24px"
            viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
        <li class="pergunta mb-1  mt-3 rounded p-1 d-flex align-items-center justify-content-between fw-bold">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit? <svg xmlns="http://www.w3.org/2000/svg"
            height="24px" viewBox="0 -960 960 960" width="24px" fill="#333">
            <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
          </svg></li>
        <li class="resposta">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco.</li>
      </ul>
    </div>
  </section>

  <section id="contato" class="section-padding">
    <div class="container">
      <div class="row gap-5">
        <form class="form-contact col-12 col-md">

          <h2 class="font-36 mb-5">
            Contato
          </h2>
          <div class="form-contact-info d-flex gap-2 w-100 mb-4 flex-column flex-md-row">
            <div class="form-row w-100">
              <label for="name" class="d-block mb-1">Nome</label>
              <input type="text" name="name" id="name" class="w-100">
            </div>
            <div class="form-row w-100">
              <label for="email" class="d-block mb-1">E-mail</label>
              <input type="email" name="email" id="email" class="w-100">
            </div>
            <div class="form-row w-100">
              <label for="phone" class="d-block mb-1">Telefone</label>
              <input type="text" name="phone" id="phone" class="w-100">
            </div>
          </div>
          <div class="form-row mb-4">
            <label for="assunto" class="d-block mb-1">Assunto</label>
            <input type="text" name="assunto" id="assunto" class="w-100">
          </div>
          <div class="form-row mb-4">
            <label for="message" class="d-block mb-1">Mensagem</label>
            <textarea name="message" id="message" class="w-100"></textarea>
          </div>
          <button class="btn fw-bold" type="submit">Enviar</button>
        </form>
        <div class="contact-infos col-12 col-md-3">
          <h3 class="font-18 mb-3">Nossos canais diretos</h3>
          <ul class="mb-5">
            <li class="d-flex align-items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#333">
                <path
                  d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z" />
              </svg>(31) 99988-7766</li>
            <li class="d-flex align-items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 -960 960 960" width="24px" fill="#333">
                <path
                  d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-287q5 0 10.5-1.5T501-453l283-177q8-5 12-12.5t4-16.5q0-20-17-30t-35 1L480-520 212-688q-18-11-35-.5T160-659q0 10 4 17.5t12 11.5l283 177q5 3 10.5 4.5T480-447Z" />
              </svg>contato@empresa.com</li>
          </ul>
          <h3 class="font-18 ms-0 ms-md-2 mb-3">Horários de atendimento</h3>
          <p class="ms-0 ms-md-2 mb-5">De segunda a sexta-feira, das: 9h
            às 17h</p>
          <h3 class="font-18 ms-0 ms-md-2 mb-3">Endereço</h3>
          <p class="ms-0 ms-md-2">Rua São Paulo, 818 - Belo Horizonte,
            MG - CEP: 30.170-131</p>
          <div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0"
              marginwidth="0"
              src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=R.%20S%C3%A3o%20Paulo,%20818%20-%20Sala%201104%20-%20Centro,%20Belo%20Horizonte%20-%20MG,%2030170-131+(Sulivam)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                href="https://www.mapsdirections.info/de/evolkerung-auf-einer-karte-berechnen/">Kartentool
                Bevölkerung</a></iframe></div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>