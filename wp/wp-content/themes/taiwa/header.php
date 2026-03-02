<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<!--[if lt IE 9]> 
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script> 
<![endif]-->
<link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/icon-192x192.png">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KSE2VH4TZE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KSE2VH4TZE');
</script>

<title><?php the_title(); ?></title>

<?php wp_head(); ?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css">