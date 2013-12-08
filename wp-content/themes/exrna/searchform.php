<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>

<form method="get" action="http://localhost:8888/exrnawp/search/">
<label>
    <input type="text" class="search-field" id="q" name="q" value="<?php the_search_query(); ?>">
</label>
    <input type="submit" class="btn btn-default" value="Search">

</form>