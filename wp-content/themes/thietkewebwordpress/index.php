<?php get_header(); ?>
	<div class="home-page">
		<div class="container">
			<div class="slider">
				<?php 
    echo do_shortcode("[metaslider id=25]"); 
?>
			</div>
		</div>
		<div class="home-1 container">
			<?php dynamic_sidebar('home-1' ); ?>
		</div>
		<div class="home-ebook clearfix">
			<div class="container">
				<?php dynamic_sidebar('home-ebook' ); ?>
			</div>
		</div>
		<div class="home-2 clearfix">
			<div class="container">
				<?php dynamic_sidebar('home-2' ); ?>
			</div>
		</div>
		<div class="home-3 clearfix">
			<div class="container">
				<?php dynamic_sidebar('home-3' ); ?>
			</div>
		</div>
		<div class="home-3  home-4 clearfix">
			<div class="container">
				<?php dynamic_sidebar('home-4' ); ?>
			</div>
		</div>
		<div class="home-camket clearfix">
			<div class="container">
				<?php dynamic_sidebar('home-camket' ); ?>
			</div>
		</div>
		<div class="home-5 clearfix">
			<div class="container">
				<?php dynamic_sidebar('home-5' ); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?> 