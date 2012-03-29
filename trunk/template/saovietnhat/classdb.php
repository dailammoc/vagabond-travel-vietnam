<?php
class db {
	public $conn = NULL;
	public $result = NULL;
	public $host="localhost";
	public $user="root";
	public $pass="levu123@456";
	public $database="saovietnhat_new";
	private $author="Đinh Văn Hạnh";
	protected $version="1.1";
	function __construct(){
		$this->conn = mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this -> database, $this->conn);
		mysql_query("set names 'utf8'"); 	 
	} 
	function getdata($sql) {
		if (is_resource($this->conn)) {
		   if (is_resource($this->result)) mysql_free_result($this->result);
		   $this->result = mysql_query( $sql, $this->conn  );
		}
	}
	function fetchRow() {
		if (is_resource($this->result)) {
		   $row = mysql_fetch_assoc($this->result);
		   if (is_array($row))  return $row;    		
		}
		return FALSE;
	}
	function TieuDe($table) {
		$sql= "	SELECT *
				FROM $table";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function TinTuc($table) {
		$sql= "	SELECT *
				FROM $table
				ORDER BY idQuangCao ASC
				LIMIT 0,4";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function Tin($table) {
		$sql= "	SELECT *
				FROM $table
				ORDER BY idTin DESC
				LIMIT 0,3";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function SanPham($table,$sosp) {
		$sql= "	SELECT *
				FROM $table
				ORDER BY idSP ASC
				LIMIT 0,$sosp";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function TieuDeLoai($idCL){
		settype($idCL, "int");	
		$sql = "SELECT *
				FROM loaisanpham  
				WHERE idCL=$idCL 
				ORDER BY ThuTu ASC";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function InFo($idInFo){
		settype($idInFo, "int");	
		$sql = "SELECT *
				FROM info  
				WHERE idInFo=$idInFo";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function ChiTietSanPham($TenSP_KhongDau){
		$sql = "SELECT *
				FROM sanpham  
				WHERE TenSP_KhongDau='$TenSP_KhongDau'";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function SanPhamCungLoai($idLoai, $sosp, $idSP){
	$sql = " SELECT *
				FROM sanpham
				WHERE idLoai = $idLoai AND idSP != $idSP
				ORDER BY idSP ASC
				LIMIT 0,$sosp";
	$kq = mysql_query($sql,$this->conn) or die(mysql_error());
	return $kq;
	}
	function DanhMucSanPham($idLoai){
		settype($idSP, "int");	
		$sql = "SELECT *
				FROM sanpham  
				WHERE idLoai=$idLoai";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function ChiTietTin($TieuDe_KhongDau){
		$sql = "SELECT *
				FROM tintuc  
				WHERE TieuDe_KhongDau='$TieuDe_KhongDau'";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}
	function TinCungLoai($idTin){
	$sql = " SELECT *
				FROM tintuc
				WHERE idTin != $idTin
				ORDER BY idTin DESC
				LIMIT 0,8";
	$kq = mysql_query($sql,$this->conn) or die(mysql_error());
	return $kq;
	}
	function Yahoo(){
	$sql = "SELECT * FROM yahoo 
			ORDER BY idYahoo ASC";
	$kq = mysql_query($sql,$this->conn) or die(mysql_error());
	return $kq;
	
	}
	function TimKiem($search,$pageSize,$pageNum,&$totalRows){
		$search = trim(strip_tags($search));
		$totalRows = 0;
		$sql = "SELECT count(*) 
				FROM sanpham
				WHERE (TenSP RegExp '$search')
				ORDER BY idSP DESC";
		$kq = mysql_query($sql) or die (mysql_error());	
		$row_kq = mysql_fetch_row($kq);
		$totalRows = $row_kq[0];
		$startRow = ($pageNum - 1)*$pageSize;
		$sql = "SELECT *
				FROM sanpham
				WHERE (TenSP RegExp '$search')
				ORDER BY idSP DESC 
				LIMIT $startRow , $pageSize";		
		$kq = mysql_query($sql) or die (mysql_error());
		return $kq;
	}
	function pagesListLimit($totalRows , $pageSize = 5, $offset = 5){
		if ($totalRows<=0) return "";
		$totalPages = ceil($totalRows/$pageSize);
		if ($totalPages<=1) return "";
		$currentURL = $_SERVER['PHP_SELF'];
		if( isset($_GET["pageNum"]) == true)  $currentPage = $_GET["pageNum"];
		else $currentPage = 1;
		settype($currentPage,"int");	
		if ($currentPage <=0) $currentPage = 1;
		$querystring="";
		foreach($_GET as $k=> $v) if ($k != 'pageNum') $querystring.= "&{$k}={$v}";
		$querystring = substr($querystring,1);
	
		$links = "";	
		$from = $currentPage - $offset;	
		$to = $currentPage + $offset;
		if ($from <=0) { $from = 1;   $to = $offset*2; }
		if ($to > $totalPages) { $to = $totalPages; }
		for($j = $from; $j <= $to; $j++) {
		   if ($j == $currentPage) $links = $links . "<span>{$j}</span>";		
		   else{				
			$qt = $querystring. "&pageNum={$j}";
			$links= $links . "<a href = '$currentURL?{$qt}'>{$j}</a>";
		   } 	   
		} //for
		return $links;
		
	} // function pagesListLimit
	function CTSanPhamURL($giatri) {
		$sql= "	SELECT *
				FROM loaisanpham
				WHERE TenLoai_KhongDau='$giatri'";
		$kq = mysql_query($sql,$this->conn) or die(mysql_error());	
		return $kq;
	}	
	public function SanPhamPhanTrang( $pageNum = 1, $pageSize = 5){
		$startRow = ($pageNum-1)*$pageSize;
		$sql="	SELECT *
			FROM  sanpham 
			ORDER BY idSP ASC 
			LIMIT $startRow, $pageSize";
		$kq = mysql_query($sql) or die (mysql_error());	
		return $kq;
		
	}	
	public function DemSanPhamPhanTrang(){
		$sql="SELECT count(*) FROM  sanpham";
		$rs = mysql_query($sql) or die(mysql_error());
		$rows_rs = mysql_fetch_row($rs);
		$totalRows = $rows_rs[0];
		return $totalRows;
	}	
	function pagesLinkSanPham($totalRows, $pageNum=1, $pageSize=5, $offset = 5){	
		$baseURL = $_SERVER['PHP_SELF'];
		parse_str($_SERVER['QUERY_STRING'],$arr);
		unset($arr['pageNum']);		
		foreach($arr as $k=> $v) $str.= "&{$k}={$v}";
		$baseURL .="?".$str;
				
		if ($totalRows<=0) return "";
		$totalPages = ceil($totalRows/$pageSize);
		if ($totalPages<=1) return "";
		$currentURL = $_SERVER['PHP_SELF'];
		if( isset($_GET["pageNum"]) == true)  $currentPage = $_GET["pageNum"];
		else $currentPage = 1;
					
		$from = $pageNum - $offset;	
		$to = $pageNum + $offset;
		if ($from <=0) { $from = 1;   $to = $offset*2; }
		if ($to > $totalPages) { $to = $totalPages; }
		$links = "";
		for($j = $from; $j <= $to; $j++) 
			$links= $links . '<a  class ="phantrangso" href = "trang-chu/trang-'.$j.'.html">'.$j.'</a>';		    	   
		
			
		$firstLink="";  $prevLink="";  $lastLink="";  $nextLink="";
	
	if ($currentPage == 1) {
			$prevPage = $pageNum - 1;
			$prevLink="<a class ='phantrang1_in' ><span class='nhay1_in'><<</span> Trang trước</span></a>";
		}
		if ($pageNum > 1) {
			$prevPage = $pageNum - 1;
			$prevLink='<a class ="phantrang1" href="trang-chu/trang-'.$prevPage.'.html"><span><span class="nhay1"><<</span> Trang trước</span></a>';
		}
		if ($currentPage == $totalPages) { 
			$nextPage = $pageNum + 1;
			$nextLink = "<a class ='phantrang1_in' ><span>Trang sau <span class='nhay1_in'>>></span></span></a>";
		} 
		
		if ($pageNum < $totalPages) { 
			$nextPage = $pageNum + 1;
			$nextLink = '<a class ="phantrang1" href="trang-chu/trang-'.$nextPage.'.html"><span>Trang sau <span class="nhay">>></span></span></a>';
		} 
		return $prevLink.$links.$nextLink.$lastLink;
	}			
}
?>