<?php
/**
 * Class validation from
 * Class use for validation input form.
 * @copyright 2011 HKL company
 * @version Release: 1.0
 */
class FormValidator
{

	private $_errorList;

	function FormValidator()
	{
		$this->resetErrorList();
	}

	// check whether input is empty
	function isEmpty($value,$msg,$type,$filter=true)
	{
		$result="";
		$check_valid=IsNullAndEmpty($value);
		if($msg!="" && $type=='required')
		{
			
			if (!($check_valid)) {
				$msg='Xin vui lòng nhập '.$msg;
				$this->_errorList[] =$msg;
				
			} 
			else 
			$result=$value;
		}
		else
		{
			$result=$value;
		}//end require
		return $result;
	}

	function addError($msg)
	{
		$this->_errorList[] = $msg;
		return $this->_errorList;
	}

	/**
	 * Check error exits or not
	 *
	 */
	function isError()
	{
		if (count($this->_errorList) > 0) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Return current array error
	 *
	 */
	function getErrorList()
	{
		return $this->_errorList;
	}

	/**
	 * Return array error
	 *
	 */
	function resetErrorList()
	{
		$this->_errorList = array();
	}

	/**
	 * Match one field to another
	 *
	 * @access	public
	 * @param	string
	 * @param	field
	 * @return	bool
	 */
	function matches($str, $field)
	{
		if ( ! isset($_POST[$field]))
		{
			return false;
		}

		$field = trim($_POST[$field]);

		return ($str !== $field) ? false : true;
	}
	// --------------------------------------------------------------------

	/**
	 * Performs a Regular Expression match test.
	 *
	 * @access	public
	 * @param	string
	 * @param	regex
	 * @return	bool
	 */

	/**
	 * Is a Natural number, but not a zero  (1,2,3, etc.)
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function is_natural_no_zero($str)
	{
		if ( ! preg_match( '/^[0-9]+$/', $str))
		{
			return FALSE;
		}

		if ($str == 0)
		{
			return FALSE;
		}

		return TRUE;
	}
	// --------------------------------------------------------------------
	/**
	 * Is a Natural number  (0,1,2,3, etc.)
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function is_natural($str)
	{
		return (bool) preg_match( '/^[0-9]+$/', $str);
	}
	// --------------------------------------------------------------------
	/**
	 * Less than
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function less_than($str, $max)
	{
		if ( ! is_numeric($str))
		{
			return FALSE;
		}
		return $str < $max;
	}
	// --------------------------------------------------------------------
	/**
	 * Greather than
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function greater_than($str, $min)
	{
		if ( ! is_numeric($str))
		{
			return FALSE;
		}
		return $str > $min;
	}

	// --------------------------------------------------------------------

	/**
	 * Integer
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function integer($str)
	{
		return (bool) preg_match('/^[\-+]?[0-9]+$/', $str);
	}

	// --------------------------------------------------------------------

	/**
	 * Decimal number
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function decimal($str)
	{
		return (bool) preg_match('/^[\-+]?[0-9]+\.[0-9]+$/', $str);
	}

	// --------------------------------------------------------------------
	/**
	 * Numeric
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function numeric($str)
	{
		return (bool)preg_match( '/^[\-+]?[0-9]*\.?[0-9]+$/', $str);

	}

	// --------------------------------------------------------------------

	/**
	 * Is Numeric
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function is_numeric($str)
	{
		return ( ! is_numeric($str)) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------
	/**
	 * Alpha-numeric
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function alpha_numeric($str)
	{
		return ( ! preg_match("/^([a-z0-9])+$/i", $str)) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Alpha-numeric with underscores and dashes
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function alpha_dash($str)
	{
		return ( ! preg_match("/^([-a-z0-9_-])+$/i", $str)) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------
	/**
	 * Alpha
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function alpha($str)
	{
		return ( ! preg_match("/^([a-z])+$/i", $str)) ? false : true;
	}

	// --------------------------------------------------------------------
	/**
	 * Required
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function required($str)
	{
		if ( ! is_array($str))
		{
			return (trim($str) == '') ? FALSE : TRUE;
		}
		else
		{
			return ( ! empty($str));
		}
	}

	// --------------------------------------------------------------------
	/**
	 * Minimum Length
	 *
	 * @access	public
	 * @param	string
	 * @param	value
	 * @return	bool
	 */
	function min_length($str, $val)
	{
		if (preg_match("/[^0-9]/", $val))
		{
			return FALSE;
		}

		if (function_exists('mb_strlen'))
		{
			return (mb_strlen($str) < $val) ? FALSE : TRUE;
		}

		return (strlen($str) < $val) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Max Length
	 *
	 * @access	public
	 * @param	string
	 * @param	value
	 * @return	bool
	 */
	function max_length($str, $val)
	{
		if (preg_match("/[^0-9]/", $val))
		{
			return FALSE;
		}

		if (function_exists('mb_strlen'))
		{
			return (mb_strlen($str) > $val) ? FALSE : TRUE;
		}

		return (strlen($str) > $val) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Exact Length
	 *
	 * @access	public
	 * @param	string
	 * @param	value
	 * @return	bool
	 */
	function exact_length($str, $val)
	{
		if (preg_match("/[^0-9]/", $val))
		{
			return FALSE;
		}

		if (function_exists('mb_strlen'))
		{
			return (mb_strlen($str) != $val) ? FALSE : TRUE;
		}

		return (strlen($str) != $val) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Valid Email
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function valid_email($str)
	{
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Valid Emails
	 *
	 * @access	public
	 * @param	string
	 * @return	bool
	 */
	function valid_emails($str)
	{
		if (strpos($str, ',') === FALSE)
		{
			return $this->valid_email(trim($str));
		}

		foreach (explode(',', $str) as $email)
		{
			if (trim($email) != '' && $this->valid_email(trim($email)) === FALSE)
			{
				return FALSE;
			}
		}

		return TRUE;
	}

	// --------------------------------------------------------------------
	/**
	 * Performs a Regular Expression match test.
	 *
	 * @access	public
	 * @param	string
	 * @param	regex
	 * @return	bool
	 */
	function regex_match($str, $regex)
	{
		if ( ! preg_match($regex, $str))
		{
			return false;
		}

		return  true;
	}

	// --------------------------------------------------------------------
	/*
	 * function filter phone-VietHai-6/6/2011
	 *
	 */
	function filterPhone($phone)
	{
		$res=0;
		if(preg_match('/\(([0-9]{3})\)[\s]*([0-9]{3})[\-]{1}([0-9]{1,10})$/',$phone,$matches)>0)
		{
			if(strstr($matches[1],'0'))
			$res= "84".ltrim($matches[1],'0').$matches[2].$matches[3];
			else
			$res= "84".$matches[1].$matches[2].$matches[3];
		}
		return $res;
	}
	//end function filter phone

	/* function filter phone-VietHai-6/6/2011
	 *
	 */
	function filterCard($card)
	{
		$res="";
		$card=trim(strip_tags($card));
		if(preg_match('/([0-9]{3})[\-]{1}([0-9]{3})[\-]{1}([0-9]{2,3})$/',$card,$matches)>0)
		{
			$res= $matches[1].$matches[2].$matches[3];
		}
		return $res;
	}

	//function check null and empty
	function IsNullAndEmpty($question){
		return (isset($question) && trim($question)!='');
	}
	//function filter xss
	function safeXSS( $value ) {
		$value=htmlentities( $value, ENT_QUOTES, 'utf-8' );
		return $value;
	}
	//end function filter phone
	/**
	 * Show error
	 *
	 * @param string $v tag html use contain error
	 * @param string $class css for error
	 */
	function showError($v = "div",$class='showErrorForm')
	{
		echo "<$v class='$class'>";
		foreach ($this->getErrorList() as $k) {
			echo $k . "<br/>";
		}
		echo "</$v>";
	}

	function showErrorMb($v = "div",$class='showErrorForm')
	{
		echo "<$v class='$class'>";
		foreach ($this->getErrorList() as $k) {
			echo "<div>".$k."</div>";
		}
		echo "</$v>";
	}

	function showErrorRegister($v = "div",$class='showErrorForm')
	{
		echo "<$v class='$class'>";
		foreach ($this->getErrorList() as $k) {
			echo '<p>'.$k ."</p>";
			break;
		}
		echo "</$v>";
	}

}
?>