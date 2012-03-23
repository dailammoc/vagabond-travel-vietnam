<?php
class redirect
{
	static $url;
	public function __construct($url)
	{
		$this->_url=$url;
	}
	public function location()
	{
	$url=$this->_url;
	?>
	<script type="text/javascript">
	window.location = "<?php echo $url; ?>";
	</script>
	<?php
	
	}
}

?>