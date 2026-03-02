<?php
/*
Template Name: サポートFAQ single
*/
?>
<?php include( TEMPLATEPATH . '/support_faq-top.php' ); ?>



<!--======= single ======-->
<section id="single">
<div class="gray">
<div class="wrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>
<div class="faq_entry">
<div class="ravel"><?php
$terms = get_the_terms($post->ID,'ravel_faq');
if ( $terms ) {
foreach( $terms as $term ) {?>
<span><?php echo $term->name;?></span>
<?php }
}
?></div>
<div class="cat"><?php
$terms = get_the_terms($post->ID,'cat_faq');
if ( $terms ) {
foreach( $terms as $term ) {?>
<span><?php echo $term->name;?></span>
<?php }
}
?></div>
<h3><?php the_title(); ?></h3>
<div class="answer">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>


<div class="bt"><a href="#" onclick="history.back(-1);return false;">前のページへ戻る</a></div>

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