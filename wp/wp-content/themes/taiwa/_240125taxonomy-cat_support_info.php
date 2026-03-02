<?php
/*
Template Name: サポート情報タクソノミー
*/
?>
<?php include( TEMPLATEPATH . '/support-top.php' ); ?>


<!--======= support1 ======-->
<section id="support1">
<div class="gray">
<div class="wrapper_m">



<?php if ( is_tax() ) : ?>
<h2 class="midashi1"><?php single_term_title() ?></h2>

<?php else : ?>
<h2 class="midashi1"><a href="/support/#support2">サポート情報</a></h2>
 <?php endif; ?>


<div class="waku">


<article>
<ul class="check">
<?php
    $term_object = get_queried_object(); // タームオブジェクトを取得
	$term_slug   = $term_object->slug; // タームスラッグ
	$args = array(
	'post_type' => 'support_info',
	'taxonomy' => 'cat_support_info',
	'term' => $term_slug,
	'posts_per_page' => -1 // -1にすると全件表示
	);
	$custom_query = new WP_Query( $args ); ?>
<?php
		/* Start the Loop */
		if ( $custom_query->have_posts() ) :
		while ( $custom_query->have_posts() ) :
		$custom_query->the_post();
	?>
<li>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</li>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</ul>
</article>




</div>
</div>
</div>
</section>


<?php include( TEMPLATEPATH . '/support-bottom.php' ); ?>