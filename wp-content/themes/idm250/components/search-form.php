<?php
// don't use get_search_form();
?>
<form class="search-form" action="<?php echo home_url(); ?>" 
  method="get">
  <input type="text" name="s" value="">
  <input type="hidden" name="post_type[]" value="idm-projects">
  <button>Search</button>
</form>