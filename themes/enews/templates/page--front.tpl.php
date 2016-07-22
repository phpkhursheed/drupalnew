<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div class="theme-layout"> <!-- Stretched/Boxed Layout -->

 <div id="top-navigation">
  <div class="container">
 <?php print theme('links', array('links' => menu_navigation_links('menu-headermenu'), 'attributes' => array('class'=> array('nav-menu', 'pull-left')) ));?>
    
       
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
  
  
  
  <div id="highlight-posts" class="clearfix">
   <ul>
   
    <li class="masked masked-big"> <!-- One -->
     <div class="flexslider highlight-one loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(images/content/full/5.jpg);"></figure></li>
       <li><figure style="background-image:url(images/content/full/4.jpg);"></figure></li>
       <li><figure style="background-image:url(images/content/full/9.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Alvear Art Black and White Theme"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-violet"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Alvear Art Black and White Theme</h2>
      <span class="meta">By mdkiwol on Jan. 14, 2013</span>
      <p>Suspendisse ornare luctus tempus. Nulla nec orci erat, sed consequat lacus. Curabitur vel odio eu sapien fermentum placerat pharetra ac lectus. Ut erat sapien, lobortis nec mattis eget, tempus sit amet elit. Duis gravida tincidunt fermentum. Etiam metus lectus, facilisis non imperdiet sit amet, fermentum vitae leo [...]</p>
     </div>
    </li>
    
    <li class="masked masked-small"> <!-- Two -->
     <div class="flexslider highlight-two loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(images/content/600/11.jpg);"></figure></li>
       <li><figure style="background-image:url(images/content/600/2.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Camerette - Your Time to Explore"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-red"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Camerette - Your Time to Explore</h2>
      <span class="meta">By jagerjack on Jan. 13, 2013</span>
     </div> 
    </li>
    
    <li class="masked masked-small"> <!-- Three -->
     <div class="flexslider highlight-three loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(images/content/600/3.jpg);"></figure></li>
       <li><figure style="background-image:url(images/content/600/1.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Living room in Italy"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-blue"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Living room in Italy</h2>
      <span class="meta">By amaah on Jan. 12, 2013</span>
     </div> 
    </li>
    
    <li class="masked masked-small no-margin-bottom"> <!-- Four -->
     <div class="flexslider highlight-four loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(images/content/600/8.jpg);"></figure></li>
       <li><figure style="background-image:url(images/content/600/7.jpg);"></figure></li>
       <li><figure style="background-image:url(images/content/600/6.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Mosaic Pool is Amazing And Beautiful Place"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-orange"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Mosaic Pool is Amazing And Beautiful Place</h2>
      <span class="meta">By john on Jan. 11, 2013</span>
     </div> 
    </li>
    
   </ul>
  </div> <!-- End Highlight Posts -->
  
  <div class="headlines clearfix">
   <span class="base">30<i>Tue</i></span>
   <div class="text-rotator">
    <div><a href="single_post.html" title="View permalink Small Market and St. Sebastian's Square in Opole">Small Market and St. Sebastian's Square in Opole</a></div>
    <div><a href="single_post.html" title="View permalink Mosaic Pool is Amazing And Beautiful Place">Mosaic Pool is Amazing And Beautiful Place</a></div>
    <div><a href="single_post.html" title="View permalink Glass House Below The Dark of Moon Light">Glass House Below The Dark of Moon Light</a></div>
    <div><a href="single_post.html" title="View permalink Platform House with Minimal Design">Platform House with Minimal Design</a></div>
    <div><a href="single_post.html" title="View permalink Winter Kitchen with Silver Panorama">Winter Kitchen with Silver Panorama</a></div>
   </div>
  </div> <!-- End Headlines -->
  
  <div class="row-fluid">
   <div id="main" class="span8 image-preloader">
  
    <div class="row-fluid">
   
     <!-- One -->
     <div class="span6 post no-margin-left">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/1.jpg" alt="Thumbnail 1" />
       <div class="cat-name">
        <span class="base">Technology</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Camerette - Your Time to Dream">Camerette - Your Time to Dream</a></h2>
       <p>Suspendisse ornare luctus tempus. Nulla nec orci erat, sed consequat lacus. Curabitur vel odio eu sapien fermentum placerat pharetra ac lectus. Ut erat sapien, lobortis nec mattis.</p>
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 14, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">15 comments</a></div>
      </div>
     </div>
   
     <!-- Two -->
     <div class="span6 post">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/2.jpg" alt="Thumbnail 2" />
       <div class="cat-name">
        <span class="base">Business</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Glass House Below The Dark of Moon Light">Glass House Below The Dark of Moon Light</a></h2>
       <p>Praesent mattis mauris urna. Suspendisse vuputa, urna sit amet laoreet iaculis, magna urna porttitor justo, vel pretium sapien urpis nec turpis. Integer nec consectetur odio.</p>
       <div class="meta">By <a href="author.html">jagerjack</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 13, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">8 comments</a></div>
      </div>
     </div>
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
   
     <!-- Three -->
     <div class="span6 post no-margin-left">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/3.jpg" alt="Thumbnail 3" />
       <div class="cat-name">
        <span class="base">Education</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink House in The Woods">House in The Woods</a></h2>
       <p>Pellentesque sed eros sit amet eros congue dium. Nullam fringilla adipiscing placerat. Mauris feugiat elit et nisi dapibus sodales. Aenean pulvinar odio non sapien tincidunt pellentesque.</p>
       <div class="meta">By <a href="author.html">Joh Donn</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 12, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">12 comments</a></div>
      </div>
     </div>
   
     <!-- Review Posts -->
     <div class="span6 home-reviews">
    
      <!-- Header -->
      <div class="header">
       <div class="base">
        <h4>Reviews</h4>
        <a href="blog_reviews.html" title="View all reviews">more reviews....</a>
       </div>
       <div class="arrow arrow-left"></div>
       <div class="arrow arrow-right"></div>
      </div>
    
      <!-- One -->
      <div class="item">
       <a href="single_review.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/7.jpg" alt="Thumbnail 1" />
         <div class="base-val">70%</div>
         <div class="figure-hover-masked">
          <p class="icon-plus-small"></p>
         </div>
        </figure>
       </a>
       <div class="content">
        <p><a href="single_review.html" title="View permalink Small Market and St. Sebastian's Square in Opole">Small Market and St. Sebastian's Square in Opole</a> <i>by mdkiwol</i></p>
        <div class="base-rate">
         <div class="rate-val" style="width:70%;"></div>
        </div>
       </div>
      </div>
    
      <!-- Two -->
      <div class="item">
       <a href="single_review.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/8.jpg" alt="Thumbnail 2" />
         <div class="base-val">5.5</div>
         <div class="figure-hover-masked">
          <p class="icon-plus-small"></p>
         </div>
        </figure>
       </a>
       <div class="content">
        <p><a href="single_review.html" title="View permalink Living Room in Italy">Living Room in Italy</a> <i>by john</i></p>
        <div class="base-rate">
         <div class="rate-val" style="width:55%;"></div>
        </div>
       </div>
      </div>
    
      <!-- Three -->
      <div class="item">
       <a href="single_review.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/9.jpg" alt="Thumbnail 3" />
         <div class="base-val">100</div>
         <div class="figure-hover-masked">
          <p class="icon-plus-small"></p>
         </div>
        </figure>
       </a>
       <div class="content">
        <p><a href="single_review.html" title="View permalink Platform House With Minimal Design">Platform House With Minimal Design</a> <i>by jagerjack</i></p>
        <div class="base-rate">
         <div class="rate-val" style="width:100%;"></div>
        </div>
       </div>
      </div>
    
     </div> <!-- End Reviews -->
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
   
     <!-- Four -->
     <div class="span6 post no-margin-left">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/4.jpg" alt="Thumbnail 4" />
       <div class="cat-name">
        <span class="base">Technology</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></h2>
       <p>Sed tristique rhoncus dolor a porta. Nunc suscipit condimentum ultrices. Fusce non arcu urna. Duis iaculis tellus id felis fringilla commodo. Vivamus quet ullamcorper sagittis.</p>
       <div class="meta">By <a href="author.html">amaah</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 11, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">3 comments</a></div>
      </div>
     </div>
   
     <!-- Five -->
     <div class="span6 post">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/5.jpg" alt="Thumbnail 5" />
       <div class="cat-name">
        <span class="base">Business</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Winter Kitchen with Silver Panorama">Winter Kitchen with Silver Panorama</a></h2>
       <p>Fusce vehicula sapien sed dolor semper gravida. Nam mollis, nisl vel mollis condimentum, arcu lorem varius ipsum, eget vulputate nisl ligula sit amet metus. Duis ac magna neque, congue tristique risus.</p>
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 10, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">3 comments</a></div>
      </div>
     </div>
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
       
     <!-- Six -->
     <div class="span6 post no-margin-left">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/6.jpg" alt="Thumbnail 6" />
       <div class="cat-name">
        <span class="base">Education</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Casa en la costa del uno">Casa en la costa del uno</a></h2>
       <p>Praesent mattis mauris urna. Suspendisse vuputa, urna sit amet laoreet iaculis, magna urna porttitor justo, vel pretium sapien urpis nec turpis. Integer nec consectetur odio.</p>
       <div class="meta">By <a href="author.html">jagerjack</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 9, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">3 comments</a></div>
      </div>
     </div>
   
     <!-- Seven -->
     <div class="span6 post">
      <figure>
       <img src="/<?php echo $directory; ?>/images/content/600/7.jpg" alt="Thumbnail 7" />
       <div class="cat-name">
        <span class="base">Entertainment</span>
        <span class="arrow"></span>
       </div>
      </figure>
      <div class="text">
       <h2><a href="single_post.html" title="View permalink Mosaic Pool is Very Amazing And Beautiful">Mosaic Pool is Very Amazing And Beautiful</a></h2>
       <p>Pellentesque sed eros sit amet eros congue dium. Nullam fringilla adipiscing placerat. Mauris feugiat elit et nisi dapibus sodales. Aenean pulvinar odio non sapien tincidunt pellentesque.</p>
       <div class="meta">By <a href="author.html">amaah</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 8, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_post.html">3 comments</a></div>
      </div>
     </div>
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
   
     <!-- Gallery Posts -->
     <div class="home-galleries no-margin-left">
    
      <!-- Header -->
      <div class="header">
       <div class="base">
        <h4>Galleries</h4>
        <div class="nav-control">
         <span class="previous"></span><span class="next"></span>
        </div>
       </div>
       <div class="arrow arrow-left"></div>
       <div class="arrow arrow-right"></div>
      </div>
    
      <!-- One -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="/<?php echo $directory; ?>/images/content/300/3.jpg" alt="Thumbnail 1" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Small Market and St. Sebastian's Square in Opole</p>
      </div>
    
      <!-- Two -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="/<?php echo $directory; ?>/images/content/300/10.jpg" alt="Thumbnail 2" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Living Room in Italy</p>
      </div>
      
      <div class="clearfix"></div> <!-- Clearfix -->
    
      <!-- Three -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="/<?php echo $directory; ?>/images/content/300/11.jpg" alt="Thumbnail 3" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Platform House with Minimal Design</p>
      </div>
    
      <!-- Four -->
      <div class="item">
       <figure class="figure-overlay figure-overlay-icon">
        <a href="single_photo.html">
         <img src="/<?php echo $directory; ?>/images/content/300/12.jpg" alt="Thumbnail 4" />
         <div><p class="icon-plus"></p></div>
        </a>
       </figure>
       <p>Mosaic Pool is Very Amazing And Beautiful</p>
      </div>
    
     </div> <!-- End Galleries -->
   
     <div class="clearfix ie-sep"></div> <!-- Clearfix -->
   
     <nav class="nav-pagination">
      <ul>
       <li class="active"><a href="#">1</a></li>
       <li><a href="#">2</a></li>
       <li><a href="#">3</a></li>
       <li><a href="#">4</a></li>
       <li><a href="#">5</a></li>
       <li><a href="#">6</a></li>
       <li><a href="#">7</a></li>
       <li><a href="#">8</a></li>
       <li><a href="#">9</a></li>
       <li><a href="#">10</a></li>
       <li class="empty-space">....</li>
       <li><a href="#">17</a></li>
      </ul>
      <p>Page 1 of 17</p>
     </nav> <!-- End Nav-Pagination -->
   
    </div> <!-- End Row-Fluid -->
   </div> <!-- End Main -->
  
   
  
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar" class="span4">

        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>
  
  
  
  </div> <!-- End Row-Fluid -->
 </div> <!-- End Container -->
 
 <div id="bottom">
  <div class="container">
   <div class="row-fluid">
   
    <div class="span3 widget clearfix">
     
     <div class="content">
      <!-- <p>Donec dignissim leo sit amet nisl luctus vestibulum. Morbi tortor arcu, aliquet nec aliquet at, convallis ut eros. Sed non tellus mauris, vitae congue ante.</p>
      <p>Nunc imperdiet malesuada pharetra. Duis sodales, arcu tempus rutrum consectetur, sem ante auctor eros, in vehicula magna mauris sit amet est. Mauris ac eros arcu.</p> -->
      <?php print render($page['footer_firstcolumn']); ?>
     </div>
    </div> <!-- End Widget -->
    
    <div class="span3 widget clearfix">
    
      
      
      <?php print render($page['footer_secondcolumn']); ?>
      
     </div>

    
    <div class="span3 widget clearfix">
     
      
      <?php print render($page['footer_thirdcolumn']); ?>

      
     
    </div> <!-- End Widget -->
    
    <div class="span3 widget clearfix">
     <?php print render($page['footer_fourthcolumn']); ?>
    </div> <!-- End Widget -->
   
   </div> <!-- End Row-Fluid -->
  </div> <!-- End Container -->
 </div> <!-- End Bottom -->
  
 <div id="footer">
  <div class="container">
   
   <p class="pull-left">Copyright 2013 Dots Theme&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Dots Theme</a></p>
   <ul class="social pull-right">
    <li><a href="#" title="Youtube"><img src="/<?php echo $directory; ?>/images/social/f0101/youtube.png" alt="Youtube" /></a></li>
    <li><a href="#" title="LinkedIn"><img src="/<?php echo $directory; ?>/images/social/f0101/linkedin.png" alt="LinkedIn" /></a></li>
    <li><a href="#" title="Vimeo"><img src="/<?php echo $directory; ?>/images/social/f0101/vimeo.png" alt="Vimeo" /></a></li>
    <li><a href="#" title="Tumblr"><img src="/<?php echo $directory; ?>/images/social/f0101/tumblr.png" alt="Tumblr" /></a></li>
    <li><a href="#" title="Flickr"><img src="/<?php echo $directory; ?>/images/social/f0101/flickr.png" alt="Flickr" /></a></li>
    <li><a href="#" title="DeviantArt"><img src="/<?php echo $directory; ?>/images/social/f0101/deviantart.png" alt="DeviantArt" /></a></li>
    <li><a href="#" title="Delicious"><img src="/<?php echo $directory; ?>/images/social/f0101/delicious.png" alt="Delicious" /></a></li>
    <li><a href="#" title="Facebook"><img src="/<?php echo $directory; ?>/images/social/f0101/facebook.png" alt="Facebook" /></a></li>
    <li><a href="#" title="Twitter"><img src="/<?php echo $directory; ?>/images/social/f0101/twitter.png" alt="Twitter" /></a></li>
   </ul>
   
  </div> <!-- End Container -->
 </div> <!-- End Footer -->
 
 </div> <!-- End Theme-Layout -->
