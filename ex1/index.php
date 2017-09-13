
<?php
include "_includes/config.php";

include ABSOLUTE_PATH . "_includes/header.inc.php";

include ABSOLUTE_PATH . "_includes/main_nav.inc.php";

 ?>
<div id="content">

 		<h1>

     </h1>

 	</div>

<?php


    $myArray = array('MyName'=>'Sam Shrock','MyFavoriteColor'=>'Red','MyFavoriteBook'=>'Along Came A Spider','MyFavoriteMovie'=>'Dark Knight','MyFavoriteWebsite'=>'Reddit');

    foreach($myArray as $key => $item) {
      echo "$key: $item<br/>";

    }

    echo "<h1> Sam Shrock </h1>";

    if( count( $myArray) > 0) {
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $myArray) . '</li>';
    echo '</ul>';
}


?>

<?php

include ABSOLUTE_PATH . "_includes/footer.inc.php";

 ?>
