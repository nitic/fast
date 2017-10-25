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

// name of website
$website_title = 'My Website';

// website domain with trailing slash
$siteurl = 'http://www.mywebsite.com/';

// website root path with trailing slash
// $rooturl = 'A:\Utilities\server2go_1_4\htdocs\fast_edit_micro/'; // below setting should work automatically but if not, set root path manually
$rooturl = dirname(realpath(dirname(__FILE__))).'/';

// username and password (defaults = admin/demo)
$admin_name = 'admin';
$admin_password = 'demo';

// time difference corrector - hours offset from GMT (+/-) 
$gmt_offset = '+1';






#### NO NEED TO EDIT PAST THIS LINE ####

// website root path to editable content (.txt files) with trailing slash
$root = $rooturl.'fast_edit/_content/'; 

// dynamic auto title script for <title> tag
$title = basename(substr($_SERVER['PHP_SELF'], 0,strrpos($_SERVER['PHP_SELF'],'.'))); // get page name and strip path and extention
$title2 = str_replace(array('-','_'), ' ', strtolower($title)); // convert name to lowercase and replace hyphens/underscores with space
						
if ($title2 == 'index') { 
	$dynamic_title = 'Home'; // index to Home
	} else { 
	$dynamic_title = ucwords($title2); // capitalize first letter
	}

//recognise editable content .txt file from base .php file
$basepage = basename(substr($_SERVER['PHP_SELF'], 0,strrpos($_SERVER['PHP_SELF'],'.')));
$contentpage = $root.$basepage.".txt"; 

?>