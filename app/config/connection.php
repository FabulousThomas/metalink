<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS)
   or die("Couldn't connect to database");

if ($conn->query("CREATE DATABASE IF NOT EXISTS metalink")) {
   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}