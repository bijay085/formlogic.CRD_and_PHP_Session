<?php 
$host = "localhost";
$dbuser = "root";
$dbpwd = "";

/**
 * Connection can be done in two way majourly
 * - (PHP MySQL) = MySQL query itself (recommended)
 * - (PDO) = Object concept to accept any DBMS lately (i.e.: MySQL, ProstGreSQL, SQL etc)
 * -------------------------------
 * PDO = PHP Data Objects
 * SQL = Structured Query Language
 * MySQL = Database Management System
 * phpmyadmin = GUI Platform to use MySQL 
 * 
 * Note1: We recommend MySQL queries on our project considering performance. Because, we are using MySQL DBMS, where lets not use Generalized Query standard like PDO.
 * 
 * Note2: Using PHP/MySQL, there are also two methods of connection
 * - procedural/function based (i.e.: mysqli_connect())
 * - object oriented / instance based (i.e.: new mysqli())
 *      $instance = new ObjectClass();
 *      i.e.: instance = new object();
 * 
 * Here, use instance based which is new method
 * - mysqli = MySQL instance (old has mylsql only as a term)
 */
/**
 * Creating database inside MySQL using phpmyadmin paltform
 * - Database Name
 * - Collation (Character Encoding)
 *      (Characters: Global, Local (Unicode))
 *      - Old general: UTF8_general_ci
 *      - New general: UTF8MB4_general_ci etc...
 *      - which exists in HTML as meta named characterset
 *              ie. <meta charset="UTF8">
 */
$dbname = "nmcbca4th";

// $conn = mysqli_connect(); //procedural
$conn = new mysqli($host, $dbuser, $dbpwd, $dbname); //object oriented
if(!$conn) die("Database connection failed!");
// else echo "correct"; //tested
