<?php get_header(); $a=get_query_var('cat' );?>

	<div id="maincontent">
<div class="title-box">
	<div class="container">
		<div class="breadcrumb" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
	</div>
</div>
		<div class="container clearfix">
		<div class="box-content">
			
			<div class="row">
				
					<div class="sidebar col-md-3">
						<?php get_sidebar(); ?>
					</div>
				
			<div class="content col-md-9 <?php if(get_field('loai','category_'.$a)!=2){ echo 'content-cat';}?>">
				<div class="all-box">
					
				
				
							
							
			<h1 class="entry-title rs cat-title" hidden><span><?php echo single_cat_title();?></span></h1>
							<div class="sum-archive ">
								<?php 
									if(have_posts()){
									while(have_posts()):the_post();
								?>
								<div class="archive-child clearfix">
									<ul>
										<li class="post-title rs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<li class="post-cat-show"><?php the_category(' ' ); ?></li>
										<li class="post-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></li>
										<li class="archive4"><?php the_excerpt(); ?></li>
										
									</ul>
									
								</div>
								<?php endwhile;wp_reset_postdata();wp_pagenavi(); ?>
								<?php }else{
									echo "Không có bài viết nào cả !";
								} ?>
							</div>
						
					</div>		
			</div></div>
		</div>
		</div>
	</div><!-- end #maincontent-->		
<?php get_footer(); ?>		