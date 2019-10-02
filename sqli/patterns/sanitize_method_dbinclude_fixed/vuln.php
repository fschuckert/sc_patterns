<?php

require_once("./init.php");
require_once("./include/basic.inc.php");
require_once("./include/sqlite.inc.php");
require_once("./sink.php");

dbConnect();


$id = $_REQUEST['id'];

$results = add_trackback($id);

foreach ($results as $row) 
{
    echo $row['val'];
}


?>