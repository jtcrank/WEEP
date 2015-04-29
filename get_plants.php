<?php

/*  Copyright (C) <2015>
*  Josh Crank - crank.5@wright.edu
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  You should have received a copy of the GNU General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.

-------------------------------------------------------------------------
File Description:
Grabs data from the plant database and echos it as JSON for various uses.
-------------------------------------------------------------------------*/

$tc = array();

// MySQL database connection and query
$query = "SELECT * FROM CONDITIONS ORDER BY timestamp ASC";

/* ATTN!!!! The connection line is a placeholder only. All connection
 credentials should be handled via a config file to secure information */
$link = mysqli_connect("XX.XXX.XXX.XXX", "XXXXXXXX", "XXXXXXXX", "XXXXXXXXX");

$results = mysqli_query($link, $query);
foreach($results as $result){
    $t = array("ID" => $result['ID'], "moisture" => $result['moisture'], "temp" => $result['temperature'], "lumens" => $result['luminosity'], "timestamp" => '');
    $tc[] = $t;
}

// echo data in JSON format
echo json_encode($tc);

?>
