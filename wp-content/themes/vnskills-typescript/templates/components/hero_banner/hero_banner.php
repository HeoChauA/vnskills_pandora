<?php
if ($args[0]['banner_items']): ?>
  <div class="hero-banner-wrap">
    <?php
    foreach ($args[0]['banner_items'] as $item) : ?>
    <div class="hero-banner-item">
      <img src="<?php print($item['banner_image']['url']); ?>" alt="<?php print($item['banner_image']['title']); ?>">
      <h2 class="hero-banner-title"><?php print($item['banner_title']); ?></h2>
    </div>
    <?php endforeach; ?>
  </div>
<?php endif;
