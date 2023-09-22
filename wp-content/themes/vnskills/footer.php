<footer class="footer-wrap">
  <?php
    $footer_options = get_field('footer_options', 'option');
    $footer_bottom_options = get_field('footer_bottom', 'option');
    
    $footer_first = $footer_options['footer_first'];
    $footer_seccond = $footer_options['footer_seccond'];
    $footer_third = $footer_options['footer_third'];
    $footer_subscriber = $footer_options['footer_subscriber'];
  ?>

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col footer-first footer-logo-social">
          <div class="footer-logo">
            <a href="<?php print(get_home_url()); ?>" class="footer-logo-link">
              <img src="<?php print($footer_first['footer_logo']['url']) ?>" alt="<?php print($footer_first['footer_logo']['title']) ?>">
            </a>
          </div>
          <div class="footer-social">
            <ul class="socials-list">
              <?php foreach($footer_first['footer_socials'] as $social): ?>
              <li class="social-item">
                <a href="<?php print($social['social_link']['url']); ?>" <?php if ($social['social_link']['target']):?>target="_blank"<?php endif; ?>>
                  <?php print($social['social_icon']); ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="col footer-seccond footer-categories footer-menu">
          <h2 class="footer-title"><?php print($footer_seccond['footer_title']); ?></h2>
          <ul class="footer-menu-nav">
            <?php foreach($footer_seccond['post_category'] as $term): ?>
            <li class="footer-menu-item">
              <a href="<?php print(get_term_link($term->term_id, $term->taxonomy)); ?>"><?php print($term->name); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col footer-third footer-quicklinks footer-menu">
          <h2 class="footer-title"><?php print($footer_third['footer_title']); ?></h2>
          <ul class="footer-menu-nav">
            <?php foreach($footer_third['page_links'] as $post): ?>
            <li class="footer-menu-item">
              <a href="<?php print(get_permalink($post->ID)); ?>"><?php print($post->post_title); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col footer-four footer-subcriber">
          <?php print(do_shortcode('[mc4wp_form id='. $footer_subscriber .']')); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-8 footer-copyright"><?php print(esc_html($footer_bottom_options['footer_copyright'])); ?></div>
        <div class="col-4 footer-payments">
          <ul class="footer-payment-list">
            <?php foreach($footer_bottom_options['footer_payments'] as $item): ?>
            <li class="footer-payment-item">
              <img src="<?php print($item['url']); ?>" alt="<?php print($item['title']); ?>">
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>