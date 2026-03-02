<?php include( TEMPLATEPATH . '/support-top.php' ); ?>


<!--======= support1 ======-->
<section id="support1">
<div class="gray">
<div class="wrapper_m">

<h2 class="support_entry_title"><?php the_title(); ?></h2>

<div class="waku">
<div class="entry">
<?php the_content(); ?>
</div>
<div class="data">
<ul>
<li><a href="/support/">サポート</a></li>
<?php if(is_singular( 'correspondence' ) ): ?>
<li><a href="/support/#support1"><?php
$obj = get_post_type_object($post_type);
echo $obj->labels->name;
?></a></li>
<?php elseif(is_singular( 'support_info' ) ): ?>
<li><a href="/support/#support2"><?php
$obj = get_post_type_object($post_type);
echo $obj->labels->name;
?></a></li>
<?php else: ?>
<?php endif; ?>

<?php if(is_singular( 'support_info' ) ): ?>
<?php
$terms = get_the_terms($post->ID,'cat_support_info');
foreach( $terms as $term ) {
echo '<li><a href="'.get_term_link($term->slug, 'cat_support_info').'">'.$term->name.'</a></li>';
}
?>
<?php endif; ?>
</ul>

</div>
</div>
</div>
</div>
</section>


<?php include( TEMPLATEPATH . '/support-bottom.php' ); ?>