<form action="/" method="get" class="form search-form">
    <div class="form-group">
        <label for="search">Search</label>
        <div class="searchimg">
            <input class="form-control" placeholder="search this site" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
            <button type="submit" value="Search" class="" type="button"><i class="material-icons" aria-hidden="true">search</i></button>
        </div>
    </div>
</form>