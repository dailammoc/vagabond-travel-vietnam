<?php
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app.php');
require_once (dirname(dirname(dirname(dirname(__FILE__)))) . '/system/app_travel.php');
$faq_id = intval($_GET['faq_id']);
if($faq_id > 0)
	$faq = Table::Fetch('du_hoc_detail',$faq_id);
?>
<form action="" method="POST">
<input type="hidden" value="<?php echo $faq_id?>" name="faq_id">
<div>
<span style="padding-left:25px;color:red">Hỏi</span> <textarea cols="55" rows="10" name="description"><?php echo $faq['description']?></textarea>
</div>
<br />
<div>
<span style="color:blue">Trả Lời</span> <textarea cols="55" rows="10" name="content"><?php echo $faq['content']?></textarea>
</div>
<div style="float:right;margin-top:20px"><input type="submit" value="" class="form-submit" /></div>
</form>