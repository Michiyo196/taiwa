<?php
/*
Template Name: 採用申し込みフォーム
*/
?>
<?php get_header(); ?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="drawer drawer--right">

<?php include( TEMPLATEPATH . '/title.php' ); ?>

<main>
<div id="contact">
<div class="wrapper">

<section class="pagetitle">
<div class="white">
<div class="div title">
<div class="eng">ENTRY SHEET</div>
<h1>採用応募</h1>
</div>
</div>
</section>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); 
	/* ループ開始 */ ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php endwhile; ?>       
<?php else : ?>

<?php endif; ?>


</div>
</div>
</main>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>


<script>
jQuery( '#zip' ).keyup( function() {
  AjaxZip3.zip2addr( this, '', 'addr', 'addr' );
});
</script>
<?php include( TEMPLATEPATH . '/footer2.php' ); ?>