<?php $url = home_url(); ?>
<form class="searchForm" action="<?php echo $url ?>" method="get">
	<input class="searchInput" type="search" value="" name="s" id="s" />
	<button class="searchBtn" type="submit">
		<figure class="icon"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/search.svg')); ?>" width="32" height="32" alt="検索マーク" /></figure>
	</button>
</form>