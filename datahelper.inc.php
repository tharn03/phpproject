<?php
function unmq($data){ // unmagic_quotes for data
if(($data !== null) && get_magic_quotes_gpc())
$data = stripslashes($data);
return $data;
}
?>