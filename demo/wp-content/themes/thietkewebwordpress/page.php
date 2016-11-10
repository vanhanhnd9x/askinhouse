<?php get_header(); ?>
	<div id="maincontent">	<div class="title-box">
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
				<?php dynamic_sidebar('sidebar' ); ?>
			</div>
			<div class="content col-md-9 page-content" >
				<div class="all-box">
				
				<div class="entry">
					<?php 
						while(have_posts()):the_post();
					?>
					
<h1 class="entry-title title-page"><?php the_title(); ?></h1>
					<div class="content-post box-single">
					
<?php the_content(); ?>
<?php if(is_page(9)){ ?>
				<div class="map">
	<div id="map"></div>
    <script>
   function initMap() {
  var uluru = {lat: 20.986082, lng: 105.782979};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });

  var contentString = '<div id="content">'+
      '<div><h2>Công Ty Cổ Phần Kiến Trúc &amp; Xây Dựng Gia Bảo</h2><p>Văn phòng: số 7, LK 6A, KĐT Mỗ Lao, Hà Đông, Hà Nội</p><p>Showroom Nội thất: số 7, LK 6A, KĐT Mỗ Lao, Hà Đông, Hà Nội</p><p>Trụ Sở:Tầng 5 - Tòa nhà H10 - Ngõ 475 Nguyễn Trãi - Thanh Xuân - Hà Nội</p><p>Điện thoại: 0984. 569. 381 --- 094.866.1283</p><p>Email: kientrucgiabao@gmail.com</p></div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Uluru (Ayers Rock)'
  });
 
    infowindow.open(map, marker);
 
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
</div>
<?php } ?>
</div>
					
				</div></div>
			</div></div></div>
		</div>	


		<?php endwhile; ?>
	</div><!--end maincontent-->
 
    
<?php get_footer(); ?> 