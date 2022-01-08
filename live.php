<?php 
  $template='detail';
  $page='vod';
  $filter='no'; 
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php require ($_SERVER['STRIMID_ONO'].'inc/header.php')?>
<link rel="stylesheet" type="text/css" href="../strim.id-ono/css/tambuah.css?<?php echo $anticache; ?>"/>

<div class="site-container video-page">
  <section class="section-container section-video-player thumb-loading">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/IIknNdF07Ps?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
  <section class="section-container section-video-info">
    <?php $detail_content='live'; require ($_SERVER['STRIMID_ONO'].'module/detail-content.php')?>
    <section class="section-container section-info-bottom comment">
      <iframe style="width:100%; height:480px; margin-top:0px;" width="300" height="480" src="https://www.youtube.com/live_chat?v=-5KAN9_CzSA&amp;embed_domain=www.ov4rz.com&dark_theme=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </section>
  </section>
</div>

<script defer src="../strim.id-ono/js/tambuah.js"></script>
<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>