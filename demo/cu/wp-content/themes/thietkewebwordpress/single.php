<?php get_header(); $format = get_post_format();?>
<?php $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "ids"));;$a=$post->ID; ?>
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
				<?php if($format!='aside'){ ?>
			<div class="sidebar col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<?php } ?>
			
			<div class="content col-md-9">
				<div class="all-box"><?php wp_reset_query();?>
				<div class="entry">
					<?php 
						while(have_posts()):the_post();setPostViews($post->ID);
					?>
					<h1 class="entry-title rs post-title"><?php the_title(); ?></h1>
					<div class="all-box box-single">
			<div class="post-cat-show"><?php the_category(' ' ); ?></div>
					<div class="content-post">
					<?php the_content(); ?></div>
					
				
					<div class="comment-fa">
						<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=500991956775798";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%"data-numposts="5"></div>
					</div>
					<?php endwhile; ?>
</div>

					
					<div class="box-single">
					<div class="tags clearfix">
						<?php the_tags('<span><i class="fa fa-tags" aria-hidden="true"></i> Tags: </span>',' '); ?>
					</div>
					<hr>
					<div class="lq-post">
					
					<div class="bvlq clearfix">
						
				
						<?php 
							$bvlq= new WP_Query(array('showposts'=>1,'category__in'=>$term_list,'post__not_in'=>array($a))); while($bvlq->have_posts()) :$bvlq->the_post();
						?>
								<ul>
									<li class="post-title rs">Bài viết có liên quan: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
</ul>

						<?php endwhile; ?>

						
					</div>
				</div>
			</div>
				</div></div>
				
			</div>	
				</div>
		</div> </div>
	
<?php get_footer(); ?> 