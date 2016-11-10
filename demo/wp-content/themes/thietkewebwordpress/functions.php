<?php add_theme_support( 'post-formats', array( 'aside' ,'chat') );add_filter('widget_text','do_shortcode');
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Quản Lý Trang',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));


	
}

class Home_style222 extends WP_Widget {
	function Home_style222(){
		parent::WP_Widget('Home_style222',
				'Tin tức Home  2',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );

		echo $before_widget;
	?><div class="home-box2">
					<div class="home-new-left home-new-2">
						<h3><a href="<?php echo get_category_link($sp ); ?>"><?php echo get_cat_name($sp ); ?></a></h3>
						<div class="list-post-box-no clearfix">
							
							<?php $new=new WP_Query('showposts=4&cat='.$sp);while($new->have_posts()) : $new->the_post();  ?>
							<div class="new-home-show-2">
								<ul class="post-home-2 clearfix">
									
									<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium' ); ?></a></li>
									<li class="rs title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									
								</ul></div>
							<?php endwhile; ?></div>
							
						</ul>
					</div> </div> 
					<!-- End -->

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
				<select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
					<?php $args = array(
							  'orderby' => 'name','hide_empty'=>0,
							  'order' => 'ASC'
							  );$categories=get_categories( $args ); foreach($categories as $category) {?>
							  <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
							  
							  <?php } ?>
				</select>
				
		</p>
		
		
<?php
	}
}
    register_widget('Home_style222');
class Home_style extends WP_Widget {
	function Home_style(){
		parent::WP_Widget('Home_style',
				'Tin tức Home',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );
		echo $before_widget;
	?><div class="home-box2">
					<div class="home-new-left">
						<h3><a href="<?php echo get_category_link($sp ); ?>"><?php echo get_cat_name($sp ); ?></a></h3>
						<div class="list-post-box-no pad5 clearfix">
							
							<?php $new=new WP_Query('showposts=3&cat='.$sp);while($new->have_posts()) : $new->the_post();  ?>
							<div class="new-home-show col-md-4">
								<ul class="post-home  clearfix">
									
									<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium' ); ?></a></li>
									<li class="rs title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<li><?php the_excerpt(); ?></li>
									
								</ul></div>
							<?php endwhile; ?></div>
							
					</div> </div> 
					<!-- End -->

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
				<select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
					<?php $args = array(
							  'orderby' => 'name','hide_empty'=>0,
							  'order' => 'ASC'
							  );$categories=get_categories( $args ); foreach($categories as $category) {?>
							  <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
							  
							  <?php } ?>
				</select>
				
		</p>
		
		
<?php
	}
}
    register_widget('Home_style');
class Home_style_2 extends WP_Widget {
	function Home_style_2(){
		parent::WP_Widget('Home_style_2',
				'Dự án Home',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );

		echo $before_widget;
	?><div class="home-box2">
					<div class="home-box2-left">
						<h4 class="tttps">
								<a href="<?php echo get_category_link($sp ); ?>"><?php echo get_cat_name($sp ); ?></a>
							</h4>
						<div class="box-bg-home">
						<div class="sum-archive row pad5 clearfix">
							<?php $new=new WP_Query('showposts=8&cat='.$sp);while($new->have_posts()) : $new->the_post();  ?>
							<div class="list-sp col-md-3 clearfix">
									<ul>
										<li class="post-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a><figcaption><?php the_field('mo_ta'); ?></figcaption></li>
										<li class="post-title rs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										
									</ul>
								
								</div>
							<?php endwhile; ?></div>
						</div>
					</div></div> 
					<!-- End -->

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
				<select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
					<?php $args = array(
							  'orderby' => 'name','hide_empty'=>0,
							  'order' => 'ASC'
							  );$categories=get_categories( $args ); foreach($categories as $category) {?>
							  <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
							  
							  <?php } ?>
				</select>
				
		</p>
		
		
<?php
	}
}
    register_widget('Home_style_2');
class Home_style_1 extends WP_Widget {
	function Home_style_1(){
		parent::WP_Widget('Home_style_1',
				'Tin tức Sidebar',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );

		echo $before_widget;
	?><div class="all-kh">
				<div class="cat-title-sidebar">
										<a href="<?php echo get_category_link($sp )?>"><?php echo get_cat_name($sp);?></a>
									</div>
							<div class="row-fluid list-sp-sidebar">
								<ul class="list-s-post clearfix">
								<?php $new=new WP_Query('showposts=6&cat='.$sp);$x=0;while($new->have_posts()) : $new->the_post();$x++;?>
										<li class="lq-new">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</li>
									 	
									
							<?php   endwhile;?>		</ul>
							</div>
							
			</div>	

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('sp'); ?>" name="<?php echo $this->get_field_name('sp'); ?>" value="<?php echo $sp;?>" />
	<ul><?php
$args = array(
  'orderby' => 'name',
  'hide_empty' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
	echo '<li>'.$category->name . ' - '.$category->term_id .'</li>';
}
?></ul>
		</p>
<?php
	}
}
    register_widget('Home_style_1');
	add_theme_support('post-thumbnails');
	register_nav_menu( 'main', 'Main Menu' );
	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
register_sidebar( array(
		'name'          => __( 'Home 1', 'theme_text_domain' ),
		'id'            => 'home-1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix"><div class="padd-1">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
register_sidebar( array(
	'name'          => __( 'Home Ebook', 'theme_text_domain' ),
	'id'            => 'home-ebook',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<div id="%1s" class="widget %2s clearfix"><div class="padd-1">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h4 class="widgettitle"><span>',
	'after_title'   => '</span></h4>'
) );
register_sidebar( array(
		'name'          => __( 'Home 2', 'theme_text_domain' ),
		'id'            => 'home-2',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix"><div class="padd-1">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
register_sidebar( array(
		'name'          => __( 'Home 3', 'theme_text_domain' ),
		'id'            => 'home-3',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
register_sidebar( array(
		'name'          => __( 'Home 4', 'theme_text_domain' ),
		'id'            => 'home-4',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
register_sidebar( array(
	'name'          => __( 'Home Cam Kết', 'theme_text_domain' ),
	'id'            => 'home-camket',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<div id="%1s" class="widget %2s clearfix"><div class="padd-1">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h4 class="widgettitle"><span>',
	'after_title'   => '</span></h4>'
) );
register_sidebar( array(
		'name'          => __( 'Home 5', 'theme_text_domain' ),
		'id'            => 'home-5',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
register_sidebar( array(
		'name'          => __( 'Head', 'theme_text_domain' ),
		'id'            => 'head',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix col-md-6">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
register_sidebar( array(
		'name'          => __( 'Home Sidebar', 'theme_text_domain' ),
		'id'            => 'home-sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle"><span>',
		'after_title'   => '</span></h4>'
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'theme_text_domain' ),
		'id'            => 'sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle-all ttl-sidebarchildx">',
		'after_title'   => '</h4>'
	) );

register_sidebar( array(
		'name'          => __( 'Footer Top', 'theme_text_domain' ),
		'id'            => 'f-t',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s col-md-3 ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="ttl-footer"><span>',
		'after_title'   => '</span></h4><div class="line-gray"></div>'
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'theme_text_domain' ),
		'id'            => 'footer1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="ttl-footer"><span>',
		'after_title'   => '</span></h4><div class="line-gray"></div>'
	) );
function remove_default_widgets() {
     unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
 }
 add_action('widgets_init', 'remove_default_widgets', 11);	
function getPostViews($postID){ // hàm này dùng để lấy số người đã xem qua bài viết
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){ // Nếu như lượt xem không có
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0"; // giá trị trả về bằng 0
    }
    return $count; // Trả về giá trị lượt xem
}
function setPostViews($postID) {// hàm này dùng để set và update số lượt người xem bài viết.
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++; // cộng đồn view
        update_post_meta($postID, $count_key, $count); // update count
    }
}


		
?>