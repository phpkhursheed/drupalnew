<div class="theme-layout"> <!-- Stretched/Boxed Layout -->

 <div id="top-navigation">
  <div class="container">
  <?php if ($main_menu): ?>
      
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('nav-menu', 'pull-left'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      
    <?php endif; ?>
    
  
    
   <!-- Search Form -->
   <form name="form-search" method="post" action="http://dotstheme.com/demo/premium/enews_responsive_news_template/html/boxed/search.html" class="form-search pull-right">
    <input type="text" name="search" placeholder="Search...." class="input-icon input-icon-search" />
   </form>
    
   <!-- Social Media -->
   <ul class="social pull-right">
    <li><a href="#" data-placement="bottom" data-original-title="Find us on LinkedIn"><img src="/<?php echo $directory; ?>/images/social/infocus/linkedin-logo.png" alt="LinkedIn"></a></li>
     <li><a href="#" data-placement="bottom" data-original-title="Find us on Flickr"><img src="/<?php echo $directory; ?>/images/social/infocus/flickr.png" alt="Flickr"></a></li>
     <li><a href="#" data-placement="bottom" data-original-title="Like us on Facebook"><img src="/<?php echo $directory; ?>/images/social/infocus/facebook-logo.png" alt="Facebook"></a></li>
     <li><a href="#" data-placement="bottom" data-original-title="Follow on DeviantArt"><img src="/<?php echo $directory; ?>/images/social/infocus/deviantart.png" alt="DeviantArt"></a></li>
    <li><a href="#" data-placement="bottom" data-original-title="Follow on Twitter"><img src="/<?php echo $directory; ?>/images/social/infocus/twitter.png" alt="Twitter"></a></li>
    <li><a href="#" data-placement="bottom" data-original-title="Follow on Stumbleupon"><img src="/<?php echo $directory; ?>/images/social/infocus/stumbleupon.png" alt="Stumbleupon"></a></li>
    <li><a href="#" data-placement="bottom" data-original-title="Call us via Skype"><img src="/<?php echo $directory; ?>/images/social/infocus/skype.png" alt="Skype"></a></li>
   </ul>
   
  </div> <!-- End Container -->
 </div> <!-- End Top-Navigation -->
 
 <div class="container">
  <header id="header" class="clearfix">
   
   <!-- Logo -->
   <div class="logo pull-left">
   <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    </div>
   <!-- <div class="logo pull-left">
    <a href="index-2.html"><img src="/<?php echo $directory; ?>/images/logo.png" alt="Enews" /></a>
   </div> -->
   
   <!-- Ads -->
   <div class="ads pull-right">
    <img src="/<?php echo $directory; ?>/images/ads/480x80.png" alt="Ads" />
   </div>
   
  </header> <!-- End Header -->

  <?php if ($main_menu): ?>
      <nav id="main-navigation" class="clearfix">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav> <!-- /#main-menu -->
    <?php endif; ?>
  
 