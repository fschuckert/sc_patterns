<?php

function fetchValue($value)
{
    $value = sanitize($value);
    $sql = "SELECT val FROM Tests WHERE val='$value'";

    return dbQuery($sql);
}

?>