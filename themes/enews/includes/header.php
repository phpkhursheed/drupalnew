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
    
   <!-- Navigation -->
   <!-- <ul class="nav-menu pull-left">
    <li class="active"><a href="index-2.html">Home</a></li>
    <li><a href="#">Features</a>
     <div class="nav-sub-menu">
      <ul class="container">
       <li><a href="features_typography.html">Typography</a></li>
       <li><a href="features_columns.html">Columns</a></li>
       <li><a href="features_shortcodes.html">Shortcodes</a></li>
       <li><a href="features_pricing.html">Pricing Table</a></li>
       <li><a href="features_sitemap.html">Sitemap</a></li>
      </ul>
     </div>
    </li>
    <li><a href="#">Blog</a>
     <div class="nav-sub-menu">
      <ul class="container">
       <li><a href="blog_posts.html">Archives</a></li>
       <li><a href="blog_photos.html">Photos</a></li>
       <li><a href="blog_videos.html">Videos</a></li>
       <li><a href="blog_musics.html">Musics</a></li>
       <li><a href="blog_reviews.html">Reviews</a></li>
      </ul>
     </div>
    </li>
    <li><a href="#">Portofolio</a>
     <div class="nav-sub-menu">
      <ul class="container">
       <li><a href="portofolio.html">1 Column</a></li>
       <li><a href="portofolio_2.html">2 Columns</a></li>
       <li><a href="portofolio_3.html">3 Columns</a></li>
       <li><a href="portofolio_4.html">4 Columns</a></li>
       <li><a href="single_portofolio.html">Single Portofolio</a></li>
       <li><a href="single_portofolio_2.html">Single Portofolio 2</a></li>
      </ul>
     </div>
    </li>
    <li><a href="#">Pages</a>
     <div class="nav-sub-menu">
      <ul class="container">
       <li><a href="author.html">Author</a></li>
       <li><a href="404.html">404 Page</a></li>
       <li><a href="search.html">Search</a></li>
       <li><a href="index-2.html">Homepage 1</a></li>
       <li><a href="index_2.html">Homepage 2</a></li>
       <li><a href="index_3.html">Homepage 3</a></li>
       <li><a href="index_4.html">Homepage 4</a></li>
      </ul>
     </div>
    </li>
    <li><a href="contact.html">Contact</a></li>
   </ul> -->
    
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
  
  <!-- <nav id="main-navigation" class="clearfix">
   <ul>
    <li><a href="blog_posts.html">Business</a></li>
    <li><a href="blog_posts.html">Technology <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="blog_posts.html">Smartphone</a></li>
      <li><a href="blog_posts.html">Tablet</a></li>
      <li><a href="blog_posts.html">Internet</a></li>
      <li><a href="blog_posts.html">Software</a></li>
      <li><a href="blog_posts.html">Hardware</a></li>
      <li><a href="blog_posts.html">Laptop</a></li>
      <li><a href="blog_posts.html">Hot News <i class="arrow-main-nav"></i></a>
       <ul>
        <li><a href="blog_posts.html">Windows 8</a></li>
        <li><a href="blog_posts.html">Apple iPhone 5</a></li>
        <li><a href="blog_posts.html">Microsoft Surface</a></li>
        <li><a href="blog_posts.html">Nokia Lumia 920</a></li>
       </ul>
      </li>
     </ul>
    </li>
    <li><a href="blog_posts.html">Education</a></li>
    <li><a href="blog_posts.html">Entertainment</a></li>
    <li><a href="blog_photos.html">Photo <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="single_photo.html">Single Photo</a></li>
     </ul>
    </li>
    <li><a href="blog_videos.html">Video <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="single_video.html">Single Video</a></li>
     </ul>
    </li>
    <li><a href="blog_musics.html">Music <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="single_music.html">Single Music</a></li>
     </ul>
    </li>
    <li><a href="blog_reviews.html">Review <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="single_review.html">Single Review</a></li>
     </ul>
    </li>
   </ul>
  </nav> --> <!-- End Main-Navigation -->