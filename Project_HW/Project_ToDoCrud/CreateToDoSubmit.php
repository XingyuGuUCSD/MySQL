<?php
include('SQLFunctions.php');
if(!empty($_POST)){
    $tdTitle = $_POST['ToDoTitle'];
    $tdDate = $_POST['ToDueDate'];
    $tdDescr = $_POST['ToDoDescription'];
    
    $link = connectDB();
    $sql = "INSERT INTO ToDos(ToDoTitle, ToDoDescription, ToDueDate, EntryTS) VALUES
    ('".$tdTitle."','".$tdDescr."','".$tdDate."', NOW());";
    
    if(mysqli_query($link,$sql)){
        /*echo"<br>New record created successfully";*/
    }
    else{
        echo"<br>Error:" .$sql. "<br>" .mysql_error($link);
    }
    mysqli_close($link);
    header("Location: ToDoApp.php");
}
?>