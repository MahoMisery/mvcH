<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>
HOME PAGE

<!-- hyperlink naar de coaster page-->
<a style="padding-left:500px;"  id="linkje1" href="<?= URLROOT; ?>/rollercoaster/index"><button class="btn btn-primary btn-lg active"> Ga naar de coasters!</button></a>