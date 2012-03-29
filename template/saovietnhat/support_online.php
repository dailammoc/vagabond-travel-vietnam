<?php
	require_once "classdb.php";
	if(isset($db)==false) $db = new db;
	$yahoo = $db->Yahoo();
?>
<?php
	if (!function_exists("GetSQLValueString")) {
		function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
		{
			  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
			
			  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
			
		  switch ($theType) {
			case "text":
			  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			  break;    
			case "long":
			case "int":
			  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
			  break;
			case "double":
			  $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
			  break;
			case "date":
			  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
			  break;
			case "defined":
			  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
			  break;
		  }
		  return $theValue;
		}
	}

?>
<div class="support_online">
        <div class="title_1">Hỗ trợ online</div>
        
            <?php while($row_yahoo = mysql_fetch_assoc($yahoo)){?>
            <?php
                $yahooid=$row_yahoo['Nick'];
                $status = file_get_contents("http://opi.yahoo.com/online?u=$yahooid&m=a&t=1");
                if ($status == '00') {
            ?> 
        <div class="support_user">
                <a href="ymsgr:sendim?<?=$row_yahoo['Nick']?>"> 
                    <img src="images/index/offline.png" border="0" alt="Hỗ trợ offline - lê vũ"/> 
               </a><br/>
               <span class="depart"><?=$row_yahoo['PhongBan']?></span><br />
               <span class="support_name"><?php echo($row_yahoo['Name']);?></span><br/>
               <span class="phone">Điện thoại:</span>	<?=$row_yahoo['DienThoai']?>
        </div>
            <?php  }
        if ($status == '01') {
            ?>
        <div class="support_user"> 
            <a href="ymsgr:sendim?<?=$row_yahoo['Nick']?>" >
                <img src="images/index/online.png" border="0" alt="Hỗ trợ online - lê vũ" /> 
             </a><br/> 
              <span class="depart"><?=$row_yahoo['PhongBan']?></span><br />
              <span class="support_name"><?php echo($row_yahoo['Name']);?></span><br/>
              <span class="phone">Điện thoại:</span>	<?=$row_yahoo['DienThoai']?>
         </div>
                <?php  } ?> 
        <?php }?>
	</div>    
