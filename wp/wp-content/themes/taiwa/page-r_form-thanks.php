<?php
/*
Template Name: 採用申し込みフォーム（完了）
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
<div class="eng">ENTRY SHEET</div>
<h1>採用応募</h1>
</div>
</div>
</section>

<section id="form">
<div class="white">
<div class="wrapper_s">
<div class="thanks">
<h3>採用応募を受け付けました</h3>
<p>株式会社タイワリクルートへ応募いただき、ありがとうございます。<br>
お問い合わせを承りました。<br><br>
折り返し、担当者より改めて連絡を差し上げます。<br>
今しばらくお待ちいただけますよう、よろしくお願いいたします。<br>
<br>
なお、ご入力いただいたメールアドレス宛に受付完了メールを配信しております。<br>
完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
大変お手数ですが、再度採用応募の手続きをお願い致します。
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
<?php echo do_shortcode('[mwform_formkey key="118"]'); ?>
</div>
</main>

<?php include( TEMPLATEPATH . '/footer.php' ); ?>

<?php include( TEMPLATEPATH . '/footer2.php' ); ?>