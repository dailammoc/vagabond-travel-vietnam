//Show file flash Edit 13/11/2006
function ShowFlash(FlashIDName, FlashFileName, FlashWidth, FlashHeight, DNSSetting, WMODESetting, FlashBGColor, QSetting, FlashAlign)
{
	document.write('<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
	document.write('CODEBASE="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab#version=8,0,0,0" ');
	document.write(' ID="'+FlashIDName+'" WIDTH="' + FlashWidth + '" HEIGHT="' + FlashHeight + '" ALIGN="'+FlashAlign+'">');
	document.write('<PARAM NAME="movie" VALUE="'+ FlashFileName +'">');
	document.write('<PARAM NAME="quality" VALUE="'+QSetting+'">');
	document.write('<PARAM NAME="bgcolor" VALUE="'+FlashBGColor+'">');
	document.write('<PARAM NAME="wmode" VALUE="'+WMODESetting+'">');
	document.write('<PARAM NAME="allowScriptAccess" VALUE="'+DNSSetting+'">');
	document.write('<EMBED SRC="'+ FlashFileName +'"  NAME="'+FlashIDName+'"');
	document.write(' WIDTH="' + FlashWidth + '" HEIGHT="' + FlashHeight + '" QUALITY="'+QSetting+'" BGCOLOR="'+FlashBGColor+'"');
	document.write(' ALLOWSCRIPTACCESS="'+DNSSetting+'" ALIGN="'+FlashAlign+'" WMODE="'+WMODESetting+'" TYPE="application/x-shockwave-flash" ');
	document.write(' PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" >');
	document.write('</EMBED>');
	document.write('</OBJECT>');
}

function bOpenStatistics(b_encode){
	detail = window.open(b_encode, "NewWinOpen", "toolbar=yes,location=yes,directories=yes,status=yes, menubar=yes,scrollbars=yes,resizable=yes,history=yes,height=600, width=800");
	detail.focus();	
}
