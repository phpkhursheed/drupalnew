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
      <nav id="main-navigation" class="clearfix margin-bottom40">
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
  
   

  
  <div class="row-fluid">
   <div id="main" class="span8 single single-post image-preloader">
  
    <div class="row-fluid">
    
     <!-- <div class="breadcrumb clearfix">
      <span class="base">You are here</span>
      <p><a href="index-2.html">Home</a>&nbsp;&nbsp;&rarr;&nbsp;&nbsp;<a href="blog_posts.html" title="View articles in Technology">Technology</a>&nbsp;&nbsp;&rarr;&nbsp;&nbsp;Winter Kitchen With Silver Panorama</p>
     </div> --> <!-- End Breadcrumb -->
     <?php
     $featured = field_get_items('node', $node, 'field_featuredimage');
      //echo "<pre>";
      //print_r($featured); die; 
     ?>
     
     <figure class="head-section">
      <img src="http://drupalnews.lan:81/sites/default/files/<?php echo $featured['0']['filename']; ?>" alt="Image" />
      <div class="head-section-content">
       
       <!-- <h1>Winter Kitchen With Silver Panorama</h1> -->
       <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1>
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
       
      </div>
     </figure>
     
     <div class="content">

     
      <?php print render($page['content']); ?>

    <div class="tags">
       <strong>Tags:</strong>&nbsp;
       <a href="blog_posts.html" title="View posts in technology">technology</a>
       <a href="blog_posts.html" title="View posts in web">web</a>
       <a href="blog_posts.html" title="View posts in design">design</a>
       <a href="blog_posts.html" title="View posts in inspiration">inspiration</a>
       <a href="blog_posts.html" title="View posts in kitchen">kitchen</a>
       <a href="blog_posts.html" title="View posts in panorama">panorama</a>
      </div> <!-- End Tags -->
      
     </div> <!-- End Content -->
     
     <div class="sep-border"></div> <!-- Separator -->
     
     <div class="post-author clearfix">
      <h4>About The Author</h4>
      <figure><img src="/<?php echo $featured; ?>/images/content/avatar/4.jpg" alt="Avatar" /></figure>
      <div class="content">
       <h5><a href="author.html" title="View author profile page">Mugiwara Kiwolen</a></h5>
       <p>Sed tristique rhoncus dolor a porta. Nunc suscipit condimentum ultrices. Fusce non arcu urna. Duis iaculis tellus id felis fringilla commodo. Vivamus aliquet ullamcorper sagittis. Aliquam facilisis diam qus nibh euismod et varius enim gravida. Etiam elementum condimentum volutpat.</p>
      </div>
     </div> <!-- End Post Author -->
     
     <div class="sep-border no-margin-bottom"></div> <!-- Separator -->
     
     <div class="prevnext-posts clearfix">
      <a href="#" class="prev">
       <p>Previous Post</p>
       <p class="title">Alvear Art Black and White Theme</p>
      </a>
      <a href="#" class="next">
       <p>Next Post</p>
       <p class="title">Platform House with Minimal Design</p>
      </a>
     </div> <!-- End PrevNext-Posts -->
     
     <div class="sep-border no-margin-top"></div> <!-- Separator -->
     
     <div class="related-posts">
      <h3>Related Posts</h3>
     
      <!-- One -->
      <div class="item span3 no-margin-left">
       <a href="single_post.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/4.jpg" alt="Thumbnail 1" />
         <div class="figure-hover-masked">
          <p class="icon-plus"></p>
         </div>
        </figure>
       </a>
       <p>Small Market and St. Sebastian's Square in Opole</p>
      </div>
    
      <!-- Two -->
      <div class="item span3">
       <a href="single_post.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/5.jpg" alt="Thumbnail 2" />
         <div class="figure-hover-masked">
          <p class="icon-plus"></p>
         </div>
        </figure>
       </a>
       <p>Living Room in Italy</p>
      </div>
    
      <!-- Three -->
      <div class="item span3">
       <a href="single_post.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/6.jpg" alt="Thumbnail 3" />
         <div class="figure-hover-masked">
          <p class="icon-plus"></p>
         </div>
        </figure>
       </a>
       <p>Platform House with Minimal Design</p>
      </div>

      <!-- Four -->
      <div class="item span3">
       <a href="single_post.html">
        <figure class="figure-hover">
         <img src="/<?php echo $directory; ?>/images/content/300/7.jpg" alt="Thumbnail 4" />
         <div class="figure-hover-masked">
          <p class="icon-plus"></p>
         </div>
        </figure>
       </a>
       <p>Mosaic Pool is Very Amazing And Beautiful</p>
      </div>
     
     </div> <!-- End Related-Posts -->
     
     <div class="sep-border"></div> <!-- Separator -->
     
     <div id="comments">
      
      <div class="comment-lists">
       <h4>8 Comments To This Article</h4>
       
       <ul>
        <li> <!-- One -->
         <figure><img src="/<?php echo $directory; ?>/images/content/avatar/1.jpg" alt="Avatar 1" /></figure>
         <div class="content">
          <h5><a href="#">Amah Syner Holland</a></h5>
          <p class="meta">on Sep 12th, 2012 at 3:05 PM - <strong><a href="#">Reply</a></strong></p>
          <span class="comment-id">1</span>
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum semper nulla vitae diam lobortis interdum varius arcu tincidunt. Quisque sed nisi vel lorem blandit pharetra.</p>
         </div>
        </li>
        <li class="children"> <!-- Two -->
         <figure><img src="/<?php echo $directory; ?>/images/content/avatar/2.jpg" alt="Avatar 2" /></figure>
         <div class="content">
          <h5><a href="#">Mugiwara Kiwolen</a></h5>
          <p class="meta">on Sep 12th, 2012 at 3:05 PM - <strong><a href="#">Reply</a></strong></p>
          <span class="comment-id">2</span>
          <p class="text">Vivamus mollis blandit elit, nec lobortis tellus laoreet id. Integer sodales, lorem eu pellentesque scelerisque, urna orci lobortis mauris, sed facilisis mi est eu enim.</p>
         </div>
         
         <ul>
          <li class="children"> <!-- Three -->
           <figure><img src="/<?php echo $directory; ?>/images/content/avatar/1.jpg" alt="Avatar 3" /></figure>
           <div class="content">
            <h5><a href="#">Amah Syner Holland</a></h5>
            <p class="meta">on Sep 12th, 2012 at 3:05 PM - <strong><a href="#">Reply</a></strong></p>
            <span class="comment-id">3</span>
            <p class="text">Aenean felis tellus, consequat nec hendrerit a, ornare quis arcu. Aenean imperdiet sem nec mauris bibendum tristique.</p>
           </div>
           
           <ul>
            <li> <!-- Four -->
             <figure><img src="/<?php echo $directory; ?>/images/content/avatar/2.jpg" alt="Avatar 4" /></figure>
             <div class="content">
              <h5><a href="#">Mugiwara Kiwolen</a></h5>
              <p class="meta">on Sep 12th, 2012 at 3:05 PM</p>
              <span class="comment-id">4</span>
              <p class="text">Etiam eros erat, feugiat ac fringilla sed, ultricies sed tellus. Suspendisse nisi sem, rhoncus sit amet malesuada nec, placerat ut magna. Morbi gravida lacus massa, quis tincidunt nisi. Sed porttitor ullamcorper fringilla.</p>
             </div>
            </li>
            <li class="no-padding-bottom"> <!-- Five -->
             <figure><img src="/<?php echo $directory; ?>/images/content/avatar/4.jpg" alt="Avatar 5" /></figure>
             <div class="content">
              <h5>Rendy Jagerjack</h5>
              <p class="meta">on Sep 12th, 2012 at 3:05 PM</p>
              <span class="comment-id">5</span>
              <p class="text">Etiam metus lectus, facilisis non imperdiet sit amet, fermentum vitae leo. Ut elit ante, euismod vel interdum non, bibendum eu risus. Etiam laoreet, metus id sodales sodales, ligula lectus sagittis ante, quis pretium dui est ut sem. Aenean sed lorem vitae turpis aliquam vehicula in quis dui.</p>
             </div>
            </li>
           </ul>
           
          </li>
          <li class="no-padding-bottom"> <!-- Six -->
           <figure><img src="/<?php echo $directory; ?>/images/content/avatar/3.jpg" alt="Avatar 6" /></figure>
           <div class="content">
            <h5>John Donn</h5>
            <p class="meta">on Sep 12th, 2012 at 3:05 PM - <strong><a href="#">Reply</a></strong></p>
            <span class="comment-id">6</span>
            <p class="text">Etiam risus ligula, elementum et fringilla eget, porta id neque. Quisque tellus turpis, ultrices a aliquet at, pellentesque a nibh. Ut feugiat interdum dui, non lacinia nulla vestibulum a.</p>
           </div>
          </li>
         </ul>
         
        </li>
        <li> <!-- Seven -->
         <figure><img src="/<?php echo $directory; ?>/images/content/avatar/2.jpg" alt="Avatar 7" /></figure>
         <div class="content">
          <h5><a href="#">Mugiwara Kiwolen</a></h5>
          <p class="meta">on Sep 12th, 2012 at 3:05 PM - <strong><a href="#">Reply</a></strong></p>
          <span class="comment-id">7</span>
          <p class="text">Praesent mattis mauris urna. Suspendisse vulputate, urna sit amet laoreet iaculis, magna urna porttitor justo, vel pretium sapien turpis nec turpis.</p>
         </div>
        </li>
        <li> <!-- Eight -->
         <figure><img src="/<?php echo $directory; ?>/images/content/avatar/4.jpg" alt="Avatar 8" /></figure>
         <div class="content">
          <h5>Rendy Jagerjack</h5>
          <p class="meta">on Sep 12th, 2012 at 3:05 PM - <strong><a href="#">Reply</a></strong></p>
          <span class="comment-id">8</span>
          <p class="text">Pellentesque sed eros sit amet eros congue dictum. Nullam fringilla adipiscing placerat. Mauris feugiat elit et nisi dapibus sodales. Aenean pulvinar odio non sapien tincidunt pellentesque. Donec ac elit ut mi suscipit mattis. In hac habitasse platea dictumst. Fusce nunc lectus, condimentum id interdum quis, ullamcorper posuere nulla.</p>
         </div>
        </li>
       </ul>
      </div> <!-- End Comment-Lists -->
      
      <div class="form-comment">
       <h4>Leave a Reply</h4>
       <p>Your email address will not be published. Required fields are marked <span class="font-required">*</span></p>
       <form method="post" action="#">
        <label>Name <span class="font-required">*</span></label>
        <input type="text" name="name" />
        <label>Email <span class="font-required">*</span></label>
        <input type="text" name="email" />
        <label>Website</label>
        <input type="text" name="webiste" />
        <label>Message <span class="font-required">*</span></label>
        <textarea name="message"></textarea>
        <input type="submit" name="submit" value="Submit Comment" />
       </form>
      </div> <!-- End Form-Comment -->
     </div> <!-- End Comments -->
   
    </div> <!-- End Row-Fluid -->
   </div> <!-- End Main -->
  
   <div id="sidebar" class="span4">
  
    <div class="widget clearfix">
     <ul class="social-subscribers">
      <li>
       <a href="#" data-original-title="Like us on Facebook"><img src="/<?php echo $directory; ?>/images/social/somacro/facebook.png" alt="Facebook" /></a>
       <p>25,645<i>likes</i></p>
      </li>
      <li>
       <a href="#" data-original-title="Follow us on Twitter"><img src="/<?php echo $directory; ?>/images/social/somacro/twitter.png" alt="Twitter" /></a>
       <p>8,480<i>followers</i></p>
      </li>
      <li>
       <a href="#" data-original-title="Subscribe our RSS Feed"><img src="/<?php echo $directory; ?>/images/social/somacro/rss.png" alt="RSS" /></a>
       <p>17,289<i>subscribers</i></p>
      </li>
     </ul>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="enews-tab">
    
      <!-- Tab Menu -->
      <ul class="nav nav-tabs" id="enewsTabs">
       <li class="active"><a href="#tab-populars" data-toggle="tab">Populars</a></li>
       <li><a href="#tab-recents" data-toggle="tab">Recents</a></li>
       <li><a href="#tab-comments" data-toggle="tab">Comments</a></li>
      </ul>
 
      <div class="tab-content">
       <div class="tab-pane active" id="tab-populars">
       
        <!-- One -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/5.jpg" alt="Thumbnail 1" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Small Market and St. Sebastian's Square in Opole">Small Market and St. Sebastian's Square in Opole</a></h4>
          <p class="meta">7,849 views&nbsp;&nbsp;|&nbsp;&nbsp;49 comments</p>
         </div>
        </div>
       
        <!-- Two -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/12.jpg" alt="Thumbnail 2" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Living Room in Italy">Living Room in Italy</a></h4>
          <p class="meta">6,988 views&nbsp;&nbsp;|&nbsp;&nbsp;42 comments</p>
         </div>
        </div>
       
        <!-- Three -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/7.jpg" alt="Thumbnail 3" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Platform House With Minimal Design">Platform House With Minimal Design</a></h4>
          <p class="meta">5,724 views&nbsp;&nbsp;|&nbsp;&nbsp;35 comments</p>
         </div>
        </div>
       
        <!-- Four -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/4.jpg" alt="Thumbnail 4" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Winter Kitchen With Silver Panorama">Winter Kitchen With Silver Panorama</a></h4>
          <p class="meta">5,198 views&nbsp;&nbsp;|&nbsp;&nbsp;39 comments</p>
         </div>
        </div>
       
        <!-- Five -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/9.jpg" alt="Thumbnail 5" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></h4>
          <p class="meta">4,276 views&nbsp;&nbsp;|&nbsp;&nbsp;22 comments</p>
         </div>
        </div>
       
       </div> <!-- End Populars -->
      
       <div class="tab-pane" id="tab-recents">
       
        <!-- One -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/2.jpg" alt="Thumbnail 1" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Alvear Art Black and White Theme">Alvear Art Black and White Theme</a></h4>
          <p class="meta">In <a href="blog_posts.html">Technology</a> on Jan. 14, 2013</p>
         </div>
        </div>
       
        <!-- Two -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/5.jpg" alt="Thumbnail 2" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></h4>
          <p class="meta">In <a href="blog_posts.html">Education</a> on Jan. 13, 2013</p>
         </div>
        </div>
       
        <!-- Three -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/4.jpg" alt="Thumbnail 3" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Living Room in Italy">Living Room in Italy</a></h4>
          <p class="meta">In <a href="blog_posts.html">Entertainment</a> on Jan. 12, 2013</p>
         </div>
        </div>
       
        <!-- Four -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/11.jpg" alt="Thumbnail 4" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Mosaic Pool is Amazing And Beautiful Place">Mosaic Pool is Amazing And Beautiful Place</a></h4>
          <p class="meta">In <a href="blog_posts.html">Education</a> on Jan. 11, 2013</p>
         </div>
        </div>
       
        <!-- Five -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/300/8.jpg" alt="Thumbnail 5" /></figure>
         <div class="pull-right content">
          <h4><a href="single_post.html" title="View permalink Platform House with Minimal Design">Platform House with Minimal Design</a></h4>
          <p class="meta">In <a href="blog_posts.html">Business</a> on Jan. 10, 2013</p>
         </div>
        </div>
       
       </div> <!-- End Recents -->
      
       <div class="tab-pane" id="tab-comments">
       
        <!-- One -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/avatar/1.jpg" alt="Avatar 1" /></figure>
         <div class="pull-right content">
          <p><a href="#">mdkiwol</a> on <a href="single_post.html" title="View comment on Glass House Below The Dark of Moon Light">Glass House Below The Dark of Moon Light</a></p>
         </div>
        </div>
       
        <!-- Two -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/avatar/2.jpg" alt="Avatar 2" /></figure>
         <div class="pull-right content">
          <p><a href="#">holland</a> on <a href="single_post.html" title="View comment on Winter Kitchen with Silver Panorama">Winter Kitchen with Silver Panorama</a></p>
         </div>
        </div>
       
        <!-- Three -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/avatar/3.jpg" alt="Avatar 3" /></figure>
         <div class="pull-right content">
          <p><a href="#">jagerjack</a> on <a href="single_post.html" title="View comment on Mosaic Pool is Very Amazing And Beautiful">Mosaic Pool is Very Amazing And Beautiful</a></p>
         </div>
        </div>
       
        <!-- Four -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/avatar/4.jpg" alt="Avatar 4" /></figure>
         <div class="pull-right content">
          <p><a href="#">john</a> on <a href="single_post.html" title="View comment on House in The Woods">House in The Woods</a></p>
         </div>
        </div>
       
        <!-- Five -->
        <div class="item">
         <figure class="pull-left"><img src="/<?php echo $directory; ?>/images/content/avatar/3.jpg" alt="Avatar 5" /></figure>
         <div class="pull-right content">
          <p><a href="#">jagerjack</a> on <a href="single_post.html" title="View comment on Camerette - Your Time to Explore">Camerette - Your Time to Explore</a></p>
         </div>
        </div>
       
       </div> <!-- End Comments -->
      </div> <!-- End Tab-Content -->
     
     </div> <!-- End Enews-Tab --> 
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="sponsors">
     
      <div class="header">
       <h4>Sponsors</h4>
      </div>
     
      <div class="content">  
       <img src="/<?php echo $directory; ?>/images/ads/180x180.png" alt="Sponsor 1" />
       <img src="/<?php echo $directory; ?>/images/ads/180x180.png" alt="Sponsor 2" />
       <img src="/<?php echo $directory; ?>/images/ads/180x180.png" alt="Sponsor 3" />
       <img src="/<?php echo $directory; ?>/images/ads/180x180.png" alt="Sponsor 4" />
      </div>
     
     </div>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="best-picture">
    
      <div class="header">
       <h4>Best Picture</h4>
      </div>
    
      <div class="content">
       <p><a href="single_photo.html" title="View permalink House in The Woods">Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci [..]</a></p>
       
       <!-- Photo Galleries -->
       <figure class="flexslider loading">
        <ul class="slides">
         <li><img src="/<?php echo $directory; ?>/images/content/full/4.jpg" alt="Thumbnail 1" /></li>
         <li><img src="/<?php echo $directory; ?>/images/content/full/9.jpg" alt="Thumbnail 2" /></li>
         <li><img src="/<?php echo $directory; ?>/images/content/full/2.jpg" alt="Thumbnail 3" /></li>
        </ul>
       </figure>
       
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 7, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_video.html">15 comments</a></div>
      </div>
     
     </div>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="subscribe-form">
    
      <div class="header">
       <h4>Subscribe Us</h4>
      </div>
    
      <div class="content">
       <p>You can stay up-to-date with our latest news with subscribe our newsletter.</p>
       <form name="subscribe-form" id="enews-subscribe-form" method="post" action="#">
        <input type="text" name="email_address" placeholder="ex: your_email@domain.com" />
        <input type="submit" name="submit" value="Send" />
       </form>
      </div>
     
     </div>
    </div> <!-- End Widget -->
   
    <div class="widget clearfix">
     <div class="best-video">
    
      <div class="header">
       <h4>Video of The Week</h4>
      </div>
    
      <div class="content">
       <p><a href="single_video.html" title="View permalink Devil May Cry Launch Trailer">Aenean dictum pharetra nibh, sodales luctus felis aliquet at. Nulla vulputate venenatis orci [..]</a></p>
       <figure><iframe height="240" src="http://www.youtube.com/embed/psSqNRaHBgk?feature=player_detailpage"></iframe></figure>
       <div class="meta">By <a href="author.html">mdkiwol</a>&nbsp;&nbsp;|&nbsp;&nbsp;Jan. 12, 2013&nbsp;&nbsp;|&nbsp;&nbsp;<a href="single_video.html">15 comments</a></div>
      </div>
     
     </div>
    </div> <!-- End Widget -->
  
   </div> <!-- End Sidebar -->
  
  </div> <!-- End Row-Fluid -->
 </div> <!-- End Container -->
 
 <div id="bottom">
  <div class="container">
   <div class="row-fluid">
   
    <div class="span3 widget clearfix">
     <div class="header">
      <h4>About Us</h4>
     </div>
     
     <div class="content">
      <p>Donec dignissim leo sit amet nisl luctus vestibulum. Morbi tortor arcu, aliquet nec aliquet at, convallis ut eros. Sed non tellus mauris, vitae congue ante.</p>
      <p>Nunc imperdiet malesuada pharetra. Duis sodales, arcu tempus rutrum consectetur, sem ante auctor eros, in vehicula magna mauris sit amet est. Mauris ac eros arcu.</p>
     </div>
    </div> <!-- End Widget -->
    
    <div class="span3 widget clearfix">
     <div class="tags-cloud">
      
      <div class="header">
       <h4>Tags Cloud</h4>
      </div>
      
      <ul>
       <li><a href="blog_posts.html">windows</a></li>
       <li><a href="blog_posts.html">apple</a></li>
       <li><a href="blog_posts.html">software</a></li>
       <li><a href="blog_posts.html">hardware</a></li>
       <li><a href="blog_posts.html">gadget</a></li>
       <li><a href="blog_posts.html">smartphone</a></li>
       <li><a href="blog_posts.html">laptop</a></li>
       <li><a href="blog_posts.html">business</a></li>
       <li><a href="blog_posts.html">learn</a></li>
       <li><a href="blog_posts.html">study</a></li>
       <li><a href="blog_posts.html">game</a></li>
       <li><a href="blog_posts.html">movie</a></li>
       <li><a href="blog_posts.html">event</a></li>
      </ul>
      
     </div>
    </div> <!-- End Widget -->
    
    <div class="span3 widget clearfix">
     <div class="tweets">
      
      <div class="header">
       <h4>Latest Tweets</h4>
      </div>
      
      <ul>
       <li>
        <span class="picons"><!-- --></span>
        <p><a href="#">@realt0rlife</a> That's a very good question :) You may want to contact the author. There's a form on the right when you click their name.</p>
        <span class="date">- 10 hours ago</span>
       </li>
       <li>
        <span class="picons"><!-- --></span>
        <p><a href="#">@ghostpool</a> Have you opened a support ticket yet? Can you send methe ticket number? Thanks!</p>
        <span class="date">- 2 days ago</span>
       </li>
      </ul>
      
     </div>
    </div> <!-- End Widget -->
    
    <div class="span3 widget clearfix">
     <div class="flickr-photos">
      
      <div class="header">
       <h4>Flickr Photos</h4>
      </div>
      
      <ul id="flickr-gallery"><!-- --></ul>
      
     </div>
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
