<?php
/**
 * Created by PhpStorm.
 * User: veerajshenoy
 * Date: 22/04/17
 * Time: 12:07 PM
 */

declare(strict_types=1);

//Localhost Array
$whitelist = array(
    '127.0.0.1',
    '::1'
);

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    //WHEN RUNNING ON LOCALHOST
    define("SERVERNAME", "localhost");
    define("USERNAME", "localusername");
    define("PASSWORD", "localpassword");
    define("DBNAME", "localserverdb");
    define("SQLITEDBNAME", "localsqlitedb.sqlite");
    define("PROD", FALSE);
} else {
    //WHEN RUNNING ON SERVER
    define("SERVERNAME", "localhost");
    define("USERNAME", "productionusername");
    define("PASSWORD", "productionpassword");
    define("DBNAME", "productionserverdb");
    define("SQLITEDBNAME", "productionserversqlitedb.sqlite");
    define("PROD", TRUE);
}


//SET Root location of project
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    //WHEN RUNNING ON LOCALHOST
    define('BASEPATH', '');
    define("ROOT", "/localhost/");
} else {
    //WHEN RUNNING ON SERVER
    define('BASEPATH', '/');
    define("ROOT", "/");
}

define("USEPDOMYSQL", "NO");//YES OR NO
define("USEPDOSQLITE", "NO");//YES OR NO

//Enable Pagenot Found
//SET LINK NAME IN main.php in if(PAGENOTFOUNDREDIRECT == "YES") structure.
define("PAGENOTFOUNDREDIRECT", "YES");//YES OR NO

//Enable HTML Compression
define("HTMLCOMPRESSION", "NO");//YES OR NO