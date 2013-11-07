<aside class="archive">
<h2>Blog Archive</h2>
<ul>
<?php 
wp_get_archives(array( 'type' => 'postbypost', 'format' => 'custom', 'before' => '<li><span>', 'after' => '</span></li>')); 
?> 
</ul>

</aside>