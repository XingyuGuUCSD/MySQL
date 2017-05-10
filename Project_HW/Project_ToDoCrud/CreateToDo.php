<HTML>
    <HEAD>
        <TITLE>CreateToDo</TITLE>
        <META http-eqiv = Content-Type content="text/html; charset=utf-8">
        <script type="text/javascript">
            function validateForm(){
                return true;
            };
        </script>
    </HEAD>
    <BODY>
        <h1>New To-Do</h1>
        <form action="CreateToDoSubmit.php" method="POST" onsubmit="return validateForm"/>
            <p>To-do title: <input type="text" name="ToDoTitle" maxlength='50' required/></p>
            <p>To-Due date: <input type="text" name="ToDueDate"/></p>
            <p>Description:<br><textarea cols='100' rows='5' name="ToDoDescription" maxlength='1000' required></textarea></p>
            <input type="submit">
        </form>
    </BODY>
</HTML>