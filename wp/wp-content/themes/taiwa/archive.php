<?php
/*
Template Name: お知らせアーカイブ
*/
?>
<?php include( TEMPLATEPATH . '/news-top.php' ); ?>

<section class="archives">
<div class="white">

<?php if ( is_day() ) : ?>
	<div class="cat_t">
	<h2><?php the_time("Y/n/j"); ?></h2>
	</div>
<?php elseif ( is_month() ) : ?>
	<div class="cat_t">
	<h2><?php the_time("Y年n月"); ?></h2>
	</div>
<?php elseif ( is_year() ) : ?>
	<div class="cat_t">
	<h2><?php the_time("Y年"); ?></h2>
	</div>
<?php elseif ( is_category() ) : ?>
	<div class="cat_t">
	<h2><?php single_cat_title() ?></h2>
	</div>
<?php elseif ( is_tax() ) : ?>
	<div class="cat_t">
	<h2><?php single_term_title() ?></h2>
	</div>
 <?php elseif ( is_tag() ) : ?>
 	<div class="cat_t">
	<h2><?php single_tag_title();?></h2>
	</div>
<?php elseif ( is_author() ) : ?>
	<div class="cat_t">
	<h2><?php the_author(); ?></h2>
	</div>
<?php else : ?>
      
 <?php endif; ?>


<ul class="archive_list">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>
<li>
<div class="cat"><?php the_category(' '); ?></div>
<div class="date"><?php the_time("Y.n.j") ?></div>
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
</li>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</ul>

<div class="navi">
<div class="list_top"><a href="<?php echo home_url(); ?>/news">最新</a></div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>

</div>
</section>
<?php include( TEMPLATEPATH . '/news-bottom.php' ); ?>