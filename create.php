<?php
require_once("db_connect.php");

if(isset($_POST['submit'])) {
  $title = $_POST['todoTitle'];
  $description = $_POST['todoDescription'];
  //connect to database
      echo "you filled title" . $title . "<br> and description " . $description;
  db();
  global $link;
  $query = "INSERT INTO todo(todoTitle, todoDescription, date) VALUES ('$title','description', now() )";
  $insertTodo = mysqli_query($link, $query);
  if($insertTodo){
    echo "succesfully";
  }else{
    echo mysqli_error($link);
  }
  mysqli_close($link);
}
?>



<html>
<head>
  <title>Create ToDo List</title>
</head>
<body>
  <form method="post" action="create.php">
    <p>ToDo title: </p>
    <input name="todoTitle" type="text">
    <p>ToDo description: </p>
    <input name="todoDescription" type="text">
    <hr>
    <input name="submit" type="submit" value="submit">
  </form>
</body>
</html>
