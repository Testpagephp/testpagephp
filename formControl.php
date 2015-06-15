<?php require ('header.php');?>



<?php
$userData = [];
for($i=0; $i<count('$_REQUEST'); $i++){
    $userData[$i] = $_REQUEST[$i];
}
print_r($_REQUEST);

?>



<?php require ('footer.php'); ?>