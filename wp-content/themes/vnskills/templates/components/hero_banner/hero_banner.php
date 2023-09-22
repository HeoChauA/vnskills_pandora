<?php if ($args['banner_items']) : ?>
  <div class="hero-banner-wrap">
    <div class="hero-banner hero-banner-inner banner-carousel banner-slider">
    <?php
    foreach ($args['banner_items'] as $item) : 
      $image = '<img src="' . $item['banner_image']['url'] . '" alt="' . $item['banner_image']['title'] . '" />';
    ?>
      <div class="banner-item slide-item">
        <?php if ($item['banner_link']) : ?>
        <a href="<?php print($item['banner_link']['url']); ?>" target="<?php $item['banner_link']['target'] ? print($item['banner_link']['target']) : null ?>"><?php print($image); ?></a>
        <?php else: ?>
        <?php print($image); ?>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
<?php endif;
