<?php 
  $template='detail';
  $page='package';
  $filter='no'; 
  $search_page='search/'; 
  $content='live'; 
  $videopage='chat';
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php require ($_SERVER['STRIMID_ONO'].'inc/header.php')?>
<link rel="stylesheet" type="text/css" href="../strim.id-ono/css/tambuah.css?<?php echo $anticache; ?>"/>

<div class="site-container videopage">
  <div class="videopage-player">
    <?php require ($_SERVER['STRIMID'].'module/videopage-player.php')?>
  </div>
  <div class="videopage-detail">
    <?php require ($_SERVER['STRIMID_ONO'].'module/videopage-tab.php')?>
    <div class="videopage-content videopage-chat">
      <iframe style="width:100%; height:480px; margin-top:0px;" width="300" height="480" src="https://www.youtube.com/live_chat?v=-5KAN9_CzSA&amp;embed_domain=www.ov4rz.com&dark_theme=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </div>
  </div>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>