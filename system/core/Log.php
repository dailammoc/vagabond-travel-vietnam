<?php
class HKL_Log {

	var $log;
	var $writer;
	public function __construct($url,$format){
		$Zend2 = new Zend ();
		$Zend2->load ( 'Zend_Log' );
		$Zend2->load ( 'Zend_Log_Writer_Stream' );
		$Zend2->load ( 'Zend_Log_Writer_Mock' );
		$this->writer = new Zend_Log_Writer_Stream ($url);
		$formatter = new Zend_Log_Formatter_Simple ( $format );
		$this->writer->setFormatter ( $formatter );
		$this->log = new Zend_Log ();
	}

	public function writeValue($name,$value)
	{
		$this->log->setEventItem($name, $value);
	}

	public function createLog()
	{
		$this->log->addWriter ( $this->writer );
		$this->log->info ('');
	}

}
?>