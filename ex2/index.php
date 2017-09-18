


<?php

include_once("classes/users.class.php");
include_once("classes/user_type_2.php");
include_once("classes/user_type_1.php");


$type1 = new type1('Regular User', '1');
$type2 = new type2('Admin User', '2');
$users = new users();


echo "My registered User Type is: ".$type1->user_type."</br>";
echo "My registered User ID is: ".$users->user_id."</br>";
echo "My registered User First Name is: ".$users->first_name."</br>";
echo "My registered User Last Name is: ".$users->last_name."</br>";
echo "My registered User Email Address is: ".$users->email_address."</br>";
echo "My registered User Level is: ".$type1->user_level."</br>";

"</br>";
"</br>";
"</br>";
"</br>";



echo "My registered User Type is: ".$type2->user_type."</br>";
echo "My registered User ID is: ".$users->user_id."</br>";
echo "My registered User First Name is: ".$users->first_name."</br>";
echo "My registered User Last Name is: ".$users->last_name."</br>";
echo "My registered User Email Address is: ".$users->email_address."</br>";
echo "My registered User Level is: ".$type2->user_level."</br>";



?>

<div id="content">

 		<h1>

     </h1>

 	</div>

<?php





?>
