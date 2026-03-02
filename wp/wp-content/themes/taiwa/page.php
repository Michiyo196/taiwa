<?php
/*
Template Name: Page
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

<?php include( TEMPLATEPATH . '/footer.php' ); ?>

<?php include( TEMPLATEPATH . '/footer2.php' ); ?>