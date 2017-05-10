<?php
include('SQLFunctions.php');

?>
<html>
    <head>
        <style>
        table, th, td { border: 1px solid black;
                        border-collapse: collapse; }
        table th { background-color: black;
                   color: white; }    
        table tr:nth-child(even) { background-color: #eee; }
        table tr:nth-child(odd)  { background-color: #fff; }
        </style>
    </head>

<body>
<?php
    $link = connectDB();
    $sql = "insert into ToDos(ToDoTitle, ToDoDescription) values ('test', 'testdescription');";
    if(mysqli_query($link, $sql)){
        echo "<br> New record created successfully";
    }
    else{
        echo "Error: " .$sql."<br>" .mysqli_error($link, $sql);
    }
    if(mysqli_error($link)){
        echo "<br>Error:" . mysqli_error($link);
    } else{echo "<br> Connect Successfully";}
    mysqli_close($link);
?>
</body>
    <h1>To-Do App Main View</h1>
    <a href="CreateToDo.php"><button>New To Do</button></button></a>
<?php
    $sql="SELECT ToDoTitle
               , ToDoDescription
               , DATE_FORMAT(ToDueDate,'%m-%d-%Y')
               ,ToDoID
          FROM ToDos;";
          /*'<br>sql:'.$sql.'<br>We will comment this out after testing<br>';*/
    
    $link = connectDB();
    
    if($result = mysqli_query($link, $sql)){
        echo'<br>New record created successfully';
        echo "<table>";
        //header
            echo"<tr>";
                echo"<td>Title</td>";
                echo"<td>Description</td>";
                echo"<td>DueDate</td>";
                echo"<td>Action</td>";
            echo"</tr>";
        while($row = mysqli_fetch_array($result)){
            echo"<tr>";
                echo"<td>{$row[0]}</td>";
                echo"<td>{$row[1]}</td>";
                echo"<td>{$row[2]}</td>";
                echo"<td><form action='UpdateToDo.php' method='POST' onsubmit='' />
                     <input type='hidden' name = 'q' value='".$row[3]."' /><input type='Submit' value='Update'></form>";
                echo"<form action='DeleteToDo.php' method='POST' onsubmit=''/>
                     <input type='hidden' name = 'q' value='".$row[3]."' /><input type='Submit' value='Delete'></form>";
                echo"</td>";
            echo"</tr>";
        }
        echo "</table>";
    }
    
    mysqli_close($link);
?>
</html>