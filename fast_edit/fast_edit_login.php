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

@ini_set('display_errors', 'Off');

include('fast_edit/fast_edit_config.php');

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ( empty( $_SERVER['REQUEST_URI'] ) ) {
    $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME']; // Does this work under CGI?

    // Append the query string if it exists and isn't null
    if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
        $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
    }
}

$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

// start login session
if(!isset($_SESSION['username'])) {
	if( (isset($_POST['submit_login'])=='Login') || (isset($_GET['action'])=='login') ) {
	 	if ( (isset($_POST['name'])==$admin_name) && ($_POST['pass']==$admin_password) ) {
		 	$_SESSION['username'] = $admin_name;
		 	$url = str_replace('?action=login', '', $url);
		 	echo "<meta http-equiv=\"refresh\" content=\"0; url=$url \">";
		 	exit();
		 	} else { 
			echo "<div class='login-msg'>incorrect login details</div>";
			}
		}
	}

// end login session with logout
if($action=='logout') {
	session_destroy();
	unset($_SESSION['username']);
	$url = str_replace('?action=logout', '', $url);
	echo "<meta http-equiv=\"refresh\" content=\"0; url=$url \">";
	exit();
	}

?>