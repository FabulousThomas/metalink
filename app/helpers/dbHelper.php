<?php
// FUNCTION 
/**
 * Summary of selectAll
 */
function selectAll($table, $col)
{
   global $conn;
   return $conn->query("SELECT * FROM $table ORDER BY $col DESC");
}

/**
 * Summary of selectLimit
 */
function selectLimit($table, $col, $limit)
{
   global $conn;
   return $conn->query("SELECT * FROM $table ORDER BY $col DESC LIMIT $limit");
}

/**
 * Summary of selectWhere
 */
function selectWhere($table, $col, $param, $cols)
{
   global $conn;
   return $conn->query("SELECT * FROM $table WHERE $col = '$param' ORDER BY $cols DESC");
}

/**
 * Summary of selectDistinct
 */
function selectDistinct($table, $col)
{
   global $conn;
   return $conn->query("SELECT DISTINCT $col FROM $table");
}
function getAllActive($table, $col)
{
   global $conn;
   return $conn->query("SELECT * FROM $table WHERE visibility = '0' ORDER BY $col");

}
function getActiveId($table, $param, $col)
{
   global $conn;
   return $conn->query("SELECT * FROM $table WHERE user_id = '$param' AND visibility = '0' ORDER BY $col");

}

?>