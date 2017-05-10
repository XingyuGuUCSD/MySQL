<?php
include('SQLFunctions.php');

$q = $_POST["q"];

$link = connectDB();

/*$sql = "SELECT ToDoID, ToDoTitle, ToDoDescription, ToDueDate FROM ToDos WHERE ToDoID = 4";*/

$sql = "SELECT ToDoID, ToDoTitle, ToDoDescription, ToDueDate FROM ToDos WHERE ToDoID = ".$q;

echo '<br>sql :'.$sql.'<br>Ill comment this our after testing';

if($stmt = $link->prepare($sql)){
    $stmt->execute();
    $stmt->bind_result($ToDoID, $ToDoTitle, $ToDoDescription, $ToDueDate);
    while($stmt->fetch()){
        $newToDueDate = date("Y-m-d", strtotime($ToDueDate));
        echo"<BODY>";
            echo"   <div>";
            echo"       <div>";
            echo"       <h1>Update To-Do</h1>";
            /*Create and prepopulate an html form with the values pulled from the databases.*/
            echo"       <form action='UpdateToDoCommit.php' method = 'POST' onsubmit='' />";
            echo"        <input type='hidden' name='ToDoId' value='".$ToDoID."'>";
            echo"        <p>To-do Title   <input text='text' name='ToDoTitle' maxlength='50' required value='".$ToDoTitle."'/></p>";
            echo"        <p>To-due Date:  <input type='date' name='ToDueDate' value='".$newToDueDate."'/></p>";
            echo"        <p>Decription:<br>  <textarea cols='100' row='5' name='ToDoDescr' maxlength='1000' required>".$ToDoDescription."</textarea></p>";
            echo"        <input type='submit'>";
            echo"       </form>";
            echo"       <a href='ToDoApp.php'><button>Cancel</button></a>";
            echo"       </div>";
            echo"   </div>";
        echo"</BODY>";
    }
} else {
    echo"unable to connect";
    exit();
}
?>