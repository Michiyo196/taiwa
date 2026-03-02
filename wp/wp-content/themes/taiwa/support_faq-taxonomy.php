<?php
/*
Template Name: サポートFAQ タクソノミー共通*/
?>
<?php include( TEMPLATEPATH . '/support_faq-top.php' ); ?>



<!--======= archive ======-->
<section id="archive">
<div class="gray">
<div class="wrapper">


<h2 class="midashi1"><?php single_term_title() ?></h2>


<div class="faqlist">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>
<article><a href="<?php the_permalink() ?>">
<div class="ravel"><?php
$terms = get_the_terms($post->ID,'ravel_faq');
if ( $terms ) {
foreach( $terms as $term ) {?>
<span><?php echo $term->name;?></span>
<?php }
}
?></div>
<h3><?php the_title(); ?></h3>
<div class="answer">
<?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 70 ) {
  $content = str_replace( '\n', '', mb_substr( strip_tags( $post->post_content ), 0, 70, 'UTF-8' ) );
  echo $content . '…';
} else {
  echo str_replace( '\n', '', strip_tags( $post->post_content ) );
}
?>
</div>
<div class="cat"><?php
$terms = get_the_terms($post->ID,'cat_faq');
if ( $terms ) {
foreach( $terms as $term ) {?>
<span><?php echo $term->name;?></span>
<?php }
}
?></div>
<div class="more">more</div>
</a>
</article>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>



</div>

<div class="navi">
<div class="list_top"><a href="/support_faq/">FAQ TOP</a></div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>


<div class="navi">

</div>

</div>
</div>
</section>

<!--======= search_bottom ======-->
<section id="search_bottom">
<div class="white">
<div class="wrapper">


<?php include( TEMPLATEPATH . '/support_faq-search.php' ); ?>

</div>
</div>
</section>



<?php include( TEMPLATEPATH . '/support_faq-bottom.php' ); ?>