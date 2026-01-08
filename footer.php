<footer class="footer mt-5">
  <div class="container d-flex justify-content-between align-items-center p-3 flex-column flex-md-row gap-4">
    <a href="/" class="d-block"><img src="<?php echo get_template_directory_uri(); ?>/img/sulivam.svg"
        alt="Sulivam" /></a>
    <div class="menus d-flex align-items-start align-items-md-center gap-4 flex-column flex-md-row gap-4">
      <?php
      $args = [
          "menu" => "Header",
          "theme_location" => "menu-principal",
          "container" => false,
      ];
      wp_nav_menu($args);
      ?>
      <?php
      $args = [
          "menu" => "Footer",
          "theme_location" => "menu-principal",
          "container" => false,
      ];
      wp_nav_menu($args);
      ?>
    </div>
    <ul>
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
  </div>
  <p class="w-100 text-center direitos p-1">© 2026 Todos os direitos reservados</p>
</footer>

<?php wp_footer(); ?>
</body>

</html>