<!DOCTYPE html>

<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?></title>

  <!-- TWITTER -->
<!--   <meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@flickr" />
<meta name="twitter:title" content="Small Island Developing States Photo Submission" />
<meta name="twitter:description" content="View the album on Flickr." />
<meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg" /> -->

<!-- FACEBOOK -->
<!-- <meta property="og:site_name" content="David Walsh Blog"/>
<meta property="og:title" content="Facebook Open Graph META Tags"/>
<meta property="og:url" content="https://davidwalsh.name/facebook-meta-tags"/>
<meta property="og:type" content="blog"/> -->

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cherry+Cream+Soda|Russo+One" rel="stylesheet">

  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- BOOTSTRAP -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

<?php wp_head();?>
</head>
<body <?php body_class();?>>

<div class="container-fluid">

  <header id="header" class="site-header">

<div class="nav-wrapper">


  <nav class="site-nav">
<?php wp_nav_menu($args);?>
    </nav>
</div>




</div>
<div class="center">

    <h1 class="site-name text-shadow"><a href="<?php echo home_url();?>"><?php bloginfo('name');
?></a></h1>



<!-- <img class="stemLogo" src="/wordpress/wp-content/uploads/2017/03/stemLogo.png" alt=""> -->

    <h5 class="site-description"><?php bloginfo('description');?></h5>

</div>


<?php
$args = array(
	'theme_development' => 'primary',
);
?>


  </header><!-- /header -->