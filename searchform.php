<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="searchform">
	
		<input type="text" id="searchform" class="search__input" placeholder="Wyszukaj &hellip;" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search__submit" value="Wyszukaj" />
</form>


