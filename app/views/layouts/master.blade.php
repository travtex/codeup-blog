<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
  <title>Travis C. Flatt -- Web Designer/Developer</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <!-- Seo Meta -->
    <meta name="description" content="Travis C. Flatt, Web Designer/Developer based in San Antonio, TX.">
    <meta name="keywords" content="trav travis flatt web design developer designer graphic san antonio texas resume portfolio">

  <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/custom-bootstrap.css"
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/shop.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/icons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/animate.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/js/layerslider/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="/js/layerslider/css/custom.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

  <!-- CustomStyles -->
    <link rel="stylesheet" type="text/css" href="/styles/dark.css" id="dark" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/colors/asphalt.css" media="screen" class="emerald">
    <style>body {background: url(/img/backgrounds/1.jpg) fixed}</style>

  <!-- Favicon -->
    <link rel="shortcut icon" href="/img/donq.ico">
    <link rel="apple-touch-icon" href="/img/donq.png">

  <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  @yield('topscript')
</head>
<body>
  <div id="frame_">
    <div id="layout" class="boxed-margin">
      <header id="header">
        <div class="head_up">
          <div class="row clearfix">
            <div class="l_ht">
              <span><i class="icon_mobile"></i>(530) 435-5775</span>
              <span><i class="icon_pin_alt"></i>San Antonio, TX‎</span>
            </div><!-- end text left -->

       
              <div class="social social_head">
                <a href="https://twitter.com/StudioQuixotic" target="_blank" class="bottomtip" title="Twitter"><i class="fa-twitter"></i></a>
                <a href="https://www.facebook.com/travis.flatt.5" target="_blank" class="bottomtip" title="Facebook"><i class="fa-facebook"></i></a>
                <a href="http://www.pinterest.com/studioquix/" target="_blank" class="bottomtip" title="Pinterest"><i class="fa-pinterest"></i></a>
                <a href="https://www.youtube.com/user/DoctorYikes" target="_blank" class="bottomtip" title="Youtube"><i class="fa-youtube"></i></a>
                <a href="https://soundcloud.com/travis-flatt" target="_blank" class="bottomtip" title="SoundCloud"><i class="fa-cloud"></i></a>
                <a href="http://www.linkedin.com/in/travisflatt/" target="_blank" class="bottomtip" title="Linkedin"><i class="fa-linkedin"></i></a>
                <a href="https://github.com/travtex" title="Github" target="_blank" class="bottomtip"><i class="fa-github"></i></a>
                
              </div><!-- end social -->
            </div><!-- end social and bag -->
          </div><!-- row -->

        
        <!-- head -->

  
        <div class="headdown my_sticky">
          <div class="row clearfix">
            <div class="logo">
              <a href="/" title="Travis C. Flatt"><img src="{{ URL::asset('img/tflatt001.png') }}" alt="inCreate Responsive Multipurpose HTML5"></a>
            </div>

            <div class="search">
              <div class="search_icon"><i class="icon_search icon_close"></i></div>
              <div class="s_form">
                <form action="search_result.html" id="search" method="get">
                  <input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
                  <button type="submit"><i class="icon_search"></i></button>
                </form><!-- end form -->
              </div>
            </div>

            <nav>
              <ul class="sf-menu">
                <li class="current"><a href="/">Home</a>
                </li>
                <li><a href="shop.html">Shop</a>
                  <ul class="col3 mega">
                    <li class="col1">
                      <ol>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop_sidebar_right.html">Right Sidebar</a></li>
                        <li><a href="shop_sidebar_left.html">Left Sidebar</a></li>
                        <li><a href="shop_sidebar_both.html">Both Sidebar</a></li>
                        <li><a href="shop_sidebar_both_left.html">Both Side Left</a></li>
                        <li><a href="shop_sidebar_both_right.html">Both Side Right</a></li>
                        <li><a href="shop_masonry.html">Shop Masonry</a></li>
                      </ol>
                    </li>
                    <li class="col1">
                      <ol>
                        <li><a href="shop_product.html">Shop Product</a></li>
                        <li><a href="shop_bag.html">Shopping Bag</a></li>
                        <li><a href="shop_track_your_order.html">Track Your Order</a></li>
                        <li><a href="shop_checkout.html">Checkout → Pay</a></li>
                        <li><a href="shop_login_register.html">Login / Register</a></li>
                        <li><a href="shop_account.html">My Account</a></li>
                      </ol>
                    </li>
                    <li class="col1 featured_Img">
                      <a href="shop.html"><img src="{{ URL::asset('img/shop/megamenu.png') }}" alt="#" title="New Year Sales"></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Pages</a>
                  <ul>
                    <li><a href="icons.html">700 Retina Icons</a></li>
                    <li><a href="#">Shortcodes</a>
                      <ul>
                        <li><a href="shortcodes_accordion.html">Accordion</a></li>
                        <li><a href="shortcodes_buttons.html">Buttons</a></li>
                        <li><a href="shortcodes_typography.html">Typography</a></li>
                        <li><a href="shortcodes_pricing_tables.html">Pricing Tables</a></li>
                        <li><a href="shortcodes_tables.html">Tables</a></li>
                        <li><a href="shortcodes_testimonials.html">Tetimonials</a></li>
                        <li><a href="shortcodes_lightbox.html">Lightbox</a></li>
                        <li><a href="shortcodes_video.html">Video</a></li>
                        <li><a href="shortcodes_google-map.html">Google Map</a></li>
                        <li><a href="shortcodes_social-icons.html">Retina Social Icons</a></li>
                        <li><a href="shortcodes_tab.html">Tab</a></li>
                        <li><a href="shortcodes_toggle.html">Toggle</a></li>
                        <li><a href="shortcodes_message-box.html">Message Box</a></li>
                        <li><a href="shortcodes_action-box.html">Action Box</a></li>
                        <li><a href="shortcodes_progress-bars.html">Progress Bars</a></li>
                      </ul>
                    </li>
                    <li><a href="rtl.html">RTL Support</a></li>
                    <li><a href="about_us.html">About Our Team</a></li>
                    <li><a href="#">Services</a>
                      <ul>
                        <li><a href="services_1.html">Services Set 1</a></li>
                        <li><a href="services_2.html">Services Set 2</a></li>
                        <li><a href="services_3.html">Services Set 3</a></li>
                      </ul>
                    </li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="404.html">Custom 404</a></li>
                    <li><a href="faq.html">F.A.Q's</a></li>
                    <li><a href="support_forum.html">Support Forum</a></li>
                    <li><a href="titles.html">Heading Title Types</a></li>
                    <li><a href="search_result.html">Search Result</a></li>
                    <li><a href="under_construction.html">Under Construction</a></li>
                    <li><a href="#">Third Level</a>
                      <ul>
                        <li><a href="#">Sub Menu 1</a></li>
                        <li><a href="#">Sub Menu 2</a>
                          <ul>
                            <li><a href="#">Sub Menu 1</a></li>
                            <li><a href="#">Sub Menu 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="portfolio4.html">Portfolio</a>
                  <ul>
                    <li><a href="portfolio4.html">Portfolio 4 Columns</a></li>
                    <li><a href="portfolio3.html">Portfolio 3 Columns</a></li>
                    <li><a href="portfolio2.html">Portfolio 2 Columns</a></li>
                    <li><a href="portfolio_masonry.html">Portfolio Masonry</a></li>
                    <li><a href="portfolio3_sidebar.html">Portfolio 3col+Sidebar</a></li>
                    <li><a href="portfolio2_sidebar.html">Portfolio 2col+Sidebar</a></li>
                    <li><a href="portfolio_single_image.html">Project Image</a></li>
                    <li><a href="portfolio_single_slider.html">Project Slider</a></li>
                    <li><a href="portfolio_single_video.html">Project Video</a></li>
                    <li><a href="portfolio_single_sidebar.html">Project with Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                  <ul>
                    <li><a href="blog.html">Large Thumbnail</a></li>
                    <li><a href="blog_medium.html">Medium Thumbnail</a></li>
                    <li><a href="blog_small.html">Small Thumbnail</a></li>
                    <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                    <li><a href="blog_both_sidebar.html">Blog Both Sidebar</a></li>
                    <li><a href="blog_both_sidebar_left.html">Both Sidebar Left</a></li>
                    <li><a href="blog_both_sidebar_right.html">Both Sidebar Right</a></li>
                    <li><a href="#">Blog Single Post</a>
                      <ul>
                        <li><a href="blog_single_image.html">Single Post Image</a></li>
                        <li><a href="blog_single_slider.html">Single Post Slider</a></li>
                        <li><a href="blog_single_video.html">Single Post Video</a></li>
                        <li><a href="blog_single_sound.html">Single Post Sound</a></li>
                        <li><a href="blog_single_facebook_comments.html">Facebook Comments</a></li>
                        <li><a href="blog_single_default_comments.html">Default Comments</a></li>
                      </ul>
                    </li>
                    <li><a href="blog_two_columns.html">Blog Two Columns</a></li>
                    <li><a href="blog_three_columns.html">Blog Three Columns</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
              </ul><!-- end menu -->
            </nav><!-- end nav -->
          </div><!-- row -->
        </div><!-- headdown -->

      </header><!-- end header -->
    
    @yield('content')

    <footer id="footer">
      <div class="row pad_foot clearfix">
        <div class="grid_4">
          <img src="{{ URL::asset('img/tflatt001.png') }}" alt="logo title" class="mb">

          <div class="widget-content">
            <p>Travis C. Flatt is a Web Developer based in San Antonio, TX.  He is experienced in 
              front-end and server-side development with a focus on user experience.  He also plays 
              a pretty mean bass guitar.</p>

            <div class="social">
              <a href="https://twitter.com/StudioQuixotic" target="_blank" class="toptip" title="Twitter"><i class="fa-twitter"></i></a>
                <a href="https://www.facebook.com/travis.flatt.5" target="_blank" class="toptip" title="Facebook"><i class="fa-facebook"></i></a>
                <a href="http://www.pinterest.com/studioquix/" target="_blank" class="toptip" title="Pinterest"><i class="fa-pinterest"></i></a>
                <a href="https://www.youtube.com/user/DoctorYikes" target="_blank" class="toptip" title="Youtube"><i class="fa-youtube"></i></a>
                <a href="https://soundcloud.com/travis-flatt" target="_blank" class="toptip" title="SoundCloud"><i class="fa-cloud"></i></a>
                <a href="http://www.linkedin.com/in/travisflatt/" target="_blank" class="toptip" title="Linkedin"><i class="fa-linkedin"></i></a>
                <a href="https://github.com/travtex" title="Github" target="_blank" class="toptip"><i class="fa-github"></i></a>
              
            </div>
          </div><!-- widget content -->
        </div><!-- grid 4 -->

        <div class="grid_4">
          <h3 class="col-title">Where's Trav?</h3>

          <div class="widget-content">
            <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d111052.9358642919!2d-98.46118942406842!3d29.562839252763997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395897581022" width="300" height="200" frameborder="0" style="border:0"></iframe>
          </div><!-- widget content -->
        </div><!-- grid 4 -->
  
        <div class="grid_4">
          <h3 class="col-title">Twitter <small>- Studio Quixotic</small></h3>

          <div class="widget-content">
            <a class="twitter-timeline" href="https://twitter.com/StudioQuixotic" data-widget-id="448858883327397888">Tweets by @StudioQuixotic</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
                    {js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,
                      "script","twitter-wjs");</script>
          </div><!-- widget content -->
        </div><!-- grid 4 -->
      </div><!-- row -->

      <div class="footer-last">
        <div class="row clearfix">
          <span class="copyright">© 2014 <a href="#" class="toptip" title="Design and Development">Travis C. Flatt</a>.</span>
  
          <div id="toTop" class="toptip" title="Back to Top"><i class="fa-angle-up"></i></div><!-- Back to top -->

          <div class="foot-menu">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">F.A.Q</a></li>
              <li><a href="/portfolio">Portfolio</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul><!-- end links -->
          </div><!-- end foot menu -->
        </div><!-- end row -->
      </div><!-- end last footer -->

    </footer><!-- end footer -->
  </div> <!-- end layout -->
</div> <!-- end frame -->

    
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/theme20.js"></script>
    <script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>

    <script src="/js/layerslider/jQuery/jquery-transit-modified.js" type="text/javascript"></script>
    <script src="/js/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="/js/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    @yield('bottomscript')
</body>
</html>