<?php
/**
 * @Author: Davax<23136891@qq.com>
 * @Date:   2019-01-04 14:21:02
 * @Last Modified by:   Davax
 * @Last Modified time: 2019-11-14 17:16:36
 */
$PHP_AUTH_USER=isset($_SERVER['PHP_AUTH_USER'])?$_SERVER['PHP_AUTH_USER']:'';
$PHP_AUTH_PW=isset($_SERVER['PHP_AUTH_PW'])?$_SERVER['PHP_AUTH_PW']:'';
$PHP_AUTH_TYPE = isset($_SERVER['PHP_AUTH_TYPE'])?$_SERVER['PHP_AUTH_TYPE']:'';

if(!isset($PHP_AUTH_USER))  
{  
  Header("WWW-Authenticate: Basic realm='My Realm'");  
  Header("HTTP/1.0 401 Unauthorized");  
  echo "Text to send if user hits Cancel buttonn";  
  exit;  
}else  
{  

  if ( !($PHP_AUTH_USER=="tnc" && $PHP_AUTH_PW=="nature") )  
  {  
  // 如果是错误的用户名称/密码对，强制再验证  
    Header("WWW-Authenticate: Basic realm='My Realm'");
    Header("HTTP/1.0 401 Unauthorized");  
    echo "ERROR : $PHP_AUTH_USER/$PHP_AUTH_PW is invalid.";  
    exit;  
  }  
  else  
  {  
    echo "Welcome tnc!";  
  } 
} 

die;
/*
0：10 分以后--至 1：00
$hour =  date("H");
$minute = date("i");
if($hour == 0 && $minute > 10)
 */
// $us=isset($_SERVER['PHP_AUTH_USER'])?$_SERVER ['PHP_AUTH_USER']:'';
//   $ps=isset($_SERVER['PHP_AUTH_PW'])?$_SERVER ['PHP_AUTH_PW']:'';

//     $usernames='admins';
//     $wordpass="qwedslxx!#kkkllk1112lkmmll165";
//   if(!$us || !$ps){

//       $username=isset($_COOKIE['tt_uname'])?$_COOKIE['tt_uname']:'';
//           $auth=isset($_COOKIE['tt_as'])?$_COOKIE['tt_as']:'';
//     $mima=  md5($usernames.$wordpass.date("Y-m-d H"));
//     if($username==$usernames && $auth==$mima){}
//     else{

//     alert_login();
//     }
//   }
//   else
//   {

//     if($us==$usernames && $ps==$wordpass){ 
//         setcookie('tt_uname', $usernames,$DT_TIME+86400*30);
//       setcookie('tt_as', md5($usernames.$wordpass.date("Y-m-d H")),$DT_TIME+86400*30);
//     }
//     else
//     {
//        alert_login();
//     }
//   }
// function alert_login()
// {
//     header ('WWW-Authenticate: Basic realm="My Realm"');
//     header ('HTTP/1.0 401 Unauthorized');
//     die('err_auth_');
// }
// $gotourl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?jumpnum=1";
// print_r($gotourl);
// print_r("<br/>");
// /*PHP 获取当前访问的完整URL*/
// function GetCurUrl() {
//     $url = 'http://';
//     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
//         $url = 'https://';
//     }
     
//     // 判断端口
//     if($_SERVER['SERVER_PORT'] != '80') {
//         $url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
//     } else {
//         $url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['REQUEST_URI'];
//     }
     
//     return $url;
// }
//查询会员名为手机号的品牌
$condition = " AND LENGTH(0+username)=LENGTH(username)";
//获取前一个月的时间：
$mytime= date("Y-m-d H:i:s", strtotime("-1 month"));  
print_r($mytime);

//获取前一天的时间
$mytime= date("Y-m-d H:i:s", strtotime("-1 day"));  
$mytime=mktime(0, 0, 0, date('m'), date('d')-1, date('Y'));

//获取前一个小时的时间：
$mytime= date("Y-m-d H:i:s", strtotime("-1 hour"));

//获取前一年的时间：
$mytime= date("Y-m-d H:i:s", strtotime("-1 year"));

//获取前半年的时间：
$mytime=mktime(0, 0, 0, date('m')-6, date('d'), date('Y')); 
$mytime=date("Y-m-d H:i:s", strtotime("-6 month"));



$shengyu = 307586;
$shengyu = $shengyu > 0 ? $shengyu : '0';
//var_dump($shengyu);die;
$re['fromdate'] = '90';
$year = '90';
$is_new = $year == $re['fromdate'] ? '1':'0';
// print_r(GetCurUrl());die;
print_r(time2string($shengyu));
function time2string($second){
    $day = floor($second/(3600*24));
    $second = $second%(3600*24);//除去整天之后剩余的时间
    $hour = floor($second/3600);
    $second = $second%3600;//除去整小时之后剩余的时间 
    $minute = floor($second/60);
    $second = $second%60;//除去整分钟之后剩余的时间 
    //返回字符串
    return $day.'天'.$hour.'小时'.$minute.'分'.$second.'秒';
}

$qtype   = '1';
$qtype = trim($qtype,',');
$content = '这是其他问题';
$qtype=explode(",",$qtype);
foreach ($qtype as $key => $value) {
    switch ($value) {
             case '1':
               $content_str .= '投票失败'.',';
               break;
             case '2':
               $content_str .= '提示验证码错误'.',';
               break;
            case '3':
               $content_str .= '账号异常'.',';
               break;
            case '4':
               $content_str .= '其他问题'.',';
               break;
             default:
               break;
           }       
}
if(in_array('4',$qtype)){
  $content_str = trim($content_str,',').':'.$content;
}else{
  $content_str = trim($content_str,',');
}
 print_r( $content_str);


// $str = "Name: <b>PHP</b> <br> Title: <b>Programming Language</b>";
// preg_match_all ("/<b>(.*)<\/b>/U", $str, $arr);
// //print_r($arr[0][0]);

// preg_match_all("/<b>(.*)<\/b>/U", $arr[0][0], $arr1);
// print_r($arr1);
// die;
// 强制转换类型
// 
//ini_set('max_execution_time', 300);
// $xcxm_pic = "http://pic.10brandchina.com/201902/25/19-58-11-653761-0.gif";
// if(file_get_contents($xcxm_pic)){
//     $xcxm_status = 1;
// }else{
//     $xcxm_status = 2;
// }

// print_r($xcxm_status);die;

// $utime = 1571194991;
// $cz['id'] = 86;
// $cz['openid'] = 'ordl6s-ttixUeX2AenwI4UdYVZzY';
// $cz['loginnum'] = 117;
// print_r(md5($cz['id'].$cz['openid'].$cz['loginnum']));die;
// print_r(md5('667e69803ee0ca7c511e50d9c3811bc5 '.$utime.'MkarsPpa9cPku0f'));die;
// print_r(date('Y年m月d日 H:i:s',time()));die;
// 
// 

//$xml = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : file_get_contents("php://input");
//$xml  =  file_get_contents("php://input");

// $param = array(
//         'apikey'      => 'abcdefgdswasas',
//         'name'        => '小明',
//         'age'         => '20'
//     );
// ksort($param);//按照键名对关联数组进行升序排序： Array ( [age] => 20 [apikey] => abcdefgdswasas [name] => 小明 )
// print_r(http_build_query($param));die;//http_build_query 生成 url_encode之后的字符串 age=20&apikey=abcdefgdswasas&name=%E5%B0%8F%E6%98%8E
// echo md5(http_build_query($param) . '&token=csdsdswewwewew');

// $mtime = explode(' ', microtime());
// $debug_starttime = $mtime[1] + $mtime[0];
// print_r($mtime);die;


// $today_starttime = strtotime(date('Y-m-d', strtotime("+1 day")).' 00:00:00');
//             $today_yesterdaytime = strtotime(date("Y-m-d",time()).' 00:00:00');
//             print_r($today_yesterdaytime);die;

// $param = array(
//         'apikey'      => 'abcdefgdswasas',
//         'name'        => '小明',
//         'age'         => '20'
//     );
// array_pop($param);//暂时去除数组最后一位
// print_r($param);die;
// 
// $re['relatedcatid'] = " ,90,09";
// $relatedcatid = explode(',',$re['relatedcatid']);
// print_r($relatedcatid);die;

function api_response($data=array(),$status=200,$msg=''){
    header('Content-Type:application/json; charset=utf-8');
    if(empty($data))
    {
        $data = compact('status', 'msg');
    }else
    {
        $data = compact('status', 'msg', 'data');
    }
    echo json_encode($data);
    exit();
}
function api_response_msg($msg='ok',$status=400){
    api_response(array(),$status,$msg);
}
api_response(array('count_down'=>60),'200','发送成功');
// {"status":"200","msg":"\u53d1\u9001\u6210\u529f","data":{"count_down":60}}
api_response_msg('图形验证码错误');
//PHP重置数组为连续数字索引的几种方式
/*
1、推荐的方式  array_values 方法
这样方式无论对普通数组还是关联数组都适用
$arr = array(
    1 => 'apple',
    3 => 'banana',
    5 => 'orange'
);
 
print_r(array_values($arr));
結果
Array
(
    [0] => apple
    [1] => banana
    [2] => orange
)
$arr1 = array(
    'name' => 'jerry',
    'age' => 16,
    'height' => '18cm'
);
print_r(array_values($arr1));
結果
Array
(
    [0] => jerry
    [1] => 16
    [2] => 18cm
)
2、使用 array_merge 方法
该方法如果只给了一个数组并且该数组是数字索引的，则键名会以连续方式重新索引。所以只能适用于数字索引。

$arr = array(
    1 => 'apple',
    3 => 'banana',
    5 => 'orange'
);
 
print_r(array_merge($arr));
 結果

Array
(
    [0] => apple
    [1] => banana
    [2] => orange
)
$arr1 = array(
    'name' => 'jerry',
    'age' => 16,
    'height' => '18cm'
);

————————————————
版权声明：本文为CSDN博主「豆蔻词工难赋深情」的原创文章，遵循 CC 4.0 BY-SA 版权协议，转载请附上原文出处链接及本声明。
原文链接：https://blog.csdn.net/zhang197093/article/details/78606916
結果
Array
(
    [name] => jerry
    [age] => 16
    [height] => 18cm
)
 */
$time = time();
$myarr = array('0'=>array("a"=>"b","c"=>"d")
              ,'1'=>array("a"=>"b","c"=>"d")
              ,'2'=>array("a"=>"b","c"=>"d"));
unset($myarr[0]);
$myarr = array_values($myarr);
$myarr1 = array_merge($myarr);
$time1 = time();
 $tag['related'] = $myarr;
 $tag['related1'] = $myarr1;
 $tag['times'] = $time1 - $time;
newDie('s');
function newDie($msg){
  global $tag;
  $tag['msg']=$msg;
  die(json_encode($tag));
}

die;
if(file_get_contents("http://pic.10brandchina.com/code/dfe134a478900208-.png")){

}else{
  print_r(1111111);die;
}
function brand_honor_content(){
        $arr = array();
        $arr[0] = '品牌排行网十大品牌水晶奖杯';
        $arr[1] = '品牌排行网十大品牌水晶奖牌';
        $arr[2] = '品牌排行网十大品牌金箔荣誉证书';
        $arr[3] = '品牌排行网十大品牌荣誉榜单链接永久有效';
        $arr[4] = '品牌排行网首页轮播展示品牌logo（需申请）';
        return $arr;
}
$brandhonor = brand_honor_content();
array_pop($brandhonor);
$zhuijia  = array("品牌排行网首页展示品牌新闻资讯");

array_push($brandhonor,"品牌排行网首页展示品牌新闻资讯");
print_r($brandhonor);die;







$arr = array("0"=>array("catname"=>"22","catid"=>"90"),"1"=>array("catname"=>"22","catid"=>"90"));
print_r(json_encode($arr));die;
$r['url'] = 'username:password@hostname/path?arg=value#anchor';

$parseUrl = parse_url($r['url']);
var_dump($parseUrl);
/*
array(4) { ["scheme"]=> string(8) "username" ["path"]=> string(22) "password@hostname/path" ["query"]=> string(9) "arg=value" ["fragment"]=> string(6) "anchor" } 
 */
$url = isset($parseUrl['scheme']) ? $r['url'] : 'http://' . $r['url'];


print_r($url);

die;
$set_config['brandhonor'] = '品牌排行网十大品牌水晶奖杯;品牌排行网十大品牌水晶奖牌;品牌排行网十大品牌金箔荣誉证书;品牌排行网十大品牌荣誉榜单链接永久有效;品牌排行网首页展示品牌新闻资讯<span>(需申请)</span>';
$brandhonor=explode(";",$set_config['brandhonor']);
array_pop($brandhonor);//暂时去除数组最后一位
print_r($brandhonor);die;


// $string = "0";
// echo preg_replace('/^0*/', '', $string);

// die;
// $str = "假数据的佛法的快递费电商扶贫对方水电费";
// echo mb_substr($str,0,-1,"UTF-8");//hp点
// die;
// print_r(crc32());die;


// $out_trade_no = '2019102211183333494653021';
// $refund_pwdsc = sha1(md5($out_trade_no.'f0cb30dd0e9b648631af2dd7ea570791'));

// print_r($refund_pwdsc);die;








$xml = "<xml><appid><![CDATA[wx76515f0ee61106e2]]></appid>
<attach><![CDATA[200004]]></attach>
<bank_type><![CDATA[CFT]]></bank_type>
<cash_fee><![CDATA[1]]></cash_fee>
<fee_type><![CDATA[CNY]]></fee_type>
<is_subscribe><![CDATA[N]]></is_subscribe>
<mch_id><![CDATA[1328178201]]></mch_id>
<nonce_str><![CDATA[a1mplxvp6i0pdy0ny398h6lm7vuh54ql]]></nonce_str>
<openid><![CDATA[ordl6s8NRvAy6P2nd5HeVC-okxm8]]></openid>
<out_trade_no><![CDATA[2019101718263048665032146]]></out_trade_no>
<result_code><![CDATA[SUCCESS]]></result_code>
<return_code><![CDATA[SUCCESS]]></return_code>
<sign><![CDATA[FEE61ECC2F16CA1BB49D0A6C4FD22D67]]></sign>
<time_end><![CDATA[20191017182634]]></time_end>
<total_fee>1</total_fee>
<trade_type><![CDATA[APP]]></trade_type>
<transaction_id><![CDATA[4200000410201910177956887621]]></transaction_id>
</xml>";
$info = FromXml($xml);  
$out_trade_no=$info['out_trade_no']; //商户系统内部订单号
    $transaction_id = $info['transaction_id']; //微信支付订单号
  $openid = $info['openid'];//用户在商户appid下的唯一标识
  $money=$info['total_fee']/100;//订单金额
  $time_end = strtotime($info['time_end']);//支付完成时间

  print_r("UPDATE g_gift_orders SET pay_status='2',trade_no='$transaction_id',paytime='$time_end' WHERE id = 1");die;
print_r($info['transaction_id']);die;
$a=array("1"=>"red","2"=>"green","3"=>"blue","4"=>"yellow","5"=>"brown");
var_dump($a);
print_r(array_slice($a,0,1));
die;
$percentage = 100;
$percentage = (string)$percentage;

var_dump($percentage);die;
$edition = '13.1.3.1';
if(strpos($edition, '13.1') === false){
  print_r(2);die;
}else{
  print_r(3);die;
}



print_r(phpinfo());die;
$val = isset($_GET['url']) ? trim($_GET['url']) : '';
$val2 = isset($_GET['cfromtypepc']) ? trim($_GET['cfromtypepc']) : '';
print_r($val2);die;

/*$url = "http://".$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];*/
$url = "http://www.10brandchina.com/p/?sid=f687bf6a771d7c69?s=1?s111=22222";
$s_count = substr_count($url,"?");
if($s_count>=2){
    $s_key=cut_str($url,'?',-1);
}else{
    $s_key=cut_str($url,'?sid=',1);
}
//$s_key=cut_str($url,'?',1);
print_r($s_key);

function cut_str($str,$sign,$number){
    $array=explode($sign, $str);
    $length=count($array);
    if($number<0){
        $new_array=array_reverse($array);
        $abs_number=abs($number);
        if($abs_number>$length){
            return 'error';
        }else{
            return $new_array[$abs_number-1];
        }
    }else{
        if($number>=$length){
            return 'error';
        }else{
            return $array[$number];
        }
    }
}
die;
$m[1] = "oNDlrt66_NmpXqlpBIxzs5jvWogQ";
$p = mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES");

// 截取字符串，超出省略号代替
function subtext($text, $length)
{
    if(mb_strlen($text, 'utf8') > $length) {
        return mb_substr($text, 0, $length - 3, 'utf8').'...';
    } else {
        return $text;
    }

}
$str = subtext("你弟IDOKfoe",3);
print_r($str);die;









$people = array("0"=>"Bill", "1"=>"Steve", "2"=>"Mark", "3"=>"David");
// $rand_news_keys_l = array_rand($people, 2);
// print_r($rand_news_keys_l);die;

if (count($people) > 2) {
  foreach (array_chunk($people, 2) as $v) {
    print_r($v);
  }
}
/*分割数组
Array ( [0] => Bill [1] => Steve ) Array ( [0] => Mark [1] => David )
 */
     die;   

/*
算数验证码
 */
// @param int $width 宽度,默认为100 * @param int $height 高度,默认为50 * @param int $fontSize 字体的大小 默认20 * @return 图片资源 */function getCaptche($width=120,$height=50,$fontSize=20){ 
// // 开启session 
// session_start(); 
// // 创建画布 
// $img = imagecreatetruecolor($width,$height); 
// // 分配颜色 
// $color = imagecolorallocate($img,255,255,255); 
// // 填充颜色 
// imagefill($img,0,0,$color); 
// // 干扰点
// for ($i = 0;$i < 500;$i++){ $pixColor = imagecolorallocate($img,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200)); imagesetpixel($img,mt_rand(0,$width),mt_rand(0,$height),$pixColor); } 
// // 干扰线 
// for ($i = 0;$i < 4;$i++){ $lineColor = imagecolorallocate($img,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120)); imageline($img,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),$lineColor); } 
// // 定义一个数组存放运算符号
//  $arr = ['+','-','*']; 
//  // 计算数组的长度
//   $len = count($arr); 
//   // 定义一个1到20的数组 
//   $num = range(1,20); $numLen = count($num); 
//   // 定义一个空数组来存放随机取得的验证码 
//   $code = []; for ($i = 0;$i < $len;$i++) { if ($i == 1) { $code[] = $arr[mt_rand(0,$len-1)]; }else { $code[] = $num[mt_rand(0,$numLen-1)]; } } $str = implode($code);
//   // 将数组转为字符串 
//   $textColor = imagecolorallocate($img,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200)); $fontAngle = 0; $x = ($width - $fontSize*3)/2; $y = ($height - $fontSize) / 2 + $fontSize; 
//   // 字体路径 
//   $font = '/img/inkfree.ttf'; 
//   imagettftext($img,$fontSize,$fontAngle,$x,$y,$textColor,$font,$str); 
//   $res = getRes($code); 
//   // 将函数存放在session中 
//   $_SESSION['res'] = $res; 
//   // 输出图片 
//   header("content-type:image/png"); 
//   imagepng($img);}
//   /** * @param $arr 一个包含运算符号的数组 * @return 返回一个运算结果 */
//   function getRes($arr) { $res = 0; 
//   // 判断数组元素下标为1的运算符号是什么 
//   switch ($arr[1]){ case '+': $res = $arr[0] + $arr[2]; break; case '-': $sum = $arr[0] - $arr[2]; break; case '*': $res = $arr[0] * $arr[2]; break; } return $res;}$width = 120;$height = 50;$fontSize = 20;
//   //调用函数
//   getCaptche($width,$height,$fontSize);

if(strpos($_SERVER['HTTP_HOST'], 'localhost') === false){
  print_r($_SERVER['HTTP_HOST']).'s';
}else{
  echo $_SERVER['HTTP_HOST'];die;
}






getValidate(100,30);
function getValidate($w,$h){
  $img = imagecreate($w,$h);
  $gray = imagecolorallocate($img,255,255,255);
  $black = imagecolorallocate($img,rand(0,200),rand(0,200),rand(0,200));
  $red = imagecolorallocate($img, 255, 0, 0);
  $white = imagecolorallocate($img, 255, 255, 255);
  $green = imagecolorallocate($img, 0, 255, 0);
  $blue = imagecolorallocate($img, 0, 0, 255);
  imagefilledrectangle($img, 0, 0, 100, 30, $black);
  for($i = 0;$i < 80;$i++){
    imagesetpixel($img, rand(0,$w), rand(0,$h), $gray);
  }
  $num1 = rand(1,19);
  $num2 = rand(1,19);
  imagestring($img,5,5, 1, $num1, $red);
  imagestring($img,5,30,1,getRand(), $white);
  imagestring($img,5,45,1,$num2, $green);
  // imagestring($img,5,55,1,getRand(), $white);
  // imagestring($img,5,65,1,$num2, $green);
  // imagestring($img,5,75,2,"=", $blue);
  // imagestring($img,5,80,3,"?", $red);
  header("content-type:image/png");
  imagepng($img);
  imagedestroy($img);
}
function getRand(){
  $code = rand(0,2);
  switch ($code) {
    case 0:
      return "+";
      break;
    case 1:
      return "-";
      break;
    case 2:
      return "*";
      break;
    default:
      # code...
      break;
  }
}




























echo date('m',time());




echo date('d',time());


$str = "<div>欢迎访问脚本之家<a href=//www.jb51.net>www.jb51.net</a></div>";
$str = htmlspecialchars_decode($str);
$str = preg_replace("/<a[^>]*>(.*?)<\/a>/is", "$1", $str);
echo $str;

die;

$catname ='%%%%%%%%*';
$catname = preg_replace('/%*/', '', $catname);//替换到*个 %


$people = array("0"=>"Bill", "1"=>"Steve", "2"=>"Mark", "3"=>"David");

echo current($people) . "<br>";//Bill
echo next($people) . "<br>";//Steve

echo reset($people);die;//Bil     函数将内部指针指向数组中的第一个元素，并输出。


//header("Location:www.10brandchina.com");

//     $input = array();
//     $input['appid'] = 'wqweqe';//appid
//     $input['body'] = "充值"; //商品描述
//     $input['mch_id'] = '1226585302';//商户id
//     $input['nonce_str'] = getNonceStr();//随机字符串 
//     $input['out_trade_no'] = 'wqweqe'.date("YmdHis");//商户系统内部的订单号,32个字符内、可包含字母,
//     $input['product_id'] = 'a'."1";//trade_type=NATIVE，此参数必传。此id为二维码中包含的商品ID，商户自行定义。
//     $input['attach'] = 'sdfsdfwer332453453';//附加数据，在查询API和支付通知中原样返回，该字段主要用于商户携带订单的自定义数据   不是必须
//     // $input['time_start'] = date("YmdHis",time()+3600*8);//交易开始时间
//     // $input['time_expire'] = date("YmdHis", time()+3600*8 + 7200);//交易结束时间

//     $time_stamp = time();

//     $input['notify_url'] = "http://www.10brandchina.com/api/pay/wxpay/notify_url.php";//接收微信支付异步通知回调地址，通知url必须为直接可访问的url，不能携带参数。
//     $input['trade_type'] = "NATIVE";//交易类型
//     $input['total_fee'] = $money*100;//订单总金额，单位为分

//     $input['spbill_create_ip'] = $_SERVER['REMOTE_ADDR'];
//     $input['sign'] = MakeSign($input);//签名
//     $xml = ToXml($input);


// $arr['return_code'] = 'success';
//         $arr['return_msg'] = 'OK';
//         $nxml = ToXml($arr);
//         echo $nxml;


// print_r($xml);


// $info = FromXml($xml);

// print_r($info);
 function postXmlCurl($xml, $url, $useCert = false, $second = 30)
    {           

        $ch = curl_init();
        //设置超时
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        
        //如果有配置代理这里就设置代理
        // if(WxPayConfig::CURL_PROXY_HOST != "0.0.0.0" 
        //  && WxPayConfig::CURL_PROXY_PORT != 0){
        //  curl_setopt($ch,CURLOPT_PROXY, WxPayConfig::CURL_PROXY_HOST);
        //  curl_setopt($ch,CURLOPT_PROXYPORT, WxPayConfig::CURL_PROXY_PORT);
        // }
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);//严格校验
        //设置header
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        if($useCert == true){


        }
        //post提交方式
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        //运行curl
        $data = curl_exec($ch);
        //返回结果
        if($data){
            curl_close($ch);
            return $data;
        } else { 
            $error = curl_errno($ch);
            curl_close($ch);
            echo "curl出错，错误码:$error";
        }
    }
function getNonceStr($length = 32) 
    {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";  
        $str ="";
        for ( $i = 0; $i < $length; $i++ )  {  
            $str .= substr($chars, mt_rand(0, strlen($chars)-1), 1);  
        } 
        return $str;
    }
function ToXml($arr)
    {
        if(!is_array($arr) 
            || count($arr) <= 0)
        {
            exit;
        }
        
        $xml = "<xml>";
        foreach ($arr as $key=>$val)
        {
            if (is_numeric($val)){
                $xml.="<".$key.">".$val."</".$key.">";
            }else{
                $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
            }
        }
        $xml.="</xml>";
        return $xml; 
    }

function FromXml($xml)
    {   
        if(!$xml){
            throw new WxPayException("xml数据异常！");
        }
        //将XML转为array
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $arr = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);     
        return $arr;
    }
    
/**
     * 生成签名
     * @return 签名，本函数不覆盖sign成员变量，如要设置签名需要调用SetSign方法赋值
     */
    function MakeSign($arr)
    {
        //签名步骤一：按字典序排序参数
        ksort($arr);
        $string = ToUrlParams($arr);
        //签名步骤二：在string后加入KEY
        $string = $string . "&key=10brandchinawxpay000000000000000";
        //签名步骤三：MD5加密    
        // var_dump($string);exit;
        $string = md5($string);
        //签名步骤四：所有字符转为大写
        $result = strtoupper($string);
        return $result;
    }

/**
     * 格式化参数格式化成url参数
     */
    function ToUrlParams($arr)
    {
        $buff = "";
        foreach ($arr as $k => $v)
        {
            if($k != "sign" && $v != "" && !is_array($v)){
                $buff .= $k . "=" . $v . "&";
            }
        }
        
        $buff = trim($buff, "&");
        return $buff;
    }
    


die;
























$ss = 1;
$ss = (string)($ss);
$ss = (array)($ss);
var_dump($ss);die;

$ss = html_entity_decode('击破双方都咳嗽s');
print_r($ss);die;

/*足迹缓存*/
$hcbangdan = $memcache->get("brandcard_".$userphone);//获取用户成功案例缓存
if($hcbangdan){ //如果存在缓存
    $allcaselist = json_decode($hcbangdan,true);

    //去重
    foreach ($allcaselist as $k=>$v){
        if($v['title'] == $caselist['title']){
            unset($allcaselist[$k]);
        }
    }
    //在数组开头加一条数据
    array_unshift($allcaselist,$caselist);
    if(count($allcaselist) > 20){//超过20条 删除最后一条
        array_pop($allcaselist);
    }
    $newcaselist = json_encode($allcaselist);
    $memcache->set("brandcard_".$userphone,$newcaselist,false,2592000); // 足迹缓存有效时间1个月

}else{//如果存在缓存，添加缓存
    $caselist = array($caselist);
    $newcaselist = json_encode($caselist);//转成json
    $memcache->set("brandcard_".$userphone,$newcaselist,false,2592000); // 足迹缓存有效时间1个月
}



 // 获取总记录数
$count = $db->get_one("SELECT count(*) as num FROM {$DT_PRE}brand_24 WHERE status = 3 AND level = 1");
$count = $count['num'] > 3 ? $count['num'] - 3 : $count['num'];
// 生成随机起始数
$offset = mt_rand(0,$count);
$res = $db->query("SELECT itemid,thumb,title,introduce FROM {$DT_PRE}brand_24 WHERE status = 3 AND level = 1 LIMIT {$offset},3");


shuffle($brandlist); // 打乱次序


//打乱一副牌
//PHP7有个新的随机数函数 random_int()
function cardsUpset($cards){
    $tmpCards = $cards;                     //复制一副牌作为缓存变量
    $newCards = [];                         //新键一个空数组作为
    $count = count($tmpCards);              //获取数组最大数量进行遍历
    for($i=0;$i<$count;$i++){               //遍历所有的数字
        sort($tmpCards);                    //强制排序缓存牌
        $max = count($tmpCards);            //判断缓存牌里数组的最大数量
        $index = random_int(1,$max);        //生成一个随机的索引
        $index--;                           //由于数组从 0表示  所以需要把索引减1
        $newCards[]=$tmpCards[$index];      //将内容放入新的数组里
        unset($tmpCards[$index]);           //删除缓存数组当前索引记录
    }
    return $newCards;
}

/*
指定开始时间内   到 指定截止时间内的
 */
$time = '2019-01-01';
$time.=" 00:00:00";
$time=strtotime($time);


$where=whereMinTime($sdatemin,'fromdate',$where);
$where=whereMaxTime($sdatemax,'fromdate',$where);
$where=whereMinTime($edatemin,'todate',$where);
$where=whereMaxTime($edatemax,'todate',$where);



function whereMinTime($time,$name,$where){
    if($time){
        $time.=" 00:00:00";
        $time=strtotime($time);
        if($time){
            $where.=" and $name>=$time";
        }
    }
    return $where;
}

function whereMaxTime($time,$name,$where){
    if($time){
        $time.=" 23:59:59";
        $time=strtotime($time);
        if($time){
            $where.=" and $name<=$time";
        }
    }
    return $where;
}




























$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,3));

define("CATE_URL","http://app.top-10.cn/new_io/1.0/brand/news.php?action=shouye");
//请求接口
$stair_cate = curl_request(CATE_URL);
$stair_cate = json_decode($stair_cate,true);
//print_r($stair_cate);
print_r(array_chunk($stair_cate['leaderlist'],3,true));die;
header("location: http://m.10brandchina.com/");
/*
备注

array_chunk(array,size,preserve_keys);

参数  描述
array   必需。规定要使用的数组。
size    必需。一个整数，规定每个新数组块包含多少个元素。
preserve_key    可选。可能的值：
true - 保留原始数组中的键名。
false - 默认。每个新数组块使用从零开始的索引。

array_chunk($arr,num);将数组分为 num个
适用于 几个一循环的数据
        <!--第一个-->
        <div class="swiper-slide">
          {loop $article_arr[0] $i $t}
              <div class="barf">
                <a href="/news/news_info.php?itemid={$t[itemid]}">
                  <img class="swiper-item_img" src="{$t[thumb]}" />
                  <p class="swiper-item_desc">{$t[title]}</p>
                  <p class="swiper-item_text">{$t[introduce]}</p>
                </a>
              </div>
          {/loop}
        </div>
        <!--第二个-->
        <div class="swiper-slide">
            {loop $article_arr[1] $i $t}
              <div class="barf">
                <a href="/news/news_info.php?itemid={$t[itemid]}">
                  <img class="swiper-item_img" src="{$t[thumb]}" alt="{$t[alt]}" />
                  <p class="swiper-item_desc">{$t[title]}</p>
                  <p class="swiper-item_text">{$t[introduce]}</p>
                </a>
              </div>
            {/loop}
        </div>
 */
// $str = '品牌排行网十大品牌水晶奖杯;品牌排行网十大品牌水晶奖牌;品牌排行网十大品牌金箔荣誉证书;品牌排行网十大品牌荣誉榜单链接永久有效;品牌排行网首页轮播展示品牌Logo<span>(需申请)</span>;品牌排行网首页展示品牌新闻资讯<span>(需申请)</span>';
// $str = strip_tags($str);
// $brandhonor=explode(";",$str);

// print_r($brandhonor);die;
// $a=array("a"=>"red","b"=>"green","c"=>"blue");

// echo array_shift($a)."<br/>";//删除第一个元素的值 返回删除的值

// print_r ($a);//删除第一个元素的值 打印剩下的

// echo array_pop($a)."<br/>";//删除最后一个元素的值 并返回 删除值
// print_r ($a);//删除最后一个元素的值 打印剩下的

// array_push($a, "purple");//向数组后面追加值
// print_r($a);die;//Array ( [b] => green [0] => purple )
// echo number_format("100258880");die;
// //注意
/*
if (empty($value)) {
                    continue;
                }
 */

/*
{if word_count($catArr[jieshao])>10 } 
    {if word_count($catArr[jieshao]) >185}
        {mb_substr($catArr[jieshao],0,185,'utf-8')}... 
    {else}
        {$catArr[jieshao]}  
    {/if}
{else}
    暂无行业介绍 
{/if}
                                
 */
foreach ($userid as $key => $value) {
                if (empty($value)) {
                    continue;
                }
                $openuser = $db->get_one("SELECT openid FROM {$DT_PRE}open_user_6 WHERE id = $value");
                if (!$openuser) continue;
                if (array_key_exists($value, $openusers)) {
                    continue;
                }
                $lists[$value] = $truename[$key];
            }




$info=file_get_contents('http://www.360kan.com/dianying/list.php?rank=rankhot&cat=all&area=all&act=all&year=all&pageno='.$page1);
//print_r($info);

$vname='#<span class="s1">(.*?)</span>#';//取出电影的名字
preg_match_all($vname, $info,$namearr);

$vlist='#<a class="js-tongjic" href="(.*?)">#';//取出电影的详情列表
preg_match_all($vlist, $info,$listarr);


//print_r($namearr);die;
//die;
foreach ($namearr[1] as $key => $value)
{
 //var_dump($value);die;
    
    $gul=$yuming.$listarr[1][$key];//取出播放链接
    $cd=$host.'/alist.php?id='.$gul;
    $guq=$listarr[1][$key];
    $_GET['id']=$gul;

    $zimg=$imgarr[1][$key];//取出图片链接
    $zname=$namearr[1][$key];//取出影片名字
    $fname=$fnamearr[1][$key];//取出影片评分
    $nname=$nnamearr[1][$key];//取出影片评分
    $zstar=$stararr[1][$key];
    $jiami=base64_encode($gul);
  
    $chuandi=$host.'/inc/b.php?id='.$jiami;
    
}




//定义 PHP返回404状态码，由服务器处理
// header('HTTP/1.1 302 Not Found');
// header("status: 404 Not Found");
//或
//http_response_code(302);
//Status Code: 302 Moved Temporarily
//exit;
//动态 字母 验证码 https://center.goeasy.io/cn/account/captcha
//https://center.goeasy.io/cn/account/feedback?jsonpCallback=jQuery1111040085176349956164_1565590618145&content=werwe&contact=rewrwe&_=1565590618146
//https://center.goeasy.io/cn/account/sendverifycode
//mobileNumber:18033730426
//captcha:9yev
//跳转地址
// $url = "http://www.guanwei.org";

// echo "<script language='javascript' type='text/javascript'>";

// echo " window.location.href='$url' ";

// echo "</script>";

// header("Location: http://www.111cn.net");
//header("Location: https://www.baidu.com"); 
// //确保重定向后，后续代码不会被执行 
// exit;
// $url = "http://www.guanwei.org";

// echo "<script>";
// echo "window.location.href='$url'";
// echo "</script>";

//echo "<meta http-equiv='refresh' content='10;URL=http://www.111cn.net' />";
$_username =  "pinglun1";
$s = strstr($_username,"pinglun" );//  符合 pinglun  前缀的 账号

//setcookie('remember_user_token','BAhbB1sGaQOs1k8iIiQyYSQxMCRUQkZqMnJpdmMvdWp6QTQxaWNHRHB1--fcebd4a827a3eab911e53bd3f7a15b9b0152bd78','/','.gitee.com');
//跨域读取cookie 
// $arr = get_headers('https://gitee.com',1);
// print_r($arr['Set-Cookie']);die;


//setcookie("remember_user_token", "BAhbB1sGaQOs1k8iIiQyYSQxMCRUQkZqMnJpdmMvdWp6QTQxaWNHRHB1--fcebd4a827a3eab911e53bd3f7a15b9b0152bd78", 0, "/", ".gitee.com",1);
//setcookie("remember_user_token","");

define("CATE_URL","https://gitee.com/xany/bestshop-php/comment_list?page=3&path=%2F");
//请求接口
$stair_cate = curl_request(CATE_URL);
$stair_cate = json_decode($stair_cate,true);

$ss = $stair_cate["html"];

//preg_match_all('/<div class=\"comment note\"  data-note-id="(.*?)"\/>/', $ss, $matches);

//preg_match_all( '/data\-note\-id=\'(\d+)\'/', $ss, $res );
/////var_dump( preg_match_all( '/data\-note\-id=\'(\d+)\'/', $a, $res ) );
// <div class='text note-content markdown-body' type='note' typeId='1945832' username='yiovo'>
// <p>谢谢</p></div>
$regex4="/ <div class='text note-content markdown-body' type='note' typeid='(\d+)' username='yiovo'>
<p>(.*?)<\/p><\/div>/"; 
if(preg_match_all($regex4, $ss, $matches)){ 
print_r($matches); die;
}else{ 
echo '0'; 
}

preg_match_all( '/<div class="comment note" \/>(.*)<\/div>/', $ss, $res );
print_r( $res);
die;


print_r($matches);die;
foreach($stair_cate as $key =>$v){
    print_r($v['html']);
}


var_dump($stair_cate);die;


$arr = array("aa"=>"1111","bb"=>"2222","cc"=>"3333","cc"=>"33323");
extract($arr, EXTR_SKIP);
echo $aa;
echo "<br>";
echo $bb;
echo "<br>";
echo $cc;//当发生冲突时跳过一个元素

$itemids = "2";
$itemid=explode("-",$itemids);
print_r($itemid);

function delete($itemid) {
        global $username,$db,$table;
        if(is_array($itemid)) {
            foreach($itemid as $v) {delete($v);}
        } else {
            $itemid=intval($itemid);
            $db->query("UPDATE {$table} SET status=0 WHERE itemid={$itemid} AND username='{$username}'");
            return true;
        }
}








define("CATE_URL","http://app.top-10.cn/new_io/1.0/brand/news.php");
//请求接口
$stair_cate = curl_request(CATE_URL, array('action' => 'shouye'));
$stair_cate = json_decode($stair_cate,true);
//print_r($stair_cate);
function curl_request($url, $post = '', $cookie = '', $returnCookie = 0) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)');
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
    curl_setopt($curl, CURLOPT_REFERER, "http://XXX");

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); //不验证证书
    if ($post) {
        curl_setopt($curl, CURLOPT_POST, 1);//post提交方式
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));//post的数据
    }
    if ($cookie) {
        curl_setopt($curl, CURLOPT_COOKIE, $cookie);
    }
    curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($curl);
    if (curl_errno($curl)) {
        return curl_error($curl);
    }
    curl_close($curl);
    if ($returnCookie) {
        list($header, $body) = explode("\r\n\r\n", $data, 2);
        preg_match_all("/Set\-Cookie:([^;]*);/", $header, $matches);
        $info['cookie'] = substr($matches[1][0], 1);
        $info['content'] = $body;
        return $info;
    } else {
        return $data;
    }
}








$filepath = 'DT_UPLOAD'.'/file/upload'.'2019/8';
$s = ltrim($filepath,'DT_UPLOAD'.'/file/upload');



print_r(strtotime("-20 day"));
function comment(){
    
    $array['px']=12;
    $array['comment'] = 13;
    return $array;
}
$str  = comment();
var_dump($str);
echo $str['px'];

/*
function comment($brandid,$moduleid){
    global $db;
    $stat = $db->get_one("SELECT * FROM g_comment_stat WHERE itemid=$brandid");
    if($stat && $stat['comment']) {
        $stat['pc3'] = dround($stat['star3']*100/$stat['comment'], 2, true);
    } else {
        $stat['star3'] = 0;
        $stat['pc3'] = 0;
        $stat['comment'] = 0;
    }
    $array['px']=$stat['pc3']*62/100;
    $array['comment'] = $stat['comment'];
    return $array;
}
function dround($var, $precision = 2, $sprinft = false) {
    $var = round(floatval($var), $precision);
    if($sprinft) $var = sprintf('%.'.$precision.'f', $var);
    return $var;
}

控制进度
<td class="feedbackRate"><img src="{DT_SKIN}brand/grayStar.png" id="grayStar"  width="66" height="22"/><span style="width:{$str['px']}px;height:22px;"></span></td>
 */

$content = "\n深圳市龙岗区坂田街道五和和诚世纪名园2栋A座2702\n";var_dump($content);

$content = trim($content); 
var_dump($content);
$content=str_replace("\n","",$content);

//var_dump($content);die;
// $s = getrandstr();
// print_r($s);die;
function b_fix_link($url) {
//    if (strlen($url) < 10) return '';
    return strpos($url, '://') === false ? 'http://' . $url : $url;
}

/**
 * 去除emoji表情
 * @param $text
 * @return null|string|string[]
 */
function removeEmoji($text) {
    $clean_text = "";
    // Match Emoticons
    $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
    $clean_text = preg_replace($regexEmoticons, '', $text);
    // Match Miscellaneous Symbols and Pictographs
    $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
    $clean_text = preg_replace($regexSymbols, '', $clean_text);
    // Match Transport And Map Symbols
    $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
    $clean_text = preg_replace($regexTransport, '', $clean_text);
    // Match Miscellaneous Symbols
    $regexMisc = '/[\x{2600}-\x{26FF}]/u';
    $clean_text = preg_replace($regexMisc, '', $clean_text);
    // Match Dingbats
    $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    return $clean_text;
}
//同上
// public function removeEmoji($clean_text)
// {
//     // 方法1：只取合法字符
//     preg_match_all("/[\x{4e00}-\x{9fa5}|0-9|a-z|A-Z|_]/u", $clean_text, $matches);
//     $clean_text = isset($matches[0]) ? implode('', $matches[0]) : '';


//     // 方法2：去除表情字符，但测试过程中发现无法出去“国旗”表情
//     // Match Emoticons
//     $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
//     $clean_text = preg_replace($regexEmoticons, '', $clean_text);

//     // Match Miscellaneous Symbols and Pictographs
//     $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
//     $clean_text = preg_replace($regexSymbols, '', $clean_text);

//     // Match Transport And Map Symbols
//     $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
//     $clean_text = preg_replace($regexTransport, '', $clean_text);

//     // Match Miscellaneous Symbols
//     $regexMisc = '/[\x{2600}-\x{26FF}]/u';
//     $clean_text = preg_replace($regexMisc, '', $clean_text);

//     // Match Dingbats
//     $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
//     $clean_text = preg_replace($regexDingbats, '', $clean_text);

//     return $clean_text;
// }

function getrandstr(){
    $str='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $randStr = str_shuffle($str);//打乱字符串
    $rands= substr($randStr,0,7);//substr(string,start,length);返回字符串的一部分
    return $rands;
}

function dhttp($status, $exit = 1) {
    switch($status) {
        case '301': @header("HTTP/1.1 301 Moved Permanently"); break;
        case '403': @header("HTTP/1.1 403 Forbidden"); break;
        case '404': @header("HTTP/1.1 404 Not Found"); break;
        case '503': @header("HTTP/1.1 503 Service Unavailable"); break;
    }
    if($exit) exit;
}
function dheader($url) {
    exit(header('location:'.$url));
}
function d301($url) {
    dhttp(301, 0);
    dheader($url);
}
//d301("www.baidu.com");



$number = '1_85';

$result = substr($number,strripos($number,"_")+1);
echo $result;

//获取图片后缀
function file_ext($filename) {
    return strtolower(trim(substr(strrchr($filename, '.'), 1)));
}

$ext = file_ext('5640.jpg');
var_dump($ext);

//下载文件
function file_down($file, $filename = '', $data = '') {
    if(!$data && !is_file($file)) exit;
    $filename = $filename ? $filename : basename($file);
    $filetype = file_ext($filename);
    $filesize = $data ? strlen($data) : filesize($file);
    ob_end_clean();
    @set_time_limit(0);
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
    } else {
        header('Pragma: no-cache');
    }
    header('Expires: '.gmdate('D, d M Y H:i:s').' GMT');
    header('Content-Encoding: none');
    header('Content-Length: '.$filesize);
    header('Content-Disposition: attachment; filename='.$filename);
    header('Content-Type: '.$filetype);
    if($data) { echo $data; } else { readfile($file); }
    exit;
}
//生成文件 data.php 
//file_down('data.php','','tes');

//$data = convert($data, DT_CHARSET, 'GBK');
file_down('','contact.csv',$data);


//强制跳转.
//header('Location:http://www.10brandchina.com');
$agent = $_SERVER ['HTTP_USER_AGENT'];
print_r($agent);

$edition = isset($edition) ? $edition : '3.5.5';//版本号
//http_response_code(404);exit;
$sitting_edition = '3.6.0';//后台设定的版本号 若app版本号比此版本号大 则 显示 固定的投票数据 和固定的用户
$compare = versionCompare($edition,$sitting_edition);//假如当前版本号比我的版本号大 那么就显示 固定的投票记录
var_dump($compare);die;
//PHP_VERSION：当前PHP的版本号
if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
     echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
 }
if(preg_match("/(iPhone|iPod|Android|Phone|Mobile)/i", $_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER["HTTP_USER_AGENT"],'MicroMessenger')!==false){
    $isWeiXin=1;
}elseif(!preg_match("/(iPhone|iPod|Android|Phone|Mobile)/i", $_SERVER['HTTP_USER_AGENT'])){
    $jumpurl = DT_PATH."p?sid=".$sid;
    //dheader($jumpurl);//pc跳转
}
//var_dump($compare);die;
//比较版本号
function versionCompare($a, $b)
{
    // a,b已存在、非空字符串或者非零
    if (empty($a) || empty($b))
        return "errmsg：不可为空。";

    // 字符串必须为用'.'隔开的数字串
    $rule = "/^\d+(\.\d+)*$/";
    $aMat = preg_match($rule, $a);
    $bMat = preg_match($rule, $b);
    var_dump($bMat);
    if (!$aMat || !$bMat)
        return "errmsg: 必须为用'.'隔开的数字串。";

    // 移除最后的.0
    $a = explode(".", rtrim($a, ".0"));
    $b = explode(".", rtrim($b, ".0"));
    //var_dump($a);//3 5 5
    //var_dump($b);//5
    foreach ($a as $depth => $aVal)
    {
        var_dump($b[$depth]);
        if (isset($b[$depth])){
            if ($aVal > $b[$depth]) return '>';
            else if ($aVal < $b[$depth]) return '<';
        }else{
            return '>';
        }
    }
    return (count($a) < count($b)) ? '<' : '=';
}
