<?php
class EncodeID{
/**
 * Translates a number to a short alhanumeric version
 *
 * Translated any number up to 9007199254740992
 * to a shorter version in letters e.g.:
 * 9007199254740989 --> PpQXn7COf
 *
 * specifiying the second argument true, it will
 * translate back e.g.:
 * PpQXn7COf --> 9007199254740989
 *
 * this function is based on any2dec && dec2any by
 * fragmer[at]mail[dot]ru
 * see: http://nl3.php.net/manual/en/function.base-convert.php#52450
 *
 * If you want the alphaID to be at least 3 letter long, use the
 * $pad_up = 3 argument
 *
 * In most cases this is better than totally random ID generators
 * because this can easily avoid duplicate ID's.
 * For example if you correlate the alpha ID to an auto incrementing ID
 * in your database, you're done.
 *
 * The reverse is done because it makes it slightly more cryptic,
 * but it also makes it easier to spread lots of IDs in different
 * directories on your filesystem. Example:
 * $part1 = substr($alpha_id,0,1);
 * $part2 = substr($alpha_id,1,1);
 * $part3 = substr($alpha_id,2,strlen($alpha_id));
 * $destindir = "/".$part1."/".$part2."/".$part3;
 * // by reversing, directories are more evenly spread out. The
 * // first 26 directories already occupy 26 main levels
 *
 * more info on limitation:
 * - http://blade.nagaokaut.ac.jp/cgi-bin/scat.rb/ruby/ruby-talk/165372
 *
 * if you really need this for bigger numbers you probably have to look
 * at things like: http://theserverpages.com/php/manual/en/ref.bc.php
 * or: http://theserverpages.com/php/manual/en/ref.gmp.php
 * but I haven't really dugg into this. If you have more info on those
 * matters feel free to leave a comment.
 *
 * @author  Kevin van Zonneveld <kevin@vanzonneveld.net>
 * @author  Simon Franz
 * @author  Deadfish
 * @copyright 2008 Kevin van Zonneveld (http://kevin.vanzonneveld.net)
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD Licence
 * @version   SVN: Release: $Id: alphaID.inc.php 344 2009-06-10 17:43:59Z kevin $
 * @link    http://kevin.vanzonneveld.net/
 *
 * @param mixed   $in    String or long input to translate
 * @param boolean $to_num  Reverses translation when true
 * @param mixed   $pad_up  Number or boolean padds the result up to a specified length
 * @param string  $passKey Supplying a password makes it harder to calculate the original ID
 *
 * @return mixed string or long
 */
public   function alphaID($in, $to_num = false, $pad_up = false, $passKey = null)
{
  $index = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  if ($passKey !== null) {
    // Although this function's purpose is to just make the
    // ID short - and not so much secure,
    // with this patch by Simon Franz ()
    // you can optionally supply a password to make it harder
    // to calculate the corresponding numeric ID
 
    for ($n = 0; $n<strlen($index); $n++) {
      $i[] = substr( $index,$n ,1);
    }
 
    $passhash = hash('sha256',$passKey);
    $passhash = (strlen($passhash) < strlen($index))
      ? hash('sha512',$passKey)
      : $passhash;
 
    for ($n=0; $n < strlen($index); $n++) {
      $p[] =  substr($passhash, $n ,1);
    }
 
    array_multisort($p,  SORT_DESC, $i);
    $index = implode($i);
  }
 
  $base  = strlen($index);
 
  if ($to_num) {
    // Digital number  <<--  alphabet letter code
    $in  = strrev($in);
    $out = 0;
    $len = strlen($in) - 1;
    for ($t = 0; $t <= $len; $t++) {
      $bcpow = bcpow($base, $len - $t);
      $out   = $out + strpos($index, substr($in, $t, 1)) * $bcpow;
    }
 
    if (is_numeric($pad_up)) {
      $pad_up--;
      if ($pad_up > 0) {
        $out -= pow($base, $pad_up);
      }
    }
    $out = sprintf('%F', $out);
    $out = substr($out, 0, strpos($out, '.'));
  } else {
    // Digital number  -->>  alphabet letter code
    if (is_numeric($pad_up)) {
      $pad_up--;
      if ($pad_up > 0) {
        $in += pow($base, $pad_up);
      }
    }
 
    $out = "";
    for ($t = floor(log($in, $base)); $t >= 0; $t--) {
      $bcp = bcpow($base, $t);
      $a   = floor($in / $bcp) % $base;
      $out = $out . substr($index, $a, 1);
      $in  = $in - ($a * $bcp);
    }
    $out = strrev($out); // reverse
  }
 
  return $out;
}


/**
 * random string
 */
public  function randstr($len=8, $chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789') {
    $i = 0;
    $str = '';
    $randmax = strlen($chars)-1;

    for($i=0; $i<$len; ++$i) {
        $str .= $chars[mt_rand(0,$randmax)];
    }

    return strtolower($str);
}

/**
 * filter unicode
 */
public  function stripUni($str){
$patern="/[@&\/]/";
$str=preg_replace($patern,'',$str);	
if(!$str) return false;
$unicode = array(
'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
'd'=>'đ',
'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
'i'=>'í|ì|ỉ|ĩ|ị',
'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
);
foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
return $str;
}

/**
 * filter unicode
 */
public function stripUnicode($str)
{
	$tilte=trim($this->stripUni($str));
    $title=str_replace(" ","-",$tilte);
	return $title;
}

/**
 * filter unicode and remove space
 */
public  function seoId($id)
{
	$seoId=$this->alphaID($id);
	$seoId=$seoId.$this->randstr();
	return $seoId;
}

/**
 * create title and id
 */
public function createTitle($title,$id,$u="")
{
	$title=$this->stripUnicode($title);
	$url=$INI['system']['wwwprefix']."/$u/".$id."/".strtolower($title).".html";
	return $url;
}

/**
 * get id from title
 */
public function getIdTitle($matches,$title=true)
{
//cat lay id
if($title==true)
{
$id = ltrim(strrchr($matches,'-'),'-');
}
else
{
	$id=$matches;
}
$id=substr($id,0,strlen($id)-8);

//giai ma
$id=$this->alphaID($id,true);
return abs(intval($id));
}

/*function test()
{
$cham=strrpos($matches[2],'-');
$chuoi=substr($matches[2],($cham+1),strlen($matches[2]));
$arr=explode(".",$chuoi);
$id=$arr[0];
}*/

}
?>