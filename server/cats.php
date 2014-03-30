<?php


mysql_connect("internal-db.s166639.gridserver.com", "db166639_pocDEV", "YY^^tt55") or die ('Error: '. mysql_error());
mysql_select_db("db166639_poc");


$query = "SELECT * FROM db166639_plenty.cats  ORDER BY RAND() LIMIT 0,1";

$result = mysql_query($query) or die ("Error updating database.");
$count_final = mysql_num_rows($result);
mysql_close();


$row = mysql_fetch_array( $result, MYSQL_ASSOC );
$cat_name = $row['name'];
$desc = $row['description'];
$adoption_url = $row['adoption_url'];
$location = $row['location'];
$breed = $row['breed'];
$desc = $row['description'];
$size = $row['size'];
$age = $row['age'];
$image_url = $row['image_url'];
$petfinder = "http://www.petfinder.com/petdetail/28343045".$row['petfinder_id'];

include 'meowornot.html';
?>


