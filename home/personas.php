<?php
include_once('classes/profile.class.php');	


$allison = new profile;
$allison->name="Allison🌹";
$allison->feed=0;
$allison->post="You know you getting old when laying down is fun.. I be happy as hell";
$allison->postLikes="13,216";
$allison->postDate="5 March 2021";
$allison->postTime="2 seconds ago";
$allison->message="It was nice meeting you the other night. I am looking forward to connecting on Postogon.";
$allison->messagedate="4m";
$allison->bio="Live life now, we can only learn from mistakes";
$allison->status="Online";
$allison->postcount="289";
$allison->followers="43.3k";
$allison->activity="47";
$allison->avatar="avatar2";
$allison->contacts="425";
$allison->uid="0";
$allison->username="alizzz";

$jason = new profile;
$jason->name="Jason🎭";
$jason->feed=1;
$jason->post="Hey family, I've got a friend looking to get into recruiting. No exp, but really driven, has managed teams, good at managing data/excel.

Do i know anyone out there growing a team looking for someone green they can train?";
$jason->postLikes="14";
$jason->postDate="5 March 2021";
$jason->postTime="9:44 pm";
$jason->message="It was nice meeting you the other night. I am looking forward to connecting on Postogon.";
$jason->messagedate="4s";
$jason->bio="Yale '22, Studying Engineering 💻";
$jason->status="Online";
$jason->postcount="432";
$jason->followers="301";
$jason->activity="77";
$jason->avatar="avatar1";
$jason->contacts="425";
$jason->uid="1";
$jason->username="slottajason";

$will = new profile;
$will->name="Will🌎☄️";
$will->feed=0;
$will->post="The gym is the most underrated form of therapy";
$will->postLikes="32";
$will->postDate="5 March 2021";
$will->postTime="5:56 pm";
$will->message="I sent all the videos and pictures last night into The Boys gallery.";
$will->messagedate="33m";
$will->bio="Just a guy tryna make it outchea";
$will->status="Offline";
$will->postcount="34";
$will->followers="532";
$will->activity="6";
$will->avatar="avatar3";
$will->contacts="425";
$will->uid="2";
$will->username="datboiwill";

$sandy = new profile;
$sandy->name="Sandy✨";
$sandy->feed=0;
$sandy->post="alright what’s in this march air bc SOMETHING is up";
$sandy->postLikes="32,654";
$sandy->postDate="5 March 2021";
$sandy->postTime="1:11 pm";
$sandy->message="Hey 😅, I know that we had plans for Saturday but I just realized I have exam this Monday? Raincheck?? 🥺";
$sandy->messagedate="2d";
$sandy->bio="I'm still figuring stuff out. Sometimes I write stuff..";
$sandy->postcount="4.2K";
$sandy->followers="65.1K";
$sandy->activity="77";
$sandy->avatar="avatar5";
$sandy->contacts="425";
$sandy->uid="3";
$sandy->username="sandysandy";




$lenny = new profile;
$lenny->name="Lenny🪓";
$lenny->feed=0;
$lenny->post="Your friend spontaneously sharing an idea with you and you desperately trying to resist dropping everything in the moment to lock yourself in your house and stay up for the next 48-72 hours to bring it to life.

Know you guys can relate to this.

HIGH ENERGY.";
$lenny->postLikes="156";
$lenny->postDate="5 March 2021";
$lenny->postTime="11:31 am";
$lenny->message="Hey! Loved your post bro, keep it up.";
$lenny->messageDate="1h";
$lenny->bio="OSU Alumni - Mechanical Engineer - Music lover.";
$lenny->status="DoNotDisturb";
$lenny->postcount="289";
$lenny->followers="2.3K";
$lenny->activity="32";
$lenny->avatar="avatar4";
$lenny->contacts="425";
$lenny->uid="4";
$lenny->username="itslenny";



$profiles = array();
$profiles[] = $allison;
$profiles[] = $jason;
$profiles[] = $will;
$profiles[] = $sandy;
$profiles[] = $lenny;

?>