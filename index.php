<?php 
  $template='home';
  $page='home';
  $filter='no'; 
  $search_page='search/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php require ($_SERVER['STRIMID_ONO'].'inc/header.php')?>
<link rel="stylesheet" type="text/css" href="../strim.id-ono/css/tambuah.css?<?php echo $anticache; ?>"/>

<div class="site-container">
  <?php require ($_SERVER['STRIMID_ONO'].'module/profile-streamer.php')?>
  
  <section class="section-container section-video">
    <div class="video-list">
      <?php for ($i=1; $i <= 3; $i++) { ?>
        <?php $video_type='live'; require ($_SERVER['STRIMID_ONO'].'module/video-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 21; $i++) { ?>
        <?php $video_type='vod'; require ($_SERVER['STRIMID_ONO'].'module/video-list.php')?>
      <?php } ?>
    </div>
    <?php require ($_SERVER['STRIMID'].'module/now-loading.php')?>
  </section>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>