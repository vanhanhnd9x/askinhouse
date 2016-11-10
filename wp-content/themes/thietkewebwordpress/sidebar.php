
<div class="sidebar-content">
<?php wp_reset_postdata(); ?>

    <?php
/*    // example args
    $args = array( 'posts_per_page' => 3 );

    // the query
    $the_query = new WP_Query( $args );
    */?>

    <?php /*if ( $the_query->have_posts() ) : */?>

        <!-- start of the loop -->
        <?php /*while ( $the_query->have_posts() ) : $the_query->the_post(); */?>
            <?php /*the_title(); */?>
            <?php /*the_excerpt(); */?>
            <?php /*the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive post-image")); */?>
        <?php /*endwhile; */?><!-- end of the loop -->

        <!-- put pagination functions here -->
        <?php /*wp_reset_postdata(); */?>

    <?php /*else:  */?>

        <p><?php /*_e( 'Sorry, no posts matched your criteria.' ); */?></p>

    <?php /*endif; */?>
</div>
<?php
//$args = array(
//    'numberposts' => 10,
//    'offset' => 0,
////    'category' => 0,
//    'orderby' => 'post_date',
//    'order' => 'DESC',
//    'include' => '',
//    'exclude' => '',
//    'meta_key' => '',
//    'meta_value' =>'',
//    'post_type' => 'post',
////    'post_status' => 'draft, publish, future, pending, private',
//    'suppress_filters' => true
//);
//
//$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
////var_dump($recent_posts);
//
//foreach( $recent_posts as $recent ){
//    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
//    echo get_the_post_thumbnail( $recent["ID"]);
//
////    echo
//}
//wp_reset_query();
?>

<?php dynamic_sidebar('sidebar'); ?>
