
<?php
//28-10-21 19:06 just coiped and pasted CODING DONE BASED ON ZEE5 GETTING LINK GITHUB REPO  20 DAYS BACK
//FOR TV STREAM NO SUCH APP OR CODE I JUST CREATED by PACH
// usage index.php?c=Channel_ID
// Don't Change Any Thing !

$url = $_GET["c"];
if($url !="")

{

$data = file_get_contents("https://tvstream.space/jtv/play2.php?c=${url}"); #?c= required here and there in url
#$url = file_get_contents('https://tvstream.space/jtv/play2.php?c=Sony_BBC_Earth_HD_Tamil');
$re = '/(?<=source: \').*(?=\',)/';
preg_match($re, $data, $matches);
$variable = 'https://tvstream.space';
// Print the entire match result , PREG_OFFSET_CAPTURE, 0)
#var_dump($matches); -> output :array(1) { [0]=> string(52) "/jtv/jxxx.php?c=Sony_BBC_Earth_HD_Tamil&=800&e=.m3u8" }
#https://tvstream.space/jtv/jxxx.php?c=Sony_BBC_Earth_HD_Tamil&=800&e=.m3u8
$m3u8 = $variable.$matches[0];
#echo $m3u8;
header("Location: $m3u8"); //--> For Direct Play
#->http://localhost:8080/jtv/jxxx.php?c=Sony_BBC_Earth_HD_Tamil&=800&e=.m3u8
}
else{
  $ex= array("error" => "Some Code Or Process May Not Follow the Rule, Check URL", "created_by" => "Nandi" );
  $error =json_encode($ex);
  echo $error;
}
https://pachytvstream.herokuapp.com/

/*** ***
 * 
https://pachytvstream.herokuapp.com/?c=Sony_BBC_Earth_HD_Tamil
https://pachytvstream.herokuapp.com/?c=Animal_Planet_HD_Tamil
https://pachytvstream.herokuapp.com/?c=Nick_Tamil
https://pachytvstream.herokuapp.com/?c=Discovery_Kids_Tamil
https://pachytvstream.herokuapp.com/?c=Sony_Yay_Tamil
https://pachytvstream.herokuapp.com/?c=Cartoon_Network_Tamil
https://pachytvstream.herokuapp.com/?c=Pogo_Tamil
https://pachytvstream.herokuapp.com/?c=CN_HD_Tamil
https://pachytvstream.herokuapp.com/?c=History_18_TamilHistory TV18 HD Tamil
https://pachytvstream.herokuapp.com/?c=Jaya_Max
https://pachytvstream.herokuapp.com/?c=J_Movies
https://tvstream.space/jtv/livtv.php?c=Jaya_TV_HD&=800&e=.m3u8


https://tvstream.space/jtv/play2.php?c=Sony_BBC_Earth_HD_Tamil
https://tvstream.space/jtv/play2.php?c=Animal_Planet_HD_Tamil
https://tvstream.space/jtv/play2.php?c=Nick_Tamil
https://tvstream.space/jtv/play2.php?c=Discovery_Kids_Tamil
https://tvstream.space/jtv/play2.php?c=Sony_Yay_Tamil
https://tvstream.space/jtv/play2.php?c=Cartoon_Network_Tamil
https://tvstream.space/jtv/play2.php?c=Pogo_Tamil
https://tvstream.space/jtv/play2.php?c=CN_HD_Tamil
https://tvstream.space/jtv/play2.php?c=History_18_TamilHistory TV18 HD Tamil
https://tvstream.space/jtv/play2.php?c=Jaya_Max
https://tvstream.space/jtv/play2.php?c=J_Movies
https://tvstream.space/jtv/livtv.php?c=Jaya_TV_HD&=800&e=.m3u8
***************/

?>
