<?php
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "root");
  define("DB_NAME", "spagroups");

// for the live version to spa db
  // define("DB_SERVER","localhost");
  // define("DB_USER","spagrou1_spagrou");
  // define("DB_PASS","P@55w0rd!");
  // define("DB_NAME","spagrou1_spagroups");
  // define("DB_PORT","3306"); // default: 3306, Randy uses 8889

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    echo "all good";
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>