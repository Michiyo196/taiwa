<?php
/*
Template Name: サポートFAQ 検索結果
*/
?>
<?php include( TEMPLATEPATH . '/support_faq-top.php' ); ?>




<!--======= archive ======-->
<section id="archive">
<div class="gray">
<div class="wrapper">
<?php
// searchform.phpから送られてきたパラメーターを取得
if(empty($_GET['rabel'])){
$selected_terms = '';
}else{
$selected_terms = $_GET['rabel'];
}

if(empty($_GET['cat'])){
$selected_terms_cat = '';
}else{
$selected_terms_cat = $_GET['cat'];
}


?>
<h2 class="midashi1"><small>検索結果 </small><?php the_search_query(); ?></h2>

<div class="faqlist">

<?php
// searchform.phpでラベルでの絞り込み条件がある場合
if($selected_terms) {
  // 絞り込み条件を追加
  $taxquery_taxonomy = array(
    'taxonomy' => 'ravel_faq',
    'terms' => $selected_terms, //取得したパラメーター（＝各タームのスラッグ）が入る
    'field' => 'slug',
    'operator' => 'IN', //タームの条件を指定（AND/IN/NOT IN）
  );
}else{
$taxquery_taxonomy = '';
}
// searchform.phpでカテゴリーでの絞り込み条件がある場合
if($selected_terms_cat) {
  // 絞り込み条件を追加
  $taxquery_taxonomy_cat = array(
    'taxonomy' => 'cat_faq',
    'terms' => $selected_terms_cat, //取得したパラメーター（＝各タームのスラッグ）が入る
    'field' => 'slug',
    'operator' => 'IN', //タームの条件を指定（AND/IN/NOT IN）
  );
}else{
$taxquery_taxonomy_cat = '';
}

// サブループで表示する記事の条件を指定
$args = array(
  'post_type' => 'support_faq',
  'posts_per_page' => -1,
  's' => get_search_query(), //これ必須！
  // searchform.phpで送られてきた条件を追加
  'tax_query' => array( 
    'relation' => 'AND',
    $taxquery_taxonomy,
    $taxquery_taxonomy_cat,
  ),
);

// サブループ作成
$sub_query = new WP_Query( $args );
if ( $sub_query->have_posts() ) : 
  while ( $sub_query->have_posts() ) : 
  	$sub_query->the_post(); 
?>

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
    <?php else: ?>
        <p style="text-align: center;">キーワードはみつかりません。</p>
    <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>



</div>
</div>
</section>

<!--======= search_top ======-->
<section id="search_top2">
<div class="white">
<div class="wrapper">
<?php include( TEMPLATEPATH . '/support_faq-search.php' ); ?>
</div>
</div>
</section>

<?php include( TEMPLATEPATH . '/support_faq-bottom.php' ); ?>