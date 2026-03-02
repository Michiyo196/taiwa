<?php
/*
Template Name: プライバシーポリシー（iframe）
*/
?>
<?php get_header(); ?>


<!-- ========== HEAD COMMON END ===========-->

</head>

<body class="privacy-iframe">


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); 
	/* ループ開始 */ ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php the_content(); ?>

<?php endwhile; ?>       
<?php else : ?>

<?php endif; ?>
</body>
</html>