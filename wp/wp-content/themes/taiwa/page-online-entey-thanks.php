<?php
/*
Template Name: オンラインサービス登録（完了）
*/
?>
<?php get_header(); ?>


<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="drawer drawer--right">

<?php include( TEMPLATEPATH . '/title.php' ); ?>

<main id="contact">

<div class="wrapper">

<section class="pagetitle">
<div class="white">
<div class="div title">
<a href="/online-entry">
<div class="eng">ONLINE SERVICE</div>
<h1>オンラインサービス登録</h1>
</a>
</div>
</div>
</section>

<section id="form">
<div class="white">
<div class="wrapper_s">
<div class="thanks">
<h3>オンラインサービスへの登録を受け付けました</h3>
<p>株式会社タイワオンラインサービスへご登録いただき、ありがとうございます。<br>
オンラインサービスへの登録を承りました。
<br>
登録いただきましたメールアドレスに、オンラインサービスからダウンロードサービスなど提供させていただきます。
よろしくお願いいたします。
</p>
</div>

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
</section>



</div>

</main>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>

<?php include( TEMPLATEPATH . '/footer2.php' ); ?>