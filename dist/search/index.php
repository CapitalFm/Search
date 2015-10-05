<?php 
$site_title = array();

if(isset($_GET['q']) && $_GET['q']!=='')
{
	$site_title[] = 'Search results for "'.$_GET['q'].'"';
}

$site_title[] = "Capital FM";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php echo implode(' - ',$site_title); ?></title>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/style.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<header id="masthead" class="site-header" role="banner">
    <div class="sc ">
        <div class="site-branding">
            <div class="row">
            	<div class="col-sm-6">
                <h1 class="site-title"><a href="" rel="home" title=""><span class="capital-logo"></span></a></h1>
                </div>
                <div class="col-sm-5 hidden-xs">
                	<div class="clearfix"><a style="padding:10px 0 0; display:block; " href="http://www.capitalfm.co.ke/listenlive/" class="pull-right" target="_blank"><img src="images/listen-live.gif" alt="Listen Live"></a></div>
                </div>
            </div>
            
        </div><!-- .site-branding -->
    </div>
    <div class="primary-navigation">
    	<nav class="navbar navbar-default" id="main-navigation">
          <div class="container-fluid sc"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button id="menu-toggler" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href=""><span class="capital-logo-mini"></span></a> </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active-home"><a href="http://www.capitalfm.co.ke">Home</a></li>
                <li class="active-news"><a href="http://www.capitalfm.co.ke/news">News</a></li>
                <li class="active-lifestyle"><a href="http://www.capitalfm.co.ke/lifestyle">Lifestyle</a></li>
                <li class="active-sports"><a href="http://www.capitalfm.co.ke/sports">Sports</a></li>
                <li class="active-tv"><a href="https://www.capitalfm.co.ke/tv">Tv</a></li>
                <li class="active-business"><a href="http://www.capitalfm.co.ke/business">Business</a></li>
                <li class="active-radio"><a href="http://www.capitalfm.co.ke/radio">Radio</a></li>
                <li class="active-campus"><a href="http://www.capitalfm.co.ke/campus">Campus</a></li>
				<li class="active-app" style="background-color:#DD1B1C"><a href="http://www.capitalfm.co.ke/app">Get App</a></li>
              </ul>
              
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-search"></i></a>
                  <div class="panel panel-default dropdown-menu">
                      <div class="panel-body">
                        <form method="get" enctype="application/x-www-form-urlencoded" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search..." name="q">
                          </div>
                              <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                      </div>
                    </div>

                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.container-fluid --> 
        </nav>

    </div><!-- .primary-navigation -->
</header><!-- .site-header -->
<div class="leaderboard-advertisement 980x110 header-leaderboard">
	<div class="sc"></div>
</div>
<div id="page" class="hfeed site">
	<div id="content" class="site-content">    
    <div id="cse" style="width:100%;"><gcse:searchresults-only></gcse:searchresults-only></div>    
    </div><!-- .site-content -->
</div><!-- .site -->
<div class="leaderboard-advertisement 980x110 footer">
	<div class="sc" style="text-align:center;">
<style type="text/css">
.adsbygoogle { width: 100%; height: 50px; }
</style>
<!-- Mobi -->
<ins class="adsbygoogle"
style="display:inline-block"
data-ad-client="ca-pub-0572196290942397"
data-ad-slot="6462106902"
data-ad-format="auto"
data-width="980"
data-height="50" width="980" height="50"></ins>
<script>
window.onload = function() {
    (adsbygoogle = window.adsbygoogle || []).push({});
};
</script></div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="sc">
        <div class="site-info">
            <div>
            	<div class="to-top"><a href="#" onClick="return false;" id="totop"><span class="hidden-xs">Back </span>to top</a></div>
                <img src="images/capitalfm.co.ke.png" width="243" height="24" alt="capitalfm.co.ke">            	
            </div>         
        </div><!-- .site-info -->
    </div><!-- .sc -->
    <div class="sc">
        <div class="site-links">
            <div class="row">
            	<div class="col-sm-10 col-xs-8">
                	<div class="row">
                    	<div class="col-sm-3 col-xs-6">
                        	<div class="site-section">
                            	<h3><a href="http://www.capitalfm.co.ke/news">News</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/news/section/kenya">Kenya</a></li>
                                    
                                    <li><a href="http://www.capitalfm.co.ke/news/section/africa">Africa</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/news/section/world">World</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/news/section/focus-on-china">Focus on China</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/eblog">Blogs</a></li>
                                </ul>
                                <h3><a href="http://www.capitalfm.co.ke/business">Business</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/business/section/technology/" target="_blank">Technology</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/business/section/technology/" target="_blank">Ask Kirubi</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/business/section/technology/" target="_blank">The Whiteboard</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/business/section/technology/" target="_blank">Infographics</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/business/section/technology/" target="_blank">Enterprise</a></li>
                                </ul>
                            </div>
                        </div><!-- .col-sm --> 
                        <div class="col-sm-3 col-xs-6">
                        	<div class="site-section">
                            	<h3><a href="http://www.capitalfm.co.ke/sports">Sports</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/sports/category/athletics/" target="_blank">Athletics</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/sports/category/tpl/" target="_blank">Tusker Premier League</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/sports/category/rugby/" target="_blank">Rugby</a></li>
                                </ul>
                                <h3><a href="http://www.capitalfm.co.ke/campus">Campus</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/campus/category/lifestyle/" target="_blank">Lifestyle</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/campus/category/career/" target="_blank">Career</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/campus/category/finance/" target="_blank">Money</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/campus/category/sports/" target="_blank">Sports</a></li>
                                                <li><a href="http://www.capitalfm.co.ke/campus/category/resources/" target="_blank">Resources</a></li>
                                                
                                </ul>
                            </div>
                        </div><!-- .col-sm -->
                        <div class="col-sm-3 col-xs-6">
                        	<div class="site-section">
                            	<h3><a href="http://www.capitalfm.co.ke/lifestyle">Lifestyle</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/lifestyle/category/entertainment/" target="_blank">Entertainment</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/lifestyle/category/fashion-beauty/" target="_blank">Fashion &amp; Beauty</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/lifestyle/category/health-and-nutrition/" target="_blank">Health</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/lifestyle/category/the-good-life/" target="_blank">The Good Life</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/lifestyle/category/relationships-sex/" target="_blank">Relationships &amp; Sex</a></li>
                                </ul>
                            </div>
                            <div class="site-section">
                            	<h3><a href="http://www.capitalfm.co.ke/radio">Radio</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/radio/shows" target="_blank">Shows</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/radio/presenters/" target="_blank">Presenters</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/radio/djs/" target="_blank">Djs</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/radio/mixes/" target="_blank">Mixes</a></li>
                                    <li><a href="http://www.capitalfm.co.ke/radio/stories/" target="_blank">Stories</a></li>
                                </ul>
                            </div>
                        </div><!-- .col-sm -->
                        <div class="col-sm-3 col-xs-6">
                        	<div class="site-section">
                            	<h3><a href="https://www.capitalfm.co.ke/tv">Tv</a></h3>
                                <ul>
                                	<li><a href="https://www.capitalfm.co.ke/tv/news" target="_blank">News Videos</a></li>
                                    <li><a href="https://www.capitalfm.co.ke/tv/music" target="_blank">Music Videos</a></li>
                                    <li><a href="https://www.capitalfm.co.ke/tv/section/shows" target="_blank"><b>Shows</b></a>
                                    <ul>
                                    	<li><a href="https://www.capitalfm.co.ke/tv/section/our2cents" target="_blank">Our 2 Cents</a></li>
                                        <li><a href="https://www.capitalfm.co.ke/tv/section/askkirubi" target="_blank">Ask Kirubi</a></li>
                                        <li><a href="https://www.capitalfm.co.ke/tv/section/chopup" target="_blank">The Chop Up</a></li>
                                        <li><a href="https://www.capitalfm.co.ke/tv/section/thegrill" target="_blank">The Grill</a></li>
                                        <li><a href="https://www.capitalfm.co.ke/tv/section/soundcheck" target="_blank">Capital Sound Check</a></li>
                                        <li><a href="https://www.capitalfm.co.ke/tv/section/thescoop" target="_blank">The Scoop</a></li>
                                    </ul>
                                    
                                    </li>
                                </ul>
                                <h3><a href="http://www.capitalfm.co.ke/app/">Apps</a></h3>
                                <ul>
                                	<li><a href="http://www.capitalfm.co.ke/app" target="_blank">Android</a></li>
                                </ul>
                            </div>
                        </div><!-- .col-sm -->
                                      
                    </div><!-- .row -->
                
                </div><!-- .col-sm -->
                <div class="col-sm-2 col-xs-4">
                	<div class="badge-holder">
                    	<div class="mik-badge"></div>
                    </div>
                    <div class="social-links">
                    	<h3>Social Media</h3>
                        <ul>
                        	<li><a href="http://facebook.com/capitalfmkenya" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="https://twitter.com/intent/user?screen_name=capitalfm_kenya"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="https://plus.google.com/+CapitalFMKenya" target="_blank"><i class="fa fa-google-plus"> Google +</i></a></li>
                            <li><a href="http://www.youtube.com/user/capitalfmkenya" target="_blank"><i class="fa fa-youtube"></i> YouTube</a></li>
                        </ul>
                    </div>
                    <div class="logo-holder">
                    	<div class="capitalfm-logo"></div>
                    </div>
                </div><!-- .col-sm -->
            </div><!-- .row -->     
        </div><!-- .site-info -->
    </div><!-- .sc -->
    
    <div class="site-credit">
       <div class="sc">
       	  <div class="row">
          	<div class="col-sm-6 col-sm-push-6">
            	<div class="useful-links">
                    <ul>
                        <li>
                            <a href="http://www.capitalfm.co.ke/partners/">Partners</a>
                        </li>
                        <li>
                            <a href="http://www.capitalfm.co.ke/privacy/">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="http://www.capitalfm.co.ke/advertise/">Advertise with us</a>
                        </li>
                        <li>
                            <a href="http://www.capitalfm.co.ke/about/">About Us</a>
                        </li>
                        <li>
                            <a href="http://www.capitalfm.co.ke/contacts/">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- .useful-links -->
            </div>
            <div class="col-sm-6 col-sm-pull-6">
            	<div class="copyright">
                    &copy; <?php echo date('Y'); ?> Capital Digital Media. Capital Group Limited. All Rights Reserved
              </div><!-- .copyright -->
            </div>
            
          </div><!-- .row -->   
          
       </div><!-- .sc -->         
    </div><!-- .site-info -->
    
</footer><!-- .site-footer -->

<div id="mobile-menu">
	<div class="mobile-menu">
        <div class="menu-header">
            <button onClick="return-false" class="toggle-menu"></button>
        </div><!-- .menu-header -->
        <div class="menu-wrapper" data-level="1">
            <ul>
                <li>
                    <a href="http://www.capitalfm.co.ke">Home</a>
                    <div class="menu-wrapper" data-level="2">
                        <div class="title">Business Home</div>
                        <ul>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Ask Kirubi</a></li>
                            <li><a href="#">The whiteboard</a></li>
                            <li><a href="#">Infographics</a></li>
                            <li><a href="#">Enterprise</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="http://www.capitalfm.co.ke/news">News</a></li>
                <li><a href="http://www.capitalfm.co.ke/lifestyle">Lifestyle</a></li>
                <li><a href="http://www.capitalfm.co.ke/sports">Sports</a></li>
                <li><a href="https://www.capitalfm.co.ke/tv">Tv</a></li>
                <li><a href="http://www.capitalfm.co.ke/business">Business</a></li>
                <li><a href="http://www.capitalfm.co.ke/radio">Radio</a></li>
                <li><a href="http://www.capitalfm.co.ke/campus">Campus</a></li>
				<li><a href="http://www.capitalfm.co.ke/app">Get App</a></li>
            </ul>
        </div>
    </div>
    <div class="overlay"></div>
</div>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Roboto:400,100,700,900:latin' ] }
  };</script>
<script>
  (function() {
    var cx = '003638496414887922045:cqpxpmxkfj4';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<div id="fb-root"></div>
</body>
</html>