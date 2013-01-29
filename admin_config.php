<?php


/*
#######################################
#     e107 website system plguin      #
#     AACGC Wish List                 #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/



require_once("../../class2.php");
if (!defined('e107_INIT'))
{exit;}
if (!getperms("P"))
{header("location:" . e_HTTP . "index.php");
exit;}
require_once(e_ADMIN . "auth.php");
if (!defined('ADMIN_WIDTH'))
{define(ADMIN_WIDTH, "width:100%;");}

if (e_QUERY == "update")
{
 
    $pref['countdown_menuatitle'] = $_POST['countdown_menuatitle'];

    $pref['countdown_menuaheader'] = $_POST['countdown_menuaheader'];
    $pref['countdown_menuaheaderfsize'] = $_POST['countdown_menuaheaderfsize'];
    $pref['countdown_menuaheaderfcolor'] = $_POST['countdown_menuaheaderfcolor'];

    $pref['countdown_menuaintro'] = $_POST['countdown_menuaintro'];
    $pref['countdown_menuaintrofsize'] = $_POST['countdown_menuaintrofsize'];
    $pref['countdown_menuaintrofcolor'] = $_POST['countdown_menuaintrofcolor'];

    $pref['cmenu_imagesize'] = $_POST['cmenu_imagesize'];
    $pref['cmenu_imagepath'] = $_POST['cmenu_imagepath'];

    $pref['countdown_menuayear'] = $_POST['countdown_menuayear'];
    $pref['countdown_menuamonth'] = $_POST['countdown_menuamonth'];
    $pref['countdown_menuaday'] = $_POST['countdown_menuaday'];
    $pref['countdown_menuahour'] = $_POST['countdown_menuahour'];
    $pref['countdown_menuamin'] = $_POST['countdown_menuamin'];
    $pref['countdown_menuasec'] = $_POST['countdown_menuasec'];
    $pref['countdown_menuafsize'] = $_POST['countdown_menuafsize'];
    $pref['countdown_menuafcolor'] = $_POST['countdown_menuafcolor'];

if (isset($_POST['countdown_enable_image'])) 
{$pref['countdown_enable_image'] = 1;}
else
{$pref['countdown_enable_image'] = 0;}

    save_prefs();
    $led_msgtext = "Settings Saved";
}

$admin_title = "AACGC Countdown Menu(settings)";
//--------------------------------------------------------------------


$text .= "
<form method='post' action='" . e_SELF . "?update' id='confnwb'>
	<table style='" . ADMIN_WIDTH . "' class='fborder'>

		<tr>
			<td colspan='3' class='fcaption'><b>Settings:</b></td>
		</tr>
<tr>
<td style='width:30%' class='forumheader3'>Menu Title:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='countdown_menuatitle' value='" . $pref['countdown_menuatitle'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Menu Header:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='countdown_menuaheader' value='" . $pref['countdown_menuaheader'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Header Font Size:</td>
<td style='width:70%' class='forumheader3'>
<input class='tbox' type='text'  size='10' name='countdown_menuaheaderfsize' value='" . $pref['countdown_menuaheaderfsize'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Header Font Color:</td>
<td style='width:70%' class='forumheader3'>
#<input class='tbox' type='text'  size='10' name='countdown_menuaheaderfcolor' value='" . $pref['countdown_menuaheaderfcolor'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Menu Intro:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='countdown_menuaintro' value='" . $pref['countdown_menuaintro'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Font Size:</td>
<td style='width:70%' class='forumheader3'>
<input class='tbox' type='text'  size='10' name='countdown_menuaintrofsize' value='" . $pref['countdown_menuaintrofsize'] . "' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Intro Font Color:</td>
<td style='width:70%' class='forumheader3'>
#<input class='tbox' type='text'  size='10' name='countdown_menuaintrofcolor' value='" . $pref['countdown_menuaintrofcolor'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Show Image:</td>
<td colspan=2 class='forumheader3'>".($pref['countdown_enable_image'] == 1 ? "<input type='checkbox' name='countdown_enable_image' value='1' checked='checked' />" : "<input type='checkbox' name='countdown_enable_image' value='0' />")."</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Image Path:</td>
<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='100' name='cmenu_imagepath' value='" . $tp->toFORM($pref['cmenu_imagepath'])."' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Image Size:</td>
<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='cmenu_imagesize' value='" . $tp->toFORM($pref['cmenu_imagesize'])."' />px</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Year: (2009):</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='100' name='countdown_menuayear' value='" . $pref['countdown_menuayear'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Month: (0-11):</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='countdown_menuamonth' value='" . $pref['countdown_menuamonth'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Day:</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='countdown_menuaday' value='" . $pref['countdown_menuaday'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Hour: (1-24)</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='countdown_menuahour' value='" . $pref['countdown_menuahour'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Min: (0-60)</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='countdown_menuamin' value='" . $pref['countdown_menuamin'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Second: (0-60)</td>
<td style='width:70%' class='forumheader3'><input class='tbox' type='text'  size='10' name='countdown_menuasec' value='" . $pref['countdown_menuasec'] . "' /></td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Countdown Font Size:</td>
<td style='width:70%' class='forumheader3'>
<input class='tbox' type='text'  size='10' name='countdown_menuafsize' value='" . $pref['countdown_menuafsize'] . "' />pt</td>
</tr>
<tr>
<td style='width:30%' class='forumheader3'>Countdown Font Color:</td>
<td style='width:70%' class='forumheader3'>
#<input class='tbox' type='text'  size='10' name='countdown_menuafcolor' value='" . $pref['countdown_menuafcolor'] . "' /></td>
</tr>


                <tr>
			<td colspan='3' class='fcaption' style='text-align: left;'><input type='submit' name='update' value='Save Settings' class='button' /></td>
		</tr>


</table>
</form>";



$ns->tablerender($admin_title, $text);
require_once(e_ADMIN . "footer.php");
?>
