
	<div id="footer" class="clear">
	
		<div class="t-footer"><div class="container clearfix">
				<div class="row clearfix">
					<?php dynamic_sidebar('f-t'); ?>
				</div>
			</div>
			
		</div><!-- end footer-->
		<div class="top-footer"><div class="container clearfix">
				<div class=" clearfix">
					<?php dynamic_sidebar('footer1'); ?>
				</div>
			</div>
			
		</div><!-- end footer-->
			
</div><!--end #containerper-->
<div id="top"></div>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/lightbox.js"></script>

<script type="text/javascript">
(function($){
	
           $('#top').click(function() {

            $('html, body').animate({scrollTop:0},500);

           });

	var name = $('.tt-sp h1').text();
	$('.text-773 input').val(name);
	$('input , textarea').addClass('form-control');
$('.gallery-item img').parent().attr('data-lightbox','example-set');

	$('.mobile-menu a').click(function() {
						$('.menu-main .menu').slideToggle('active');
						return false;
					});

	$('.listx-danhgia').owlCarousel({items:3 ,navigation :false,autoPlay:2000});
	
$('.close, .close-bg').click(function(event) {
	        event.preventDefault();
	        $(this).parents('.close-wrap').fadeOut();
	        return false;
	    });
	})(jQuery);

</script>
<?php wp_footer(); ?>
<script type="text/javascript">
var google_tag_params = {
dynx_itemid: 'REPLACE_WITH_VALUE',
dynx_itemid2: 'REPLACE_WITH_VALUE',
dynx_pagetype: 'REPLACE_WITH_VALUE',
dynx_totalvalue: 'REPLACE_WITH_VALUE',
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 944659053;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/944659053/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=1002520399794820";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>





