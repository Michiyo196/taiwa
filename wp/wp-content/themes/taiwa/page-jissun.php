<?php
/*
Template Name: 実寸法師（2D）
*/
?>
<?php get_header(); ?>

<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="drawer drawer--right">

<?php include( TEMPLATEPATH . '/title.php' ); ?>

<main>
<?php if(is_page('jissun')):?>
<?php elseif(is_page('jissun3d')):?>
<?php elseif(is_page('plusone')):?>
<?php else :?>
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
<?php endif;?>    


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>

<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</main>

<?php include( TEMPLATEPATH . '/nav_jissun.php' ); ?>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>

<?php include( TEMPLATEPATH . '/footer2.php' ); ?>