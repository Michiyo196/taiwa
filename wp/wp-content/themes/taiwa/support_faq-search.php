<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" 　id="searchform" class="searchform">
<div class="search_tab">
<ul>
<li><label><input id="checkAll" type="checkbox" name="rabel[]" value="checkall" class="checks"><span class="name">全て</span></label></li>
<?php
$terms = get_terms('ravel_faq');
foreach ( $terms as $term ) :
?>
<li>
<label>
<input type="checkbox" name="rabel[]" value="<?php echo $term->slug; ?>" class="checks"><span class="name"><?php echo $term->name; ?></span>
</label>
</li>
<?php endforeach; ?>     
</ul>
</div>


<div class="search_navi">


<nav class="category_list">
<h3>カテゴリで絞り込む</h3>
<ul>

<?php
$terms = get_terms('cat_faq');
foreach ( $terms as $term ) :
?>
<li>
<label>
<input type="checkbox" name="cat[]" value="<?php echo $term->slug; ?>" class="checks_cat"><?php echo $term->name; ?>
</label>
</li>
<?php endforeach; ?>     
</ul>
<!--<ul>
<?php wp_list_categories('title_li=&taxonomy=cat_faq'); ?>
</ul>-->
</nav>

<div class="search_form">

<input type="text" name="s" id="search-input"  value="<?php the_search_query(); ?>" placeholder="キーワードで絞り込む" />
<input type="hidden" name="post_type" value="support_faq">
<input type="submit" id="searchsubmit" value="検索" />

</div>

</div>
</form>

<!--
<div class="search_tab">
<ul>
<?php if(!is_tax('ravel_faq', 'ver9') && !is_tax('ravel_faq', 'ver8')): ?>
<li class="active"><a href="/support_faq/"><span class="icon"><img src="/wp/wp-content/themes/taiwa/images/icon_check_on.svg" alt=""></span><span class="name">共通</span></a></li>
<?php else: ?>
<li><a href="/support_faq/"><span class="icon"><img src="/wp/wp-content/themes/taiwa/images/icon_check_off.svg" alt=""></span><span class="name">共通</span></a></li>
<?php endif; ?>

<?php if(is_tax('ravel_faq', 'ver9')): ?>
<li class="active"><a href="/ravel_faq/ver9/"><span class="icon"><img src="/wp/wp-content/themes/taiwa/images/icon_check_on.svg" alt=""></span><span class="name">ver.9</span></a></li>
<?php else: ?>
<li><a href="/ravel_faq/ver9/"><span class="icon"><img src="/wp/wp-content/themes/taiwa/images/icon_check_off.svg" alt=""></span><span class="name">ver.9</span></a></li>
<?php endif; ?>

<?php if(is_tax('ravel_faq', 'ver8')): ?>
<li class="active"><a href="/ravel_faq/ver8/"><span class="icon"><img src="/wp/wp-content/themes/taiwa/images/icon_check_on.svg" alt=""></span><span class="name">ver.8</span></a></li>
<?php else: ?>
<li><a href="/ravel_faq/ver8/"><span class="icon"><img src="/wp/wp-content/themes/taiwa/images/icon_check_off.svg" alt=""></span><span class="name">ver.8</span></a></li>
<?php endif; ?>
</ul>
</div>
-->
<!--
<div class="search_navi">
<div class="search_form">


      
<form method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
<div class="list">
<input type="text" name="s" id="search-input"  value="<?php the_search_query(); ?>" placeholder="キーワードから探す" />
<input type="hidden" name="post_type" value="support_faq">
<input type="submit" id="searchsubmit" value="検索" />
</div>
</form>
</div>

<nav class="category_list">
<h3>カテゴリから探す</h3>
<ul>
<?php wp_list_categories('title_li=&taxonomy=cat_faq'); ?>
</ul>
</nav>
</div>
-->


