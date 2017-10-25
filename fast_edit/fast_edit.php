<?php 
/*
Fast Edit Mini - An "edit in place" tool (C) 2010 Beverley Hooton
(author website - http://fast-edit.co.uk/)

    Fast Edit Mini is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

include('fast_edit_config.php');

if(isset($_SESSION['username'])) {
	$data=file_get_contents($contentpage); // populate fast-edit textarea with content.txt page
	if ( (isset($_GET['action'])) && ($_GET['action']=='save') ) { // save changes to fast-edit textarea
		$content = $contentpage;
		$data = $_POST['fastedit'];
		$fp = fopen($content,'w');
		$data = stripslashes($data);
		$data = preg_replace(array('/<(\?|\%)\=?(php)?/', '/(\%|\?)>/'), array('',''), $data); // remove old-asp tags, php short-tags, php echo tags, and normal php tags
		fwrite($fp,$data);
		fclose($fp);
		//$url_save = str_replace('?action=save', '', $url); // (loops on IIS)
		$url_save = str_replace('?action=save', '', $_SERVER['HTTP_REFERER']);
		echo "<meta http-equiv=\"refresh\" content=\"0; url=$url_save#go_edit \">";
		exit();
		}
?>

<div class="fast-edit-outer"><div class="fast-edit-container">
	<form id="formeditor1" name="formeditor1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=save">
	Welcome back&nbsp;<?php echo $_SESSION['username'];?>&nbsp;&nbsp;|&nbsp;&nbsp;
	Fast&nbsp;Edit:&nbsp;<img src="fast_edit/images/page_edit.png" alt="Fast Edit" title="Fast Edit" class="edit" /><img src="fast_edit/images/page_edit.png" alt="Fast Edit" title="Fast Edit" class="close-edit" />&nbsp;&nbsp;|&nbsp;&nbsp;
	Logout&nbsp;<?php echo $_SESSION['username'];?>:&nbsp;<a href="?action=logout"><img src="fast_edit/images/lock_open.png" alt="Logout <?php echo $_SESSION['username'];?>" title="Logout <?php echo $_SESSION['username'];?>" class="logout" /></a>
	<a href="" id="go_edit" class="close-edit x" title="Close Fast Edit">X</a><br/>
	<?php 
	$last_modified = filemtime($contentpage);
	echo "<div class='last-updated'>This page was last updated at ".gmdate("h:ia, F jS\, Y", ($last_modified+($gmt_offset*3600)))."</div>";
	?>
		<div class="editor">
			<textarea name="fastedit" cols="80" rows="10"><?php echo $data ?></textarea> 
		</div>
	</form>
</div></div>
<?php } ?>