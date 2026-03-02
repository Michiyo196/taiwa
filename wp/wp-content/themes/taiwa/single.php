<?php
/*
Template Name: お知らせsingle
*/
?>
<?php include( TEMPLATEPATH . '/news-top.php' ); ?>

<section class="single">
<div class="white">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();  ?>
<div class="entry">
<h1><?php the_title(); ?></h1>

<div class="honbun">
<?php the_content(); ?>
<!--
<p>ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。</p>

<img src="/wp/wp-content/themes/taiwa/images/news_image.jpg" alt="">

<h2>h2タイトルが入ります。</h2>

<h3>h3タイトルが入ります</h3>

<p>ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。ここに文章が入ります。</p>

<h4>h4タイトルが入ります</h4>
<ul>
<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
<li>リストが入ります。リストが入ります。</li>
<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
</ul>

<h4>h4タイトルが入ります</h4>
<ol>
<li>数字付きリストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
<li>リストが入ります。リストが入ります。</li>
<li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
</ol>

<blockquote>
引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。引用文が入ります。
</blockquote>
-->
</div>

<div class="info">
<div class="cat">Category　<?php the_category(' '); ?></div>
<div class="date"><?php the_time("Y.n.j") ?></div>
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<div class="nav_single">
<?php previous_post_link('%link','« 前へ',false) ?><a href="<?php bloginfo('url'); ?>/news">記事一覧</a><?php next_post_link('%link','次へ »',false) ?>

</div>



</div>

</div>
</section>
<?php include( TEMPLATEPATH . '/news-bottom.php' ); ?>