<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	 <title><?php wp_title('|',1,'right'); ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	  <!-- Le styles -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	  <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
	
	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.31942.js" type="text/javascript" charset="utf-8"></script>
	


	<?php wp_enqueue_script("jquery"); ?>

	<?php wp_head(); ?>
	
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js?1"></script>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27114536-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	</head>

	 <body>

	   <div class="container">
				<div class="masthead">
					<h1><a class="brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
					

	
					<div class="navbar">
			      <div class="navbar-inner row-fluid">
			        <div class="span10 offset1">
			          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
									<span class="button-text">Menu</span>
			          </button>
			          <div class="nav-collapse collapse">			           
										<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav') ); ?>    	
			          </div><!--/.nav-collapse -->
			        </div>
			      </div>
			    </div>
				</div> <!--/.masthead -->
