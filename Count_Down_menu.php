<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC Content Slider            #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//-------------------------Menu Title--------------------------------+

$countdown_menuatitle .= "".$pref['countdown_menuatitle']."";

//-------------------------------------------------------------------+

$countdown_menuatext .='
<script type="text/javascript">
<!-- //start

dateFuture = new Date('.$pref["countdown_menuayear"].','.$pref["countdown_menuamonth"].','.$pref["countdown_menuaday"].','.$pref["countdown_menuahour"].','.$pref["countdown_menuamin"].','.$pref["countdown_menuasec"].');

function GetCount(){

	dateNow = new Date();					
	amount = dateFuture.getTime() - dateNow.getTime();		
	delete dateNow;

	// time is already past
	if(amount < 0){	document.getElementById("countbox").innerHTML="Now!";}

	// date is still good
	else{
		days=0;hours=0;mins=0;secs=0;out="";

		amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

		days=Math.floor(amount/86400);//days
		amount=amount%86400;

		hours=Math.floor(amount/3600);//hours
		amount=amount%3600;

		mins=Math.floor(amount/60);//minutes
		amount=amount%60;

		secs=Math.floor(amount);//seconds

		if(days != 0){out += days +" day"+((days!=1)?"s":"")+", ";}
		if(days != 0 || hours != 0){out += hours +" hour"+((hours!=1)?"s":"")+", ";}
		if(days != 0 || hours != 0 || mins != 0){out += mins +" minute"+((mins!=1)?"s":"")+", ";}
		out += secs +" seconds";
		document.getElementById("countbox").innerHTML=out;

		setTimeout("GetCount()", 1000);
	}}

window.onload=GetCount;//call when everything has loaded

//-->
</script>';






$countdown_menuatext .= "<center><table style='' class='indent'>
                         <tr><td class='forumheader3'><center>
                         <font color='".$pref['countdown_menuaheaderfcolor']."' size='".$pref['countdown_menuaheaderfsize']."'>
                         ".$pref['countdown_menuaheader']."
                         </font>
                         <br>
                         <font color='".$pref['countdown_menuaintrofcolor']."' size='".$pref['countdown_menuaintrofsize']."'>
                         ".$pref['countdown_menuaintro']."
                         </font>
                         </center></td>
                         </tr>";
if ($pref['countdown_enable_image'] == "1"){
$countdown_menuatext .= "<tr>
                         <td><center><img width='".$pref['cmenu_imagesize']."px' src='".$pref['cmenu_imagepath']."'></img></center></td>
                         </tr>";}


$countdown_menuatext .= "<tr>
                         <td class='forumheader3'><center>
                         <div id='countbox' style='font:".$pref['countdown_menuafsize']."pt Arial; color:#".$pref['countdown_menuafcolor']."'></div>
                         </center></td></tr>
                         </table></center>";





$ns -> tablerender($countdown_menuatitle, $countdown_menuatext);


?>