<div class="header-wrap">
  <header>
    <a class="logo" href="<?php print $front_page; ?>" title="<?php print t("Home") ?>">
      <img src="<?php print $logo; ?>" height="100%" alt="<?php print t("Home") ?>" />
    </a>
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-nav')))); ?>
    <!--<ul class="main-nav">
      <li><a href="#">ABOUT OPEN CHARITY</a></li>
      <li><a href="#">THE BLOG</a></li>
    </ul>-->
    <a href="#" class="button">JOIN US</a>
  </header>
</div>
<?php if ($is_front): ?>
<div class="banner">
    <?php print render($page['banner'])?>
  <!--
  <img src="<?php echo $base_path.$directory; ?>/images/banner1.png"/>
  <div class="banner-text">
    <h2>Sharing Ideas For Charities</h2>
    <p>Many charities’ goals are similar, as is the functionality we require, but little shared working takes place.</p>
    <p class="small">By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
    <p>Together we can make a bigger diference.</p>
  </div>
  -->
</div>
<div class="next-event">
  <div class="event">
    <?php print render($page['event'])?>
    <!--<p><span class="tittle">Next Event: </span><span class="time">June 23rd 2016  18:30 - 21:00</span></p>
    <p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
   `-->
  </div>
  <button class="button2">REGISTER</button>
</div>
<div class="get-involved-wrap">
  <div class="get-involved">
    <h2 class="region-title">GET INVOLVED</h2>
    <div class="column3">
      <dl>
        <dt><img src="<?php echo $base_path.$directory; ?>/images/Meetup.png"/></dt>
        <dd>WE DO MEETINGS</dd>
        <dd>We organise our meetings through the OpenCharity MeetUp group</dd>
        <dd><button class="button">MEETUP GROUP</button></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $base_path.$directory; ?>/images/Slack.png"/></dt>
        <dd>WE COLLABORATE</dd>
        <dd>OpenCharity have a slack group for daily collaboration</dd>
        <dd><button class="button">SLACK GROUP</button></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $base_path.$directory; ?>/images/Share.png"/></dt>
        <dd>WE SHARE</dd>
        <dd>We have a Google Group set up to share tools and documents</dd>
        <dd><button class="button">GOOGLE GROUP</button></dd>
      </dl>
    </div>
  </div>
</div>
<div class="our-mission">
  <h2 class="region-title">OUR MISSION</h2>
  <p class="declare">Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space.</p>
  <p class="declare2">If you are a charity or a supplier, we are ready to welcome you.</p>
  <div class="column3">
    <dl>
      <dt><img src="<?php echo $base_path.$directory; ?>/images/Bulb.png"/></dt>
      <dd>We help charities</dd>
      <dd>share knowledge and working practice to make the best technology choices.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $base_path.$directory; ?>/images/Group.png"/></dt>
      <dd>We bring together</dd>
      <dd>charities and suppliers to the charity sector to share best practices.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $base_path.$directory; ?>/images/Like.png"/></dt>
      <dd>We encourage</dd>
      <dd>collaboration and innovation for the good of the charity sector.</dd>
    </dl>
  </div>
  <hr class="hr1"/>
</div>
<div class="our-members">
  <h2 class="region-title">OUR MEMBERS</h2>
  <div class="slider">
    <div><img src="<?php echo $base_path.$directory; ?>/images/Cancer Research.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/cc-standard-full-colour.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/KopLogo.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/ZingLogo.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/ComicRelief.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/KopLogo.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/ZingLogo.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/ComicRelief.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/Cancer Research.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/cc-standard-full-colour.png"/></div>
    <div><img src="<?php echo $base_path.$directory; ?>/images/KopLogo.png"/></div>
  </div>
<!--  <div class="slider-pages">
    <span class="current"></span>
    <span></span>
    <span></span>
  </div>
-->
</div>
<div class="blogs-wrap">
  <?php print render($page['blogs'])?>
  <!--
  <div class="blogs">
    <h2 class="region-title">BLOG</h2>
    <div class="column4">
      <a href="#">
        <ul>
          <li class="tittle">Online Donations Special</li>
          <li class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
          <li class="time">14 Nov 2014</li>
        </ul>
      </a>
      <a href="#">
        <ul>
          <li class="tittle">Online Donations Special </li>
          <li class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
          <li class="time">14 Nov 2014</li>
        </ul>
      </a>
      <a href="#">
        <ul>
          <li class="tittle">Online Donations Special</li>
          <li class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
          <li class="time">14 Nov 2014</li>
        </ul>
      </a>
      <a href="#">
        <ul>
          <li class="tittle">Online Donations Special</li>
          <li class="summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
          <li class="time">14 Nov 2014</li>
        </ul>
      </a>
    </div>
  </div>
  -->
  <span class="prev"><i id="blogs-prev" class="fa fa-chevron-left"></i></span>
  <span class="next"><i id="blogs-next" class="fa fa-chevron-right"></i></span>
</div>
<div class="blogs-bg">
    <a href="#"></a>
</div>

<?php endif; ?>
<?php if (!$is_front): ?>
<h2 class="region-title"><?php print $title?></h2>
<div class="main-content">
  <?php print render($page['content'])?>
</div>
<?php endif;?>
<div class="footer-wrap">
  <footer>
    <div class="social-media">
      <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
      <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
      <a href="#" class="fa fa-google-plus" aria-hidden="true"></a>
    </div>
    <p class="build-by">This site was built as a collaboration between <a href="#">Manifesto Digital</a> and <a href="#">Compucorp</a></p>
  </footer>
</div>
<!--<?php print render($page['content']); ?>-->
