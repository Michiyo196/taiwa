<?php
/*
Template Name: PlusOne図面管理
*/
?>
<?php get_header(); ?>

<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="drawer drawer--right">

<?php include( TEMPLATEPATH . '/title.php' ); ?>

<main>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>

<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</main>

<section class="plusone_catalogue">
<div class="bt"><a href="/support/">サポート</a><a href="https://www.taiwa.co.jp/plus1file.pdf" target="_blank">製品カタログ<small>（PDF）</small></a><a href="https://www.taiwa.co.jp/plus1orderform.pdf" target="_blank">注文書<small>（PDF）</small></a></div>
</section>

<?php include( TEMPLATEPATH . '/nav_jissun.php' ); ?>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>

<?php include( TEMPLATEPATH . '/footer2.php' ); ?>