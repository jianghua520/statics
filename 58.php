<?php 


header("Content-type:text/html;charset=utf-8");   //  设置编码
    $url=$_GET['url'];

if (empty($url)) {
      exit('<html><meta name="robots" content="noarchive">
	  <style>h1{color:#FFFFFF; text-align:center; font-family: Microsoft Jhenghei;}p{color:#CCCCCC; font-size: 1.2rem;text-align:center;font-family: Microsoft Jhenghei;}</style>
	  <body bgcolor="#000000"><table width="100%" height="100%" align="center"><td align="center"><h1>此接口只支持M3U8资源及MP4资源播放</font><font size="2"></font></p></table></body></html>');

}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="pragma" content="no-cache" /><meta http-equiv="expires" content="0" />    <!-- 不缓存网页 -->
<meta name="x5-fullscreen" content="true" /><meta name="x5-page-mode" content="app"  /> <!-- X5  全屏处理 -->
<meta name="full-screen" content="yes" /><meta name="browsermode" content="application" />  <!-- UC 全屏应用模式 -->
<meta name="apple-mobile-web-app-capable" content="yes "/> <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> <!--  苹果全屏应用模式 -->
<title><?php echo $TITLE ?></title>


<style type="text/css">
html,body{
background-color:#000;
padding: 0;
margin: 0;
height:100%;
width:100%;
color:#999;
overflow:hidden;
}
#a1{
height:100%!important;
width:100%!important;
object-fit:contain;
}
</style>

<body style="overflow-y:hidden;">

<iframe width="100%" height="100%" src="https://www.coolcoolcloud.com/m3u8.php?url=<?php echo $url; ?>" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
</body>
</html>