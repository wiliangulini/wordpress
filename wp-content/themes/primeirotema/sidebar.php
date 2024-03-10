<sidebar>
  <?php
  if (is_active_sidebar('wg_sidebar')) {
    get_search_form();
    dynamic_sidebar('wg_sidebar');

  }
  ?>
</sidebar>