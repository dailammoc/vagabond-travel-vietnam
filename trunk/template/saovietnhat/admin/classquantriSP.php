<?php
require_once "../classdb.php";
class quantriSP extends db{
		
    public function remove_unicode($cs)
  	{
  		$marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề"
,"ế","ệ","ể","ễ",
"ì","í","ị","ỉ","ĩ",
"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
,"ờ","ớ","ợ","ở","ỡ",
"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
"ỳ","ý","ỵ","ỷ","ỹ",
"đ",
"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
"Ì","Í","Ị","Ỉ","Ĩ",
"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
,"Ờ","Ớ","Ợ","Ở","Ỡ",
"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
"Đ");
		$marKoDau=array("a","a","a","a","a","a","a","a","a","a","a"
,"a","a","a","a","a","a",
"e","e","e","e","e","e","e","e","e","e","e",
"i","i","i","i","i",
"o","o","o","o","o","o","o","o","o","o","o","o"
,"o","o","o","o","o",
"u","u","u","u","u","u","u","u","u","u","u",
"y","y","y","y","y",
"d",
"A","A","A","A","A","A","A","A","A","A","A","A"
,"A","A","A","A","A",
"E","E","E","E","E","E","E","E","E","E","E",
"I","I","I","I","I",
"O","O","O","O","O","O","O","O","O","O","O","O"
,"O","O","O","O","O",
"U","U","U","U","U","U","U","U","U","U","U",
"Y","Y","Y","Y","Y",
"D");
		return str_replace($marTViet,$marKoDau,$cs);
 	 }
	public function ListSP ($pageNum = 1, $pageSize = 5, $table, $idSP){
	$startRow = ($pageNum-1)*$pageSize;
		$sql="	SELECT *
				FROM $table
				ORDER BY $idSP DESC
				LIMIT $startRow, $pageSize";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	} //List sp
	
	public function ListTinTuc ($pageNum = 1, $pageSize = 5, $table, $idSP){
	$startRow = ($pageNum-1)*$pageSize;
		$sql="	SELECT *
				FROM $table
				ORDER BY $idSP DESC
				LIMIT $startRow, $pageSize";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	} //List tin tuc
	
//------------------------------------------------------------------
	
	public function ListHistory ($pageNum = 1, $pageSize = 5){
	$startRow = ($pageNum-1)*$pageSize;
		$sql="	SELECT * FROM history_nhapkho,sanpham where history_nhapkho.id_sanpham=sanpham.idSP ORDER BY history_nhapkho.ngaynhap DESC
				LIMIT $startRow, $pageSize";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	} //List History
	
//------------------------------------------------------------------
	public function DemSoSP($table){
		$sql="	SELECT count(*) 
				FROM  $table ";
		$rs = mysql_query($sql) or die(mysql_error());
		$rows_rs = mysql_fetch_row($rs);
		$totalRows = $rows_rs[0];
		return $totalRows;
	}//Dem So sp	

//-------------------------------------------------------------------

	public function ChiTietSP($table, $key, $giaTri){		
		$sql = "SELECT * FROM $table WHERE $key=$giaTri";
		$kq = mysql_query($sql);
		return $kq;	
	}//chi tiet sp
	
//--------------------------------------------------------------------	
	
	public function XoaSP($table, $key, $giaTri){
		$sql="DELETE FROM $table WHERE $key=$giaTri";
		mysql_query($sql) or die(mysql_error());		
	}
	
//-------------------------------------------------------------------------------------------------------------------------------------	
		






//-------------------------------------------------------------------------------------------------------------------------------------








//-------------------------------------------------------------------------------------------------------------------------------------

	public function ThemLoai(){
	
		//Tiếp nhận dữ liệu từ form
		$tenLoai= $_POST['tenLoai'];
		$chungLoai= $_POST['chungloai'];
        $ngonngu =	$_POST['ngonngu'];
        $icon = $_POST['icon'];		
		//Kiểm tra dữ liệu đã nhận		
		$tenLoai = trim(strip_tags($tenLoai));				
		if (get_magic_quotes_gpc()== false) {
			$tenLoai = mysql_real_escape_string($tenLoai);
		    $chungLoai= mysql_real_escape_string($chungLoai);
            $ngonngu =	mysql_real_escape_string($ngonngu);
		}
		
		//chèn vào db	
        $rs=mysql_query('SELECT max(ThuTu) FROM `loaisp`');	
       	$rs_r=@mysql_fetch_array($rs);
        if($rs_r!=FALSE)
           $max=$rs_r[0]+1;
        else
           $max=1;		
		$sql='INSERT INTO `loaisp` (`idLoai`, `idCL`, `TenLoai`, `TenLoai_KhongDau`, `Icon`, `lang`, `ThuTu`) VALUES (NULL, "'.$chungLoai.'", "'.addslashes($tenLoai).'", "'.str_replace(' ','-',strtolower($this->remove_unicode($tenLoai))).'", "'.$icon.'", "'.$ngonngu.'", "'.$max.'")';
		mysql_query($sql) or die(mysql_error());	
	}

//----------------------------------------------------------------------------
	
	
	
//-------------------------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------

	public function ChinhLoai($idLoai){
	
		//Tiếp nhận dữ liệu từ form
		$tenLoai= $_POST['tenLoai'];
			
		//Kiểm tra dữ liệu đã nhận		
		$chungLoai= $_POST['chungloai'];
        $ngonngu =	$_POST['ngonngu'];
        $icon = $_POST['icon'];		
		$thutu=$_POST['thutu'];	
		//Kiểm tra dữ liệu đã nhận		
		$tenLoai = trim(strip_tags($tenLoai));				
		if (get_magic_quotes_gpc()== false) {
			$tenLoai = mysql_real_escape_string($tenLoai);
		    $chungLoai= mysql_real_escape_string($chungLoai);
            $ngonngu =	mysql_real_escape_string($ngonngu);
			$thutu =	mysql_real_escape_string($thutu);
		}
		
		//chèn vào db
        if($thutu!='')		
		{
		   $sql='UPDATE `loaisp` SET `idCL` = "'.$chungLoai.'",
`TenLoai` = "'.$tenLoai.'",
`TenLoai_KhongDau` = "'.str_replace(' ','-',strtolower($this->remove_unicode($tenLoai))).'",
`Icon` = "'.$icon.'",
`lang` = "'.$ngonngu.'",
`ThuTu` = "'.$thutu.'" WHERE `idLoai` ='.$idLoai;
        }
        else
		{
		   $sql='UPDATE `loaisp` SET `idCL` = '.$chungLoai.',
`TenLoai` = "'.$tenLoai.'",
`TenLoai_KhongDau` = "'.str_replace(' ','-',strtolower($this->remove_unicode($tenLoai))).'",
`Icon` = "'.$icon.'",
`lang` = "'.$ngonngu.'" WHERE `idLoai` ='.$idLoai;
        }
		mysql_query($sql) or die(mysql_error());	
	}
	
//-------------------------------------------------------------------------------------------------------------------------------------		
	
	
	
	
	
	
	
//-------------------------------------------------------------------------------------------------------------------------------------
	
	public function ThemSP(){
	
		//Tiếp nhận dữ liệu từ form
		$idLoai= intval($_POST['idLoai']);
		if(!isset($_POST['idcLoai']))
		{
		   $row_loai=mysql_fetch_array(mysql_query('SELECT * FROM `loaisanpham` WHERE idLoai='.$idLoai));
		   $idcLoai=$row_loai['idCL'];
		}
		else
		   $idcLoai= intval($_POST['idcLoai']);
		$tenSP= $_POST['tenSP'];	
        if($tenSP=="")
		  return -1;			
		$gia= $_POST['gia'];				
		$urlHinh = $_POST['urlHinh'];		
        $moTa=$_POST['MoTa'];
        $chiTiet= $_POST['chiTiet'];		
		$thutu= $_POST['thutu'];			
		
		//chèn vào db		
		$sql='INSERT INTO `sanpham` (`idSP`, `idCL`, `idLoai`, `TenSP`, `TenSP_KhongDau`, `MoTa`, `ChiTiet`, `Gia`, `UrlHinh`, `ThuTu`) VALUES (NULL, "'.$idcLoai.'", "'.$idLoai.'", "'.addslashes($tenSP).'", "'.str_replace(' ','-',strtolower($this->remove_unicode($tenSP))).'", "'.addslashes($moTa).'", "'.addslashes($chiTiet).'", "'.$gia.'", "'.$urlHinh.'", "'.$thutu.'")';
	$kq=mysql_query($sql) or die(mysql_error());
	if($kq==TRUE)
        return 1;		
	return -1;
}

//----------------------------------------------------------------------------
	
	public function ChinhSP($idSP){	

		//Tiếp nhận dữ liệu từ form
		$idLoai= intval($_POST['idLoai']);
		$tenSP= $_POST['tenSP'];	
		if($tenSP=="")
		  return -1;		
		$gia= $_POST['gia'];				
		$urlHinh = $_POST['urlHinh'];		
        $moTa=$_POST['MoTa'];
        $chiTiet= $_POST['chiTiet'];		
		$thutu= $_POST['thutu'];	
		//Kiểm tra dữ liệu đã nhận			
		
		//chèn vào db		
		$sql='UPDATE `sanpham` SET `idLoai` = "'.$idLoai.'",`TenSP` = "'.addslashes($tenSP).'",`TenSP_KhongDau` = "'.str_replace(' ','-',strtolower($this->remove_unicode($tenSP))).'",
`MoTa` = "'.addslashes($moTa).'",
`ChiTiet` = "'.addslashes($chiTiet).'",
`Gia` = "'.$gia.'",
`UrlHinh` = "'.$urlHinh.'",
`ThuTu` = "'.$thutu.'" WHERE `idSP` ='.$idSP;

		$kq=mysql_query($sql) or die(mysql_error());
		if($kq==TRUE)
		   return 1;
        return -1;		
	}
	
//-------------------------------------------------------------------------------------------------------------------------------------	
	
	
	
	
	
	
//-------------------------------------------------------------------------------------------------------------------------------------
	public function ChinhTT($idGT){
	
		//Tiếp nhận dữ liệu từ form
		$chiTiet= $_POST['chiTiet'];	
        $gt=$_POST['tenGT'];	
        if($gt=="")
            return -1;		
		//Kiểm tra dữ liệu đã nhận	
		//if (get_magic_quotes_gpc()== false) {
			//$chiTiet = mysql_real_escape_string($chiTiet);						
		//}
		
		//chèn vào db		
		$sql='UPDATE info SET Ten="'.addslashes($gt).'",Ten_KhongDau="'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($gt)))).'", ChiTiet="'.addslashes($chiTiet).'" WHERE idInFo='.$idGT;
		$kq=mysql_query($sql) or die(mysql_error());	
		if($kq==TRUE)
		  return 1;
		return -1;
	}
	
//-------------------------------------------------------------------------------------------------------------------------------------		
	
	
	
	
	
	
	
//-------------------------------------------------------------------------------------------------------------------------------------	

	public function ChinhBanner($idBN){
	
		//Tiếp nhận dữ liệu từ form
		$urlHinh= $_POST['urlHinh'];
			
		//Kiểm tra dữ liệu đã nhận	
		if (get_magic_quotes_gpc()== false) {
			$urlHinh = mysql_real_escape_string($urlHinh);
		}
		
		//chèn vào db		
		$sql="	UPDATE banner 
				SET urlHinh='$urlHinh' 
				WHERE idBN=$idBN";
		mysql_query($sql) or die(mysql_error());	
	}
	
//-------------------------------------------------------------------------------------------------------------------------------------
	
	
	
	
	
	
	
//-------------------------------------------------------------------------------------------------------------------------------------	

	public function ThemSB(){
	
		//Tiếp nhận dữ liệu từ form
		$idLSB= $_POST['idLSB'];
		$urlHinh= $_POST['urlHinh'];
		$link= $_POST['link'];				
			
		//Kiểm tra dữ liệu đã nhận		
		settype ($idLSB, "int");		
		$urlHinh = trim(strip_tags($urlHinh));				
		$link = trim(strip_tags($link));						
		if (get_magic_quotes_gpc()== false) {
			$urlHinh = mysql_real_escape_string($urlHinh);
			$link = mysql_real_escape_string($link);			
		}
		
		//chèn vào db		
		$sql="	INSERT INTO sidebar  (idLSB, urlHinh, link) 
				VALUES ($idLSB, '$urlHinh', '$link')";
		mysql_query($sql) or die(mysql_error());	
	}

//----------------------------------------------------------------------------
	public function info($id)
	{
	    $query=mysql_query('SELECT * FROM `info` where idInFo='.$id);
		return $query;
	}
	public function get_row($table,$colum,$id)
	{
	    $query=mysql_query('SELECT * FROM `'.$table.'` where '.$colum.'='.$id);
		return $query;
	}
	public function Chinh_tintuc($idSB){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tieude'];
		if($tiende=="")
		    return -1;
		$thutu=intval($_POST['thutu']);
		$urlHinh= $_POST['urlHinh'];
		$tomtat=$_POST['tomTat'];			
		$noidung=$_POST['noiDung'];
		//chèn vào db		
		$sql='UPDATE tintuc SET TieuDe="'.addslashes($tiende).'", TieuDe_KhongDau="'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($tiende)))).'", TomTat="'.addslashes($tomtat).'", UrlHinh="'.addslashes($urlHinh).'", NoiDung="'.addslashes($noidung).'", thutu="'.$thutu.'" where idTin='.$idSB;
		$kq=mysql_query($sql) or die(mysql_error());
        if($kq==TRUE)
            return 1;
        else
            return -1;		
	}
	public function Them_tintuc(){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tieude'];
		if($tiende=="")
		  return -1;
		$thutu=intval($_POST['thutu']);
		$urlHinh= $_POST['urlHinh'];
		$tomtat=$_POST['tomTat'];			
		$noidung=$_POST['noiDung'];	

		//chèn vào db		
		$sql='INSERT INTO `tintuc` (`idTin`, `TieuDe`, `TieuDe_KhongDau`, `TomTat`, `UrlHinh`, `NoiDung`, `ThuTu`) VALUES (NULL, "'.addslashes($tiende).'", "'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($tiende)))).'", "'.addslashes($tomtat).'", "'.addslashes($urlHinh).'", "'.addslashes($noidung).'", "'.$thutu.'")';
		$kq=mysql_query($sql) or die(mysql_error());	
	    if($kq==TRUE)
		   return 1;
		return -1;
	}
	public function Chinh_quangcao($idSB){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tieude'];
		if($tiende=="")
		   return -1;
		$urlHinh= $_POST['urlHinh'];
		$urlLink= $_POST['urlLink'];
		//chèn vào db		
		$sql='UPDATE quangcao SET Ten="'.addslashes($tiende).'", UrlHinh="'.addslashes($urlHinh).'", Link="'.addslashes($urlLink).'" where idQuangCao='.$idSB;
		$kq=mysql_query($sql) or die(mysql_error());
        if($kq==TRUE)
            return 1;
        else
            return -1;		
	}
	public function Them_quangcao(){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tieude'];
		if($tiende=="")
		  return -1;
		$urlHinh= $_POST['urlHinh'];
		$urlLink= $_POST['urlLink'];

		//chèn vào db		
		$sql='INSERT INTO `quangcao` (`idQuangCao`, `Ten`, `UrlHinh`, `Link`) VALUES (NULL, "'.addslashes($tiende).'", "'.addslashes($urlHinh).'", "'.addslashes($urlLink).'")';
		$kq=mysql_query($sql) or die(mysql_error());	
	    if($kq==TRUE)
		   return 1;
		return -1;
	}
	public function Chinh_chungloai($idSB){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tieude'];
		if($tiende=="")
		  return -1;
		$thutu= intval($_POST['thutu']);
		//chèn vào db		
		$sql='UPDATE chungloai SET TenCL="'.addslashes($tiende).'", TenCL_KhongDau="'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($tiende)))).'", ThuTu="'.addslashes($thutu).'" where idCL='.$idSB;
		$kq=mysql_query($sql) or die(mysql_error());
        if($kq==TRUE)
            return 1;
        else
            return -1;		
	}
	public function Them_chungloai(){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tieude'];
		if($tiende=="")
		  return -1;
		$thutu= intval($_POST['thutu']);

		//chèn vào db		
		$sql='INSERT INTO `chungloai` (`idCL`, `TenCL`, `TenCL_KhongDau`, `ThuTu`) VALUES (NULL, "'.addslashes($tiende).'", "'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($tiende)))).'", "'.addslashes($thutu).'")';
		$kq=mysql_query($sql) or die(mysql_error());	
	    if($kq==TRUE)
		   return 1;
		return -1;
	}
	public function Chinh_loai($idSB){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tenLoai'];
		if($tiende=="")
		  return -1;
		$chungloai= intval($_POST['chungloai']);
		$thutu= intval($_POST['thutu']);
		//chèn vào db		
		$sql='UPDATE loaisanpham SET idCL="'.$chungloai.'", TenLoai="'.addslashes($tiende).'", TenLoai_KhongDau="'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($tiende)))).'", ThuTu="'.addslashes($thutu).'" where idLoai='.$idSB;
		$kq=mysql_query($sql) or die(mysql_error());
        if($kq==TRUE)
            return 1;
        else
            return -1;		
	}
	public function Them_loai(){
	
		//Tiếp nhận dữ liệu từ form
		$tiende= $_POST['tenLoai'];
		if($tiende=="")
		  return -1;	
		$chungloai= intval($_POST['chungloai']);
		$thutu= intval($_POST['thutu']);

		//chèn vào db		
		$sql='INSERT INTO `loaisanpham` (`idLoai`, `idCL`, `TenLoai`, `TenLoai_KhongDau`, `ThuTu`) VALUES (NULL, "'.$chungloai.'", "'.addslashes($tiende).'", "'.str_replace(' ','-',addslashes($this->remove_unicode(strtolower($tiende)))).'", "'.addslashes($thutu).'")';
		$kq=mysql_query($sql) or die(mysql_error());	
		if($kq==TRUE)
		   return 1;
		return -1;
	}
	public function ChinhSB($idSB){
	
		//Tiếp nhận dữ liệu từ form
		$idLSB= $_POST['idLSB'];
		$urlHinh= $_POST['urlHinh'];
		$link= $_POST['link'];				
			
		//Kiểm tra dữ liệu đã nhận		
		settype ($idLSB, "int");		
		$urlHinh = trim(strip_tags($urlHinh));				
		$link = trim(strip_tags($link));						
		if (get_magic_quotes_gpc()== false) {
			$urlHinh = mysql_real_escape_string($urlHinh);
			$link = mysql_real_escape_string($link);			
		}
		
		//chèn vào db		
		$sql="	UPDATE sidebar 
				SET idLSB=$idLSB, urlHinh='$urlHinh', link='$link'
				WHERE idSB=$idSB ";
		mysql_query($sql) or die(mysql_error());	
	}
	
//-------------------------------------------------------------------------------------------------------------------------------------

	
}//classquantriSP
?>