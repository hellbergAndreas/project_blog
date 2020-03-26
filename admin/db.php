<?php

  /*****************************
   *
   * File name: db.php
   *
   * Author : Henningson/Hellberg
   *
   * Date: 2020-03-26
   *
   * File contains info about database
   * and user
   *
   *****************************/

  $db_server    = "localhost";
  $db_database  = "blogdb";
  $db_username  = "root";
  $db_password  = "root";

<<<<<<< HEAD
  try {
      $db = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8", $db_username, $db_password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo "<h2>Error: " .$e->getMessage(). "</h2";
  }
=======
  try{
    $db = new PDO("mysql:host=$db_server;dbname=$db_database;charset=utf8"
                  , $db_username
                  , $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    // echo "<h2>Connected Successfully</h2>";
    
  } catch(PDOException $e){
    echo "<h2>Error: " .$e->getMessage(). "</h2";
  }
>>>>>>> 54a67185c7d439a62859cc6f6809e05e1dcb6914
