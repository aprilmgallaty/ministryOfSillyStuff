<?php

function getBannerImage(){
	$imgFile = "/bannerImages/0" . rand(1,6) . "_headerImageHome250x69.png";
	return $imgFile;
}

?>

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php if(!empty($title)){print $title; } ?></title>
    
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  	
	<link rel="stylesheet" href="<?php echo CSS_URL . "reset.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "style.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "header.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "index.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "sillyWalks.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "sillyTranslations.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "sillyPictures.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "sillyWalkStyle.css"; ?>" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_URL . "footer.css"; ?>" media="all" />
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Karla:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>	
	<script src="<?php echo JS_URL . "jquery.galleriffic.js"; ?>"></script>	
	<script src="<?php echo JS_URL . "jquery.opacityrollover.js"; ?>"></script>	
	<script>
		$(function() {
			var gallery = $('#thumbs').galleriffic({
					numThumbs:                 20, // The number of thumbnails to show per page
					preloadAhead:              -1, // Set to -1 to preload all images
					enableTopPager:            true,
					enableBottomPager:         false,
					maxPagesToShow:            7,  // The maximum number of pages to display in either the top or bottom pager
					captionContainerSel:       '#caption', // The CSS selector for the element within which the image caption should be rendered
					imageContainerSel:         '#slideshow', // The CSS selector for the element within which the main slideshow image should be rendered
					controlsContainerSel:      '#controls', // The CSS selector for the element within which the slideshow controls should be rendered
					renderSSControls:          false, // Specifies whether the slideshow's Play and Pause links should be rendered
					renderNavControls:         true, // Specifies whether the slideshow's Next and Previous links should be rendered
					enableHistory:             false, // Specifies whether the url's hash and the browser's history cache should update when the current slideshow image changes
					enableKeyboardNavigation:  true, // Specifies whether keyboard navigation is enabled
					autoStart:                 false, // Specifies whether the slideshow should be playing or paused when the page first loads
					syncTransitions:           false, // Specifies whether the out and in transitions occur simultaneously or distinctly
					defaultTransitionDuration: 1000, // If using the default transitions, specifies the duration of the transitions
				});			
		});
	</script>
	
</head>

<body>

        <article id="social">
        
            <div class="span-33"></div><!--  end span-33 -->
            
            <div class="span-2">
            
                <div class="span-2 last"></div><!--  end span-2 last -->
                
                <aside id="linkedIn"><a href="http://www.linkedin.com/pub/april-gallaty/1a/117/17/" target="_blank"><img src="<?php echo IMG_URL . "shareIcons/linkedIn50x50.png"; ?>" width="20" height="20" alt="LinkedIn" /></a></aside><!--  end linkedIn -->
                
                <div class="span-2 last"></div><!--  end span-2 last -->
                
            </div><!--  end span-2 -->
            
            <div class="span-1"></div><!--  end span-1 -->
            
            <div class="span-2">
            
                <div class="span-2 last"></div><!--  end span-2 last -->
                
                <aside id="faceBook"><a href="https://www.facebook.com/lethallymagicalperil" target="_blank"><img src="<?php echo IMG_URL . "shareIcons/fb50x50.png"; ?>" width="20" height="20 " alt="Facebook" /></aside><!--  end faceBook -->
                
                <div class="span-2 last"></div><!--  end span-2 last -->
                
            </div><!--  end span-2 -->
            
            <div class="span-1"></div><!--  end span-1 -->
            
            <div class="span-2">
            
                <div class="span-2 last"></div><!--  end span-2 last -->
                
                <aside id="twitter"><a href="https://twitter.com/LethallyMagical" target="_blank"><img src="<?php echo IMG_URL . "shareIcons/twitter50x50.png"; ?>" width="20" height="20" alt="Twitter" /></a></aside><!--  end twitter -->
                
                <div class="span-2 last"></div><!--  end span-2 last -->
                
            </div><!--  end span-2 -->
            
            <div class="span-1"></div><!--  end span-1 -->
            
            <div class="span-2">
            
                <div class="span-2 last"></div><!--  end span-2 last -->
                
                <aside id="stumbleUpon"><a href="http://www.stumbleupon.com/stumbler/agallaty/likes" target="_blank"><img src="<?php echo IMG_URL . "shareIcons/stumbleUpon50x50.png"; ?>" width="20" height="20" alt="StumbleUpon" /></a></aside><!--  end stumbleUpon -->
                
                <div class="span-2 last"></div><!--  end span-2 last -->
                
            </div><!--  end span-2 -->
            
            <div class="span-1"></div><!--  end span-1 -->
            
            <div class="span-2">
            
                <div class="span-2 last"></div><!--  end span-2 last -->
                
                <aside id="youTube"><a href="http://www.youtube.com/user/AprilFreak420" target="_blank"><img src="<?php echo IMG_URL . "shareIcons/youtube50x50.png"; ?>" width="20" height="20" alt="Youtuebe" /></a></aside><!--  end youTube -->
                
                <div class="span-2 last"></div><!--  end span-2 last -->
                
            </div><!--  end span-2 -->
            
            <div class="span-2 last"></div><!--  end span-2 last -->
	    
	    <div class="span-1"></div><!--  end span-1 -->
            
            <div class="span-2">
            
                <div class="span-2 last"></div><!--  end span-2 last -->
                
                <aside id="pinterest"><a href="https://pinterest.com/agallaty/" target="_blank"><img src="<?php echo IMG_URL . "shareIcons/pinterest50x50.png"; ?>" width="20" height="20 " alt="Pinterest" /></aside><!--  end pinterest -->
                
                <div class="span-2 last"></div><!--  end span-2 last -->
                
            </div><!--  end span-2 -->
            
        </article><!--  end social -->

 <header id="header">
                
                <article id="banner">
                
                    <aside id="logo">
			<a href="<?php echo TOP_URL . "index.php"; ?>"><img src="<?php echo IMG_URL . "crestLogo403x471.png"; ?>" width="107" height="125" alt="logo" id="logoImg" /></a>
                    </aside><!--  end logo -->
                        
                        <aside id="siteTitle"><h1>Ministry of Silly Stuff</h1></aside><!--  end siteTitle -->
			
			<div><img src="<?php echo IMG_URL . getBannerImage(); ?>" width="250" height="69" alt="MP Crew" id="homeBannerImg" /></a></div>
			
                </article><!--  end banner -->
            
        </header><!--  end header -->
	
 <section id="container">
    
	<div class="clear">&nbsp;</div>

<nav id="nav">

                <div id="home">
			<a href="<?php echo TOP_URL . "index.php"; ?>">Home</a>
                </div><!--  end home -->
                
                <div id="mosw">
			<a href="<?php echo FILES_URL . "sillyWalks.php"; ?>">Ministry of Silly Walks</a>
                </div><!--  end mosw -->
                
                <div id="sillyTrans">
			<a href="<?php echo FILES_URL . "sillyTranslations.php"; ?>">Silly Translations</a>
                </div><!--  end sillyTrans -->
                
                <div id="sillyPics">
			<a href="<?php echo FILES_URL . "sillyPictures.php"; ?>">S.P.A.M.</a>
                </div><!--  end sillyPics -->
                
                <div id="gallatyHome">
			<a href="http://www.gallaty.com" target="_blank">Back to Gallaty.com</a>
                </div><!--  end gallatyHome -->
            
</nav><!--  end nav -->
		
</header>

<div class="clear"></div>
<hr />
<div class="clear"></div>
	

