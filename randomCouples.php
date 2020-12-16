<?php
include 'db/DB.php';
require('classes/Fixture.php');


$players = array('Member1','Member2','Member3','Member4','Member5', 'Member6','Member7','Member8');
$fixture = new Fixture($players);

//get simple couples not sorted
//$fixture->getListCouples();

//generate couples by fixture algorithm
$planning = $fixture->Generate();
$fixture->displayMeetings($planning);

//create 'n' membres groups
$groups =  $fixture->getGroups(4);
var_dump($groups);

//Test db connection using a simple PHP Query Builder class:  https://github.com/mareimorsy/DB.git
$db = DB::getInstance();
$rows = $db->table('posts')->get();
//var_dump($rows);

?>