<?php
function db(){
  global $link;
  $link = mysqli_connect("localhost", "root", "", "todolist") or die("I couldn't connect to database");
  return $link;
}
if(db()){
  echo "Connected to database!";
}
?>

