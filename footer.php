<div class="row">


<footer class="site-footer col-xs-12">

  <nav class="site-nav">
<?php
$args = array(
	'theme_development' => 'footer',
);
?>
    </nav>


  <p><?php bloginfo('name');
?>- &copy;
<?php echo date('Y');
?></p>
<br />
<!-- <br /> -->
  </footer>
  </div>

</div><!--container -->

<?php wp_footer();?>
</body>
</html>
