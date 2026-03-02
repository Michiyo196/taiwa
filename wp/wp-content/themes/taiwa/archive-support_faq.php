<?php
/*
Template Name: サポートFAQ archive(top)
*/
?>
<?php include( TEMPLATEPATH . '/support_faq-top.php' ); ?>

<!--======= search_top ======-->
<section id="search_top">
<div class="white">
<div class="wrapper">


<?php include( TEMPLATEPATH . '/support_faq-search.php' ); ?>

</div>
</div>
</section>



<!--======= archive ======-->
<section id="archive">
<div class="gray">
<div class="wrapper">

<h2 class="midashi1">アクセスの多い質問</h2>
<div class="faqlist">
<?php
 $wpp = array (
 'range' => 'all',
 'limit' => 5,
 'post_type' => 'support_faq',
 'title_length' => '50',
 'stats_comments' => '0',
 'stats_views' => '1',
 'post_html' => '<article><a href="{url}"><h3>{text_title}</h3></a></article>',
); ?>

<?php wpp_get_mostpopular($wpp); ?>


</div>

</div>
</div>
</section>


<?php include( TEMPLATEPATH . '/support_faq-bottom.php' ); ?>