
<section id="news_sub">
<div class="white">
<div class="list">
<article class="category">
<h3>Category</h3>
<ul>
<?php
$categories = get_categories( );
foreach( $categories as $category ){
	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
}
?>
</ul>
</article>
<article class="archive">
<h3>Archives</h3>
<ul>
<?php
$year_prev = null;
$months = $wpdb->get_results(	"SELECT DISTINCT MONTH( post_date ) AS month ,
								YEAR( post_date ) AS year,
								COUNT( id ) as post_count FROM $wpdb->posts
								WHERE post_status = 'publish' and post_date <= now( )
								and post_type = 'post'
								GROUP BY month , year
								ORDER BY post_date DESC");
foreach($months as $month) :
	$year_current = $month->year;
	if ($year_current != $year_prev){
		if ($year_prev != null){?>
		</ul></li>
		<?php } ?>
	
<li><span class="year"><?php echo $month->year; ?></span>
<ul class="children">
	<?php } ?>
    
	<li>
		<a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
			<?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月 (<?php echo $month->post_count; ?>)
		</a>
	</li>
    <?php $year_prev = $year_current;
endforeach; ?>
</ul>
</li>
</ul>


</article>
</div>
</div>
</section>
</div>
</div>
</main>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>
<!-- アーカイブリスト　年＞月 -->
<script>
$(function(){
    $('.year').on('click', function() {
		$(this).next('ul:not(:animated)').slideToggle();
		$(this).parent('.archive li').toggleClass('minus');
		// メニューをクリックしたら他のサブメニューを閉じる
		$('.children').not($(this).next('.children')).slideUp();
		$('.archive li').not($(this).parent('.archive li')).removeClass('minus');
    });
});
</script>
<?php include( TEMPLATEPATH . '/footer2.php' ); ?>