<form role="search" class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" name='s' placeholder="Search" value="<?php echo get_search_query(); ?>">
    <button class="widget-btn" type="submit"> <i class="bi bi-search"></i>
    </button>
</form>