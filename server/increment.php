<?php
header('Content-type: text/json');
header('Content-type: application/json');

mysql_connect("internal-db.s166639.gridserver.com", "db166639_pocDEV", "YY^^tt55") or die ('Error: '. mysql_error());
mysql_select_db("db166639_poc");

$id_param =  $_GET[id];
$field = $_GET[field];

$query = "UPDATE db166639_plenty.cats SET ". $field ." = ". $field ." + 1 WHERE id = '".$id_param."'";
$result = mysql_query($query) or die ("Error updating database.");
mysql_close();
?>

