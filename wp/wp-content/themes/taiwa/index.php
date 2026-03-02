<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/slick.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" rel="stylesheet" type="text/css">

<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="drawer drawer--right">

<?php include( TEMPLATEPATH . '/title.php' ); ?>

<main id="top">

<!-- ========== mainimage ===========-->
<section id="mainimage" class="fadein">
<div class="mainslide">
<div class="waku">
<div class="image">
</div>
<div class="text">
<div class="copy">未来につながる</div>
<h1>CADを通じて、タイワにしかできない<br class="br_ssp">「オンリーワン」を提供します</h1>
</div>
</div>
<div class="waku">
<div class="image">
</div>
<div class="text">
<div class="copy">人と人、人と機械の<br class="br_ssp">「<ruby>
<rb>対話</rb>
<rp>（</rp>
<rt>タイワ</rt>
<rp>）</rp>
</ruby>」を大切に</div>
<h1>CADを通じて、タイワにしかできない<br class="br_ssp">「オンリーワン」を提供します</h1>
</div>
</div>
</div>
</section>

<!-- ========== news_mini ===========-->
<section id="news_mini">
<h2><a href="/news/">NEWS</a></h2>
<div class="news_slide">
<?php
$args = array( 'posts_per_page' => 5, );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<div class="waku">
<dl>
<dt><?php the_time("Y.n.j") ?></dt>
<dd><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dd>
</dl>
</div>
<?php endforeach; 
wp_reset_postdata();?>
</div>
</section>

<!-- ========== service ===========-->
<section id="service">
<div class="title">
<div class="eng">PRODUCTS</div>
<h2>製品紹介</h2>
<p>鉄骨業界の必需品である2次元汎用CAD/CAMシステム「<a href="jissun/">実寸法師</a>」をはじめ、業界スタンダードなCADシステムをご提案します。<br>
お客様のニーズにあわせてたカスタマイズも得意です。</p>
</div>
<div class="contents">
<article class="jissun">
<a href="jissun/">
<div class="image">
<picture>
<source media="(min-width:481px)" srcset="/wp/wp-content/themes/taiwa/images/jissun_img.jpg 1x,/wp/wp-content/themes/taiwa/images/jissun_img@2x.jpg 2x">
<source media="(max-width:480px)" srcset="/wp/wp-content/themes/taiwa/images/jissun_img-sp.jpg 1x,/wp/wp-content/themes/taiwa/images/jissun_img-sp@2x.jpg 2x">
<img src="/wp/wp-content/themes/taiwa/images/jissun_img.jpg" alt="実寸法師〜2次元汎用CAD/CAMシステム">
</picture>
</div>
<div class="text">
<h3><img src="/wp/wp-content/themes/taiwa/images/jissun_logo.png" srcset="/wp/wp-content/themes/taiwa/images/jissun_logo@2x.png 2x" alt="実寸法師〜2次元汎用CAD/CAMシステム" /></h3>
<p>抜群の操作性、豊富で便利な機能が満載。<br>
描くことから、物作りまで、トータルで考えるソフト。</p>
</div>
</a>
</article>
<article class="jissun3d">
<a href="jissun3d/">
<div class="image">
<picture>
<source media="(min-width:481px)" srcset="/wp/wp-content/themes/taiwa/images/jissun3d_img.jpg 1x,/wp/wp-content/themes/taiwa/images/jissun3d_img@2x.jpg 2x">
<source media="(max-width:480px)" srcset="/wp/wp-content/themes/taiwa/images/jissun3d_img-sp.jpg 1x,/wp/wp-content/themes/taiwa/images/jissun3d_img-sp@2x.jpg 2x">
<img src="/wp/wp-content/themes/taiwa/images/jissun3d_img.jpg" alt="実寸法師3D〜汎用3次元CAD">
</picture>
</div>
<div class="text">
<h3><img src="/wp/wp-content/themes/taiwa/images/jissun3d_logo.png" srcset="/wp/wp-content/themes/taiwa/images/jissun3d_logo@2x.png 2x" alt="実寸法師3D〜汎用3次元CAD" /></h3>
<p>実寸法師の操作性をそのままに、<br>多彩な機能で３次元モデルを作成・編集可能。</p>
<div class="ill"><img src="/wp/wp-content/themes/taiwa/images/ill_jikkun3d.png" srcset="/wp/wp-content/themes/taiwa/images/ill_jikkun3d@2x.png 2x" alt="3dじっくん" /></div>
</div>
</a>
</article>
</div>

<div class="wrapper">
<div class="banner" style="max-width: 720px;margin-left: auto;margin-right:auto;"><a href="/sekisai/"><img src="/wp/wp-content/themes/taiwa/sekisai/images/bn_sekisai.jpg" srcset="/wp/wp-content/themes/taiwa/sekisai/images/bn_sekisai@2x.jpg" alt=""></a></div>
<div class="banner"><a href="/case/">
<picture>
<source media="(min-width:481px)" srcset="/wp/wp-content/themes/taiwa/images/bn_case.jpg 1x,/wp/wp-content/themes/taiwa/images/bn_case@2x.jpg 2x">
<source media="(max-width:480px)" srcset="/wp/wp-content/themes/taiwa/images/bn_case-sp.jpg 1x,/wp/wp-content/themes/taiwa/images/bn_case-sp@2x.jpg 2x">
<img src="/wp/wp-content/themes/taiwa/images/bn_case.jpg" alt="実寸法師導入事例〜実際に導入されている企業様へインタビューしました">
</picture>
</a></div>
</div>
</section>

<!-- ========== niihama ===========-->
<section id="niihama">
<div class="wrapper_s">
<h2>ものづくりの街、新居浜から<br>
未来につながる<br class="br_ssp">CADソフトウェアを。</h2>
<p>タイワは、人と人、人と機械の「対話」<br>
「実寸法師」開発の原点である親と子、<br class="br_ssp">現場と事務所の「対話」<br>
タイワからひろがる「大きなふれあいの輪（大輪）」<br>
ふれあいを通してひろがる大いなる<br class="br_ssp">平和の創出=「大和」の音を表します。<br>
<br>
社名の「タイワ」が表す通り、<br>
お客様とのコミュニケーションを通じて、<br class="br_ssp">よりニーズにあったサービスを提供します。</p>
<div class="to"><a href="/company/">会社概要</a></div>
</div>
</section>

<!-- ========== top_banner ===========-->
<section id="top_banner">
<ul>
<li><a href="/recruit">
<div class="text">
<h3>求人情報</h3>
<p>新卒から即戦力まで</p>
</div>
</a></li>
<li><a href="/company/work/">
<div class="text">
<h3>働き方改善への取組み</h3>
<p>「仕事と私生活の調和」について<br>
様々な取り組みをしています</p>
</div>
</a></li>
</ul>
</section>

<section id="news">
<div class="white">
<div class="title">
<div class="eng">NEWS</div>

</div>
<div class="contents">
<div class="wrapper_m">
<h2><a href="/news/">お知らせ</a></h2>

<ul class="archive_list">
<?php
$args = array( 'posts_per_page' => 6, );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<li>
<div class="cat"><?php the_category(' '); ?></div>
<div class="date"><?php the_time("Y.n.j") ?></div>
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
</li>
<?php endforeach; 
wp_reset_postdata();?>

</ul>

</div>
</div>
</div>
</section>
</main>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>
<script type="text/javascript" src="/wp/wp-content/themes/taiwa/js/slick.min.js"></script>
<script>
$('.mainslide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 5000,
		fade:true,
		pauseOnFocus:false,
		pauseOnHover:false,
		speed:1000,
		arrows:false,
});
</script>
<script>
$('.news_slide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3500,
		fade:false,
		pauseOnFocus:false,
		pauseOnHover:false,
		speed:500,
		arrows:false,
});
</script>
<?php include( TEMPLATEPATH . '/footer2.php' ); ?>