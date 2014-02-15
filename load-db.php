<?php


function listdirfile_by_date($path)
{
    $dir = opendir($path);
    $list = array();
    while($file = readdir($dir))
    {
        if($file != '..' && $file != '.' && strpos($file, ".sql"))
        {
            $list[] = $file;
        }
    }
    closedir($dir); 
    krsort($list);

    foreach($list as $key => $value)
    {
        return $path.'/'.$list[$key];
    }
    return '';
}



$filename = listdirfile_by_date('db-dumps');

echo "opening: <b>".$filename."</b>";


// MySQL host
$mysql_host = 'localhost';
// MySQL username
$mysql_username = 'root';
// MySQL password
$mysql_password = '';
// Database name
$mysql_database = 'netgig';

$localhost_url = "http://localhost/rrdstatic";

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
// Select database
//

/*

 	drop all tables of the current db.
 	TO_DO: make a backup first?
 	
*/

 mysql_query("DROP DATABASE $mysql_database");
 mysql_query("CREATE DATABASE $mysql_database");
 


 mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error()); 

 mysql_query("USE DATABASE $mysql_database");

/*
	NOW IMPORT THE FILE 

*/






// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

 if (strpos($line, "SITEURL")) $line = str_replace("SITEURL", $localhost_url, $line);

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
 echo "Tables imported successfully";
