<footer class="footer-wrap">
  <?php
    $footer_options = get_field('footer_options', 'option');
    print('<pre>');
    print_r($footer_options);
    print('</pre>');
  ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>