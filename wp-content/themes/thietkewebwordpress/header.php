<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(' '); ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightbox.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500italic,500,700,700italic,900italic,900&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
		<?php if(get_option('origin-favicon')){ ?>
			<link rel="shortcut icon" href="<?php echo get_option('origin-favicon');?>" type="image/x-icon"> 
	<?php }?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83355017-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class($class); ?>>
	<div id="containerper">
		<div class="head-top">
			<div class="container">
				<div class="head-text col-sm-4">
					CHẮP CÁNH TƯƠNG LAI VIỆT!
				</div>
				<div class="fb-like col-sm-2" data-href="https://www.facebook.com/vietfuture1/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				<ul class="col-sm-6">
					<li><a href="#">Email: vietfuture11@gmail.com</a></li>
					<li><a href="#">046.687.0033</a></li>
					<li><a href="#"> 0919.13.03.19</a></li>
                    
			</ul>
			</div>
		</div>
		<div id="header">
				<div class="head  <?php if(is_home()){echo 'home-head';}?> clearfix">	<div class="container clearfix">
			<div class="row">
			<div class="logo col-md-1">
				<a href="<?php bloginfo('home');?>" title="<?php bloginfo('title'); ?>">

						<img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php bloginfo('title');?>"/>
					
				</a>
			</div>
			<div class="col-md-11 clearfix">
				
			<div class="menu-main clearfix">
				<div class="mobile-menu "><a href="#"><i class="fa fa-bars"></i> Danh mục</a></div>
			<?php wp_nav_menu(array('theme_location' => 'main','menu_class' => 'menu')); ?></div>
			</div></div>
		</div>
		
			</div>
		</div><!--end #header-->
		
		

<?php if(!is_home()){ ?>

<?php }else{ ?>
<div class="slider-home">
	<div class="container">
	<?php 
    echo do_shortcode("[metaslider id=60]"); 
?></div>
</div>
<?php } ?>