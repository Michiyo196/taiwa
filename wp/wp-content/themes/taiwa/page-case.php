<?php
/*
Template Name: 実寸法師:導入実績
*/
?>
<?php get_header(); ?>

<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="drawer drawer--right">

<?php include( TEMPLATEPATH . '/title.php' ); ?>

<main>

<section id="jissun_sec_pagetitle">
<div class="waku">
<div class="title">
<a href="/jissun">
<h1><img src="/wp/wp-content/themes/taiwa/jissun/images/page_title.png" srcset="/wp/wp-content/themes/taiwa/jissun/images/page_title@2x.png 2x" alt="実寸法師〜2次元汎用CAD/CAMシステム" /></h1>
<div class="ill"><img src="/wp/wp-content/themes/taiwa/jissun/images/page_title_ill.png" srcset="/wp/wp-content/themes/taiwa/jissun/images/page_title_ill@2x.png 2x" alt="" /></div>
</a>
</div>
</div>
</section>
   
<div id="jissun" class="sec">
<div id="case">

<section id="lead" class="pagetitle">
<div class="white">
<div class="wrapper_m">
<div class="title">
<a href="/case/">
<div class="eng">CASE</div>
<h1>導入事例</h1>
</a>
</div>
</div>
</div>
</section>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>

<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>


<section class="case_nav">
<div class="white">
<div class="wrapper_m">
<h3>導入実績一覧</h3>
<ul>
<li><a href="/case/case03/">
<div class="image"><img src="/wp/wp-content/themes/taiwa/jissun/case/images/case3_0.jpg" alt="ヤマネ鉄工建設株式会社 様"></div>
<h4>ヤマネ鉄工建設株式会社 様</h4>
</a></li>
<li><a href="/case/case02/">
<div class="image"><img src="/wp/wp-content/themes/taiwa/jissun/case/images/case2_0@2x.jpg" alt="株式会社エスディーダブル 様"></div>
<h4>株式会社エスディーダブル 様</h4>
</a></li>
<li><a href="/case/case01/">
<div class="image"><img src="/wp/wp-content/themes/taiwa/jissun/case/images/case1_0@2x.jpg" alt="執行工業株式会社 様"></div>
<h4>執行工業株式会社 様</h4>
</a></li>
</ul>
<div class="bt"><a href="/case/">導入実績TOP</a></div>
</div>
</div>
</section>

</div>
</div>
</main>

<?php include( TEMPLATEPATH . '/nav_jissun.php' ); ?>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>

<?php include( TEMPLATEPATH . '/footer2.php' ); ?>