<?php
include('SQLFunctions.php');
if(!empty($_POST)){
    $tdID = $_POST['q'];
    
    $link = connectDB();
    
    $sql = "DELETE
            FROM ToDos
            WHERE ToDoId = ".$tdID.";";
    /*echo"sql :".$sql."We will comment this out after testing";*/
    
    if(mysqli_query($link, $sql)){
        echo "<br>Deleted record successfully";
    } else{
        echo "<br>Error :".$sql."<br>".mysqli_error($link);
    }
    mysqli_close($link);
    header("Location: ToDoApp.php");
    
}

?>