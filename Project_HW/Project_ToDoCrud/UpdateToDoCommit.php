<?php
include('SQLFunctions.php');

if(!empty($_POST)){
    $tdID = $_POST['ToDoId'];
    $tdTitle = $_POST['ToDoTitle'];
    $tdDate = $_POST['ToDueDate'];
    $tdDescr = $_POST['ToDoDescr'];
    
    $link = connectDB();
    
    $sql = "UPDATE ToDos
            SET ToDoTitle = '".$tdTitle."'
                ,ToDoDescription = '".$tdDescr."'
                ,ToDueDate = '".$tdDate."'
                ,UpdateTS = NOW()
            WHERE ToDoID = ".$tdID.";";
            echo $sql."<br>This will be commented out after testing<br>";
            if(mysqli_query($link, $sql)){
                echo"<br>Update completed successfully";
            }
            else{
                echo"<br>Error:".$sql.mysqli_error($link);
            }
            mysqli_close($link);
            header("Location: ToDoApp.php");
}
?>