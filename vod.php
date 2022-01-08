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
    <iframe width="560" height="315" src="https://www.youtube.com/embed/THQRMc6Oc30?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section>
  <section class="section-container section-video-info">
    <?php $detail_content='vod'; require ($_SERVER['STRIMID_ONO'].'module/detail-content.php')?>
    <?php $detail_content='vod'; require ($_SERVER['STRIMID'].'module/comment.php')?>
  </section>
</div>

<script defer src="../strim.id-ono/js/tambuah.js"></script>
<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>