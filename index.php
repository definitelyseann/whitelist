<?php

$keys = array('key',); 
$users = array('3349754665',); 
$ip = array('d45622282f2f518d575916e99c14cabaeea3859e243e22a41b1bc0c8984ce8e1',); 
$sub = $_GET["key"];
$subuser = $_GET["user"];
$subip = $_SERVER['REMOTE_ADDR'];
if (in_array($sub,$keys,TRUE)) if (in_array($subuser,$users,TRUE)) if (in_array($subip,$ip,TRUE)) {
print('~ True ~');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>
