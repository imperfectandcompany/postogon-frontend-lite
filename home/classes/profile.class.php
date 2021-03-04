<?php
class profile {
	//properties
	public $name;
	public $post;
	public $postlikes;	
	public $message;	
	public $bio;
	public $status;
	public $postcount;
	public $followers;
	public $activity;
	public $avatar;
	public $contacts;
	public $uid;
	public $username;
}

$jason = new profile;
$jason->name="Jason";
$jason->post="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$jason->postlikes="156";
$jason->message="";
$jason->bio="Yale '22, Studying Engineering 💻";
$jason->status="Online";
$jason->postcount="289";
$jason->followers="2.3";
$jason->activity="12";
$jason->avatar="avatar1";
$jason->contacts="425";
$jason->uid="0";
$jason->username="datboijason";

$profiles = array();
$profiles[] = $jason;






?>