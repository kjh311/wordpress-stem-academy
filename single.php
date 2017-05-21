<?php

get_header();

// $sportsPosts = new WP_Query('cat=11');

if (have_posts()):
while (have_posts()):the_post();?>
<article class="post single-post">


<div class="center">

  <h1 class="post-title"><?php the_title();
?>
<br />
  <span class="author-single">Posted by:
<?php the_author();
?></span>


</h1>


<div class="banner-image">

<?php the_post_thumbnail('banner-image');?>
</div>
</div>
<hr>


<p class="single-content">
<?php the_content();?>
</p>

<!-- <h1 class="center">
<a class="homelink" href="/wordpress/" title="HOME">&#171; HOME</a></h1> -->
<!-- <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]');?>-->
</article>


<div class="comments">
<?php comments_template();?>
</div>

<br />

<?php endwhile;

 else :
echo '<p>No content Found!</p>';

endif;

get_footer();

?>

