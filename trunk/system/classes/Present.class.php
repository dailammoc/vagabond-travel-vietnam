<?php 
class Present
{
	public static function Getarray($soure)
	{
		$search=array(' ',':');
		$replace=array('-','-');
		$Souretemp1=str_replace($search, $replace, $soure);
		$Returnsoure=explode("-",$Souretemp1);
		return $Returnsoure;
	}
	public static function Getvaliddate($soure,$time)
	{
		if($soure[0] > $time[0])
		{
			return 0;
		}
		else if($soure[0] == $time[0])
		{
			
			if($soure[1]>$time[1]) // month
			{
				return 0; //
			}
			else if($soure[1]==$time[1])
			{

				if($soure[2]>$time[2]) // date
				{
					return 0; //
				}
				else if($soure[2]==$time[2]) 
				{

					if($soure[3]>9) // hours
					{
						return 0; 
					}
					else if($soure[3]==9)
					{

						if($soure[4]>00) // mins
						{
							return 0; //
						}
						else
						{
							return 1;//
						}
					}
					else
					{
						return 1; //
					}
				}
				else
				{
					return 1; //
				}
			
			}
			else
			{
				return 1; 
			}
		}
		else
		{
			return 1; //
		}
	}
}
?>