<?php 
if($_GET['a']=="type"){
$res=file_get_contents("http://cdn.apc.360.cn/index.php?c=WallPaper&a=getAllCategoriesV2&from=360chrome");
echo $res;
}elseif($_GET['a']=="list"){
$cid=$_GET['cid'];
$count=$_GET['count'];
$start=$_GET['start'];
$res=file_get_contents("http://wallpaper.apc.360.cn/index.php?c=WallPaper&a=getAppsByCategory&cid=".$cid."&start=".$start."&count=".$count."&from=360chrome");
echo $res;
}else{
echo("cnm");
}