<?php
/*
Template Name: サポートTOPtest
*/
?>
<?php include( TEMPLATEPATH . '/support-top.php' ); ?>


<!--======= support1 ======-->
<section id="support1">
<div class="gray">
<div class="wrapper_s">

<h2 class="midashi1">各種対応情報</h2>

<div class="waku">
<ul class="check">
<?php
$args = array( 'posts_per_page' => -1,'post_type' => 'correspondence' );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endforeach; 
wp_reset_postdata();?>
</ul>
</div>
</div>
</div>
</section>

<!--======= support2 ======-->
<section id="support2">
<div class="white">
<div class="wrapper_s">

<h2 class="midashi1">サポート情報</h2>

<div class="waku">

<?php 
  $my_tax = 'cat_support_info';  //取得したいタクソノミー名
  $parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );  //第一階層のタームだけ取得
  if ( !empty( $parent_terms ) ) :
    echo '';

    //第1ループ
    foreach ( $parent_terms as $pt ) : 
      $pt_id = $pt->term_id;
      $pt_name = $pt->name;
      $pt_url = get_term_link($pt);
?>
      <article>
        <h3><a href="<?php echo $pt_url; ?>"><?php echo $pt_name; ?></a></h3>
        <?php 
          $child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
          if ( !empty( $child_terms ) ) :
            echo '<ul class="check">';

           //第2ループ
            foreach ( $child_terms as $ct ) : 
              $ct_id = $ct->term_id;
              $ct_name = $ct->name;
              $ct_url = get_term_link($ct);
        ?>
              <li>
                <a href="<?php echo $ct_url; ?>"><?php echo $ct_name; ?></a>
              </li>
        <?php
            endforeach;  //End : 第２ループ
            echo '</ul>';
          endif;
        ?>
      </article>
<?php
    endforeach;  //End : 第1ループ
    echo '';
  endif;
?>




</div>
</div>
</div>
</section>


<!--======= support3 ======-->
<section id="support3">
<div class="gray">
<div class="wrapper_s">

<h2 class="midashi1">サポートQ&amp;A</h2>


<div class="faqlist">

<?php
$args = array( 'posts_per_page' => -1,'post_type' => 'support_faq' );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<article id="support_faq<?php the_ID(); ?>">
<h3><?php the_title(); ?></h3>
<div class="answer">
<?php the_content(); ?>
</div>
</article>
<?php endforeach; 
wp_reset_postdata();?>



</div>

</div>
</div>
</section>

<?php include( TEMPLATEPATH . '/support-bottom.php' ); ?>