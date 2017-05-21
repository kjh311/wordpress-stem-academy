<?php

get_header();

$artsPosts = new WP_Query('cat=12');

if ($artsPosts->have_posts()):
while ($artsPosts->have_posts()):$artsPosts->the_post();?>

<article class="post">
  <h2 class="text-shadow"><a href="<?php the_permalink();?>"><?php the_title();
?></a></h2>

<p class="post-info"><?php the_time('F jS, Y');
?> | by: <?php the_author();
?>| Posted in

<?php

$categories = get_the_category();
$seperator  = ", ";
$output     = '';

if ($categories) {
	foreach ($categories as $category) {
		$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$seperator;
	}
	echo trim($output, $seperator);
}

?> | <?php comments_number('no Comments', '1 Comment', '% Comments');?>
</p>


<span class="small-thumb">
<a href="<?php the_permalink();?>"><?php the_post_thumbnail('small-thumbnail');
?></a>
</span>
<div class="content">
<?php the_excerpt();?>
</div>

<p><a class="read-more" href="<?php the_permalink();?>">Read more &raquo;
</a></p>

</article>

<?php endwhile;

 else :
echo '<p>No content Found!</p>';

endif;

get_footer();

?>



