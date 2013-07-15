<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sitemap</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/juery.jd.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>	
 <script type="text/javascript" src="http://www.ginwiz.com/mobileDetectionScript/redirection_mobile.min.js"></script> <script type="text/javascript">SA.redirection_mobile({noredirection_param: "noredirection",mobile_url: "bnsatnalikafoundation.ginwiz.com",cookie_hours: "2",keep_path: "true"});</script>
    
</head>
<body>

  <div id="main">	
	<br>
	<!-- <div id="header"> 
        <div id="header_name"> 	  
          <h1>  Babulal Nagarmal Satnalika <span>Foundation</span></h1>
        </div><!--close header_name-->	
	<!--		<div id="header_slogan"> 		
	      <h2>Promoting education..</h2>
		 </div><!--close header_slogan-->	
		  
    <!--  </div><!--close header-->
    <div id="footer">	
	
	<div>
    <h4 style="margin-left:335px;margin-top:-45px;font: normal 105% verdana;"><a href="md.php">Mandatory Disclosure</a>&nbsp | &nbsp<a href="shop.php">Shop</a>&nbsp | &nbsp<a href="http://games.bnsatnalikafoundation.org">Games</a>&nbsp | &nbsp<a href="advertise.php">Advertise With Us</a>&nbsp | &nbsp<a href="contactus.php">Contact us</a>&nbsp | &nbsp <a href="newsletter.php">BNMS Foundation Newsletter</a> &nbsp | &nbsp <a href="http://webmail.bnsatnalikafoundation.org">Webmail</a>&nbsp |&nbsp<a href="./phpBB3/index.php" target="_blank">Forum</a>&nbsp</h4>
    </div>
	<div style="position:relative;left:833px;">
		<form method="get" action="http://www.google.com/search">

<div style="border:0px solid black;padding:4px;width:20em;">
<table border="0" cellpadding="0">
<tr><td>
<input type="text"   name="q" size="25"
 maxlength="255" value="" placeholder="Enter a keyword to search"/>
<input type="submit" value="Search" /></td></tr>
<tr><td align="center" style="font-size:75%">
<input type="checkbox"  name="sitesearch"
 value="bnsatnalikafoundation.org" checked /> only search BN Satnalika Foundation Site<br />
</td></tr></table>
</div>

</form>
</div>
	 
	</div>
		
	 <center> <img style="margin-top:-25px;" src="../images/header1.png" width="1000" height="100" margin="0px" usemap="#map"/> 
				<map name="map">
					<area shape="rect" coords="0,0,150,100" href="index.php" />
				</map>
	 </center>

	<div style="margin-top:-20px;"id="content_main">
		<div id="menubar">
		  <ul class="lavaLampWithImage" id="lava_menu">
			<li class="current"><a href="index.php">Home</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="apply.php">Apply</a></li>
			<li><a href="volunteer.php">Volunteer</a><li>
			<li><a href="supportus.php">Support Us</a></li>
			<li><a href="past_intern.php">Past Interns</a></li>
			<li><a href="feedback.php">Past Works</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			
			
		  </ul>
		</div><!--close menubar-->	    
		
		<div id="site_content">        	  
		  
		 <div id="banner_image">
	    <div id="slider-wrapper">        
          <div id="slider" class="nivoSlider">
            <img style="height:250px;width:960px;" src="images/17.jpg" alt="" />
            <img style="height:250px;width:960px;" src="images/banner.jpg" alt=""/>
            <img style="height:250px;width:960px;" src="images/banner1.jpg" alt="" />
            <img style="height:250px;width:960px;" src="images/banner2.jpg" alt="" />
	    <img style="height:250px;width:960px;" src="images/banner3.jpg" alt="" />
	    <img style="height:250px;width:960px;" src="images/banner4.jpg" alt="" />
	    <img style="height:250px;width:960px;" src="images/6.jpg" alt="" />
	    <img style="height:250px;width:960px;" src="images/16.jpg" alt="" />
		</div>
		</div><!--close slider-wrapper-->
	  </div><!--close banner_image-->	<br><br>	
	  <div style="margin-left:100px">	  
<?php

$startin="/";


$imgpath="/images";


$types=array(
	".php",
	".html",
	".htm",
	".shtm",
	".sthml",
	".pdf" 
);


$htmltypes=array(
	".php",
	".html",
	".htm",
	".shtm",
	".sthml",
);

// Files and/or directories to ignore. Anything in this array will not
// be included in the site map.
$ignore=array(
	".htaccess",
	"cgi-bin",
	"images",
	"index.htm",
	"index.html",
	"index.php",
	"robots.txt",
	"bnsatnalika",
	"themes",
	"pages",
	"merchandise",
	"js",
	"phpBB3",
	"css",
	"thumbnails",
	"promoters",
	"cursors",
	"games",
	"imagesitemap",
	"bnsat&@",
	"shop",
	"store",
	"db.php",
	"download.php",
	"download_coupon.php",
	"google79541925dbb9c6c8.html"
);


$id=0;
echo "<div id=\"sitemap\"><ul id=\"list$id\">\n";
$id++;
$divs="";
if(substr($startin,strlen($startin)-1,1)=="/")
	$startin=trim($startin,"/");
foreach($types as $type){
	if (file_exists($_SERVER['DOCUMENT_ROOT']."$startin/index$type")){
		$index=$_SERVER['DOCUMENT_ROOT']."$startin"."/index$type";
		break;
	}
}
$types=join($types,"|");
$types="($types)";
if(!is_array($htmltypes))
	$htmltypes=array();
if(count($htmltypes)==0)
	$htmltypes=$types;
if(!$imgpath)
	$imgpath=".";
echo "<li><img src=\"$imgpath/server.gif\" align=\"middle\" alt=\"\" /><strong><a href=\"$startin/\">".getTitle($index)."</a></strong>\n";
showlist($_SERVER['DOCUMENT_ROOT']."$startin");
echo "</li></ul></div>\n";
if (is_array($divs)){
	$divs="'".join($divs,"','")."'";
	echo "<script type=\"text/javascript\">\n";
	echo "//<![CDATA[\n";
	echo "d=Array($divs);\n";
	echo "for (i=0;i<d.length;i++){\n";
	echo "\ttoggle('list'+d[i],'img'+d[i]);\n";
	echo "}\n";
	echo "//]]>\n";
	echo "</script>\n";
}


function showlist($path){
	global $ignore, $id, $divs, $imgpath, $types, $startin;
	$dirs=array();
	$files=array();
	if(is_dir($path)){
		if ($dir = @opendir($path)) {
			while (($file = readdir($dir)) !== false) {
				if ($file!="." && $file!=".." && !in_array($file,$ignore)){
					if (is_dir("$path/$file")){
						if (file_exists("$path/$file/index.php"))
							$dirs[$file]=getTitle("$path/$file/index.php");
						elseif (file_exists("$path/$file/index.html"))
							$dirs[$file]=getTitle("$path/$file/index.html");
						elseif (file_exists("$path/$file/index.htm"))
							$dirs[$file]=getTitle("$path/$file/index.htm");
						else
							$dirs[$file]=$file;
					} else {
						if (ereg("$types$", $file)){
							$files[$file]=getTitle("$path/$file");
							if (strlen($files[$file])==0)
								$files[$file]=$file;
						}
					}
				}
		  }  
		  closedir($dir);
		}
		natcasesort($dirs);
		$url=str_replace($_SERVER['DOCUMENT_ROOT'],"",$path);
		$n=substr_count("$url/$","/");
		$base=substr_count($startin,"/")+1;
		$indent=str_pad("",$n-1,"\t");
		echo "$indent<ul id=\"list$id\">\n";
		if ($n>$base)
			$divs[]="$id";
		$imgsrc="minus";
		foreach($dirs as $d=>$t){
			$id++;
			echo "$indent\t<li><a href=\"javascript:toggle('list$id','img$id')\"><img src=\"$imgpath/$imgsrc.gif\" id=\"img$id\" align=\"middle\" border=\"0\" alt=\"\" /></a>";
			echo "<img src=\"$imgpath/folder.gif\" alt=\"\" align=\"middle\" />";
			echo " <strong><a href=\"$url/$d/\">$t</a></strong>\n";
			showlist("$path/$d");
			echo "$indent\t</li>\n";
		}
		natcasesort($files);
		$id++;
		foreach($files as $f=>$t){
			echo "$indent\t<li><img style=\"padding-left:20px;\" src=\"$imgpath/html.gif\" alt=\"\" border=\"0\" /> <a href=\"$url/$f\">$t</a></li>\n";
		}
		echo "$indent</ul>\n";
	}
}

function getTitle($file){
	global $htmltypes;
	$title="";
	$p=pathinfo($file);
	if(!in_array(strtolower($p['extension']),$htmltypes)){
		$f=file_get_contents($file);
		if(preg_match("'<title>(.+)</title>'i", $f, $matches)){
			$title=$matches[1];
		}
	}
	$title=$title?$title:basename($file);
	return htmlentities(trim(strip_tags($title)));
}
?>
</div>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?1CGLD5bhI75qkW4rQ59d2OSKtumeOUqd';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<script type="text/javascript">$zopim(function() {
// Insert API calls below this line
// e.g. $zopim.livechat.setLanguage('en');
// Insert API calls above this line
})
</script>
<script id="_webengage_script_tag" type="text/javascript">
  window.webengageWidgetInit = window.webengageWidgetInit || function(){
    webengage.init({
      licenseCode:"~2024bc00"
    }).onReady(function(){
      webengage.render();
    });
  };
  (function(d){
    var _we = d.createElement('script');
    _we.type = 'text/javascript';
    _we.async = true;
    _we.src = (d.location.protocol == 'https:' ? "//ssl.widgets.webengage.com" : "//cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-3.0.js";
    var _sNode = d.getElementById('_webengage_script_tag');
    _sNode.parentNode.insertBefore(_we, _sNode);
  })(document);
</script>
</body>
</html>