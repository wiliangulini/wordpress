<form class="searchForm" method="GET" action="<?php echo get_site_url(); ?>">
  <input type="text" name="s" placeholder="Digite algum termo" value="<?php the_search_query(); ?>" />
  <input type="submit" id="submitSearch" value="" />
</form>