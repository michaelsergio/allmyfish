<?php
header('Content-type: text/json');
header('Content-type: application/json');

mysql_connect("internal-db.s166639.gridserver.com", "db166639_pocDEV", "YY^^tt55") or die ('Error: '. mysql_error());
mysql_select_db("db166639_poc");

$id_param =  $_GET[id];
$random = $_GET[random];

$query = "SELECT * FROM db166639_plenty.cats";

if ($id_param != null)
   $query = $query. " WHERE id =". $id_param;

if ($random !=null)
   $query = $query. " ORDER BY RAND() LIMIT 0,1";

$result = mysql_query($query) or die ("Error updating database.");
$count_final = mysql_num_rows($result);
mysql_close();


    while($row = mysql_fetch_array( $result, MYSQL_ASSOC )) {
    $rows[] = $row;
              }
    echo json_encode(array('Cats' => (array)$rows));
    ?>

include 'client/app/meowornot.html';
