<?php

function dbConnect()
{
    global $variable;
    $variable['dbConn'] = new PDO('sqlite::memory:', null, null, array(PDO::ATTR_PERSISTENT => true));
}

function dbQuery($sql)
{
    global $variable;

    return $variable['dbConn']->query($sql);
}

function sanitize($string)
{
    static $search  = array("\x00", '%',   "'",   '\"');
    static $replace = array('%00',  '%25', "''", '\\\"');

    return str_replace($search, $replace, $string);
}

?>