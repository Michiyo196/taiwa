<?php
/*
Template Name: サポートTOP
*/
?>
<?php include( TEMPLATEPATH . '/support-top.php' ); ?>


<!--======= support1 ======-->
<section id="support1">
<div class="gray">
<div class="wrapper_s">

<h2 class="midashi1">各種対応情報</h2>

<div class="waku">
<ul class="check">
<?php
$args = array( 'posts_per_page' => -1,'post_type' => 'correspondence' );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endforeach; 
wp_reset_postdata();?>
</ul>
</div>
</div>
</div>
</section>

<!--======= support2 ======-->
<section id="support2">
<div class="white">
<div class="wrapper_s">

<h2 class="midashi1">サポート情報</h2>

<div class="waku">
<article>
<h3><a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver9/">実寸法師 Ver.9</a></h3>
<ul class="check">
<li> <a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver9/ver9_info/">実寸法師 Ver.9 更新履歴</a> </li>
<li> <a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver9/ver9_whatsnew/">実寸法師 Ver.9 新機能概要</a> </li>
</ul>
</article>
<article>
<h3><a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver8/">実寸法師 for Windows Ver.8</a></h3>
<ul class="check">
<li> <a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver8/ver8_info/">実寸法師 for Windows Ver.8 更新履歴</a> </li>
<li> <a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver8/ver8_whatsnew/">実寸法師 for Windows Ver.8 新機能概要</a> </li>
</ul>
</article>
<article>
<h3><a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver7/">実寸法師 for Windows Ver.7以前</a></h3>
<ul class="check">
<li> <a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver7/ver7_info/">実寸法師 for Windows Ver.7 更新履歴</a> </li>
<li> <a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver7/ver7_whatsnew/">実寸法師 for Windows Ver.7 新機能概要</a> </li>
<li><a href="https://www.taiwa.co.jp/cat_support_info/jissun_ver6/">実寸法師 for Windows Ver.6以前</a></li>
</ul>
</article>

<article>
<h3><a href="https://www.taiwa.co.jp/cat_support_info/support_etc/">その他</a></h3>
</article>
</div>
</div>
</div>
</section>



<?php include( TEMPLATEPATH . '/support-bottom.php' ); ?>